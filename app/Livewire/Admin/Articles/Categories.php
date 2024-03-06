<?php

namespace App\Livewire\Admin\Articles;

use App\Models\MPostCategories;
use Illuminate\Support\Str;
use Livewire\Component;
use Illuminate\Support\Carbon;

class Categories extends Component
{
    public $titlePage = 'Categories';
    public $categoriesSearch;
    public $infoCategory;

    // Field Form
    public $actionFormModal;
    public $modalFieldIDCategory;
    public $modalFieldSlugCategory;
    public $modalFieldNameCategory;
    public $modalFieldDescriptionCategory;



    public function openModalCreate(){

        //dd($category);

        $this->actionFormModal = 'storeCategory';
        $this->modalFieldIDCategory = null;
        $this->modalFieldNameCategory = null;
        $this->modalFieldSlugCategory = null;
        $this->modalFieldDescriptionCategory = null;

    }

    public function storeCategory(){

        $this->validate([
            'modalFieldNameCategory' => ['required', 'min:3']
        ]);

        $categoryData = new MPostCategories();
        $categoryData->name_category = $this->modalFieldNameCategory;
        $categoryData->slug_category = Str::slug($this->modalFieldNameCategory);
        $categoryData->description_category = $this->modalFieldDescriptionCategory;
        $categoryData->create_date_category = Carbon::now()->toDateTimeString();
        $categoryData->update_date_category = Carbon::now()->toDateTimeString();
        $categoryData->save();

        session()->flash('message', 'Category created successfully.');
        return redirect()->route('app-articles-categories');
    }

    public function openModalEdit($category){

        //dd($category);

        $this->actionFormModal = 'updateCategory';
        $this->modalFieldIDCategory = $category['id_post_category'];
        $this->modalFieldNameCategory = $category['name_category'];
        $this->modalFieldSlugCategory = $category['slug_category'];
        $this->modalFieldDescriptionCategory = $category['description_category'];

    }

    public function updateCategory(){

        $this->validate([
            'modalFieldIDCategory' => ['required'],
            'modalFieldNameCategory' => ['required', 'min:3'],
            'modalFieldSlugCategory' => ['required', 'min:3']
        ]);

        MPostCategories::where('id_post_category', $this->modalFieldIDCategory)->update([
            'name_category'             => $this->modalFieldNameCategory,
            'slug_category'             => Str::slug($this->modalFieldSlugCategory),
            'description_category'      => $this->modalFieldDescriptionCategory,
            'update_date_category'      => Carbon::now()->toDateTimeString()
        ]);

        session()->flash('message', 'Category updated successfully.');

        $this->dispatch('closeModal');

        return redirect()->route('app-articles-categories');
    }

    public function openModalDeleteCategory($category) {
        $this->infoCategory = $category;
    }

    public function deleteCategory($id) {

        MPostCategories::where('id_post_category', $id)->delete();
        session()->flash('message', 'Category deleted successfully.');

        $this->dispatch('closeModal');

    }

    public function mount(){
        // Action inicial del formulario de model de categoria
        $this->actionFormModal = 'storeCategory';
    }

    public function render(){

        // Convierto el nombre en slug de la categporia
        if(is_null($this->modalFieldIDCategory)){
            $this->modalFieldSlugCategory =  Str::slug($this->modalFieldNameCategory, '-');
        }

        // Busqueda
        $categories = MPostCategories::where('name_category', 'like', '%' . $this->categoriesSearch . '%')
            ->orderBy('create_date_category', 'desc')
            ->paginate(NUM_PAGINATE_DEFAULT_SYSTEM);

        return view('livewire.admin.articles.categories', [
            'categories' => $categories
        ])->extends('components.layouts.adminApp', [
            'title' => $this->titlePage
        ]);

    }
}
