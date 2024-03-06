<?php

namespace App\Livewire\Admin\Articles;

use App\Models\MPost;
use App\Models\MPostCategories;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormArticles extends Component
{
    use WithFileUploads;

    // Config Form
    public $actionForm;
    public $btnSubmitForm;
    public $editForm = false;
    public $article;

    // Form Field
    public $idArticle;
    public $formFieldContent;
    public $title;
    public $slug;
    public $categories = [];
    public $categoriesArticle = [];
    public $status;
    public $seoTitle;
    public $seoDescription;
    public $seoKeyworks;
    public $seoImage;

    public function storeArticle(){

        $this->validate([
            'seoImage' => ['nullable', 'image', 'max:1024'],
            'title' => ['required', 'min:3'],
            'slug' => ['required', 'min:3'],
            'seoTitle' => ['max:200'],
            'seoDescription' => ['max:350'],
            'seoKeyworks' => ['max:350'],
        ]);

        // Realizo la carga de la imagen del usuario
        if($this->seoImage){

            // Defino el nombre de la imagen
            $customNameImageArticle = "upload/post/article_" . uniqid() . "." . $this->seoImage->extension();

            // Almaceno la imagen
            $this->seoImage->storeAs('public', $customNameImageArticle);

        }else{
            $customNameImageArticle = null;
        }

        $articleData = new MPost();
        $articleData->title_post = $this->title;
        $articleData->slug_post = $this->slug;
        $articleData->type_post = 'article';
        $articleData->content_post = $this->formFieldContent;
        $articleData->title_seo_post = $this->seoTitle;
        $articleData->description_seo_post = $this->seoDescription;
        $articleData->keywords_seo_post = $this->seoKeyworks;
        $articleData->img_cover_post = $customNameImageArticle;
        $articleData->category_post = json_encode($this->categoriesArticle);
        $articleData->status_post = ($this->status == 1) ? 1 : 0;
        $articleData->create_date_post = Carbon::now()->toDateTimeString();
        $articleData->update_date_post = Carbon::now()->toDateTimeString();
        $articleData->save();

        session()->flash('message', 'Article created successfully.');
        return redirect()->route('app-articles');
    }

    public function updateArticle(){

        $this->validate([
            'seoImage' => ['nullable', 'image', 'max:1024'],
            'title' => ['required', 'min:3'],
            'slug' => ['required', 'min:3'],
            'seoTitle' => ['max:200'],
            'seoDescription' => ['max:350'],
            'seoKeyworks' => ['max:350'],
        ]);

        // Consulto la informacion del usuario
        $articleData = MPost::where('id_post', $this->idArticle)->first();

        // Realizo la carga de la imagen del usuario
        if($this->seoImage){

            // Defino el nombre de la imagen
            $customName = "upload/post/article_" . uniqid() . "." . $this->seoImage->extension();

            // Almaceno la imagen
            $this->seoImage->storeAs('public', $customName);

            // Verifico si existe una imagen para eliminarla
            if (!is_null($articleData->img_cover_post)) {
                if (Storage::exists('public/' . $articleData->img_cover_post)) {
                    Storage::delete('public/' . $articleData->img_cover_post);
                }
            }


        }else{
            // dejo el valor que estaba originalmente
            $customName = $articleData->img_cover_post;
        }

        MPost::where('id_post', $this->idArticle)->update([
            'title_post'            => $this->title,
            'slug_post'             => $this->slug,
            'content_post'          => $this->formFieldContent,
            'title_seo_post'        => $this->seoTitle,
            'description_seo_post'  => $this->seoDescription,
            'keywords_seo_post'     => $this->seoKeyworks,
            'img_cover_post'        => $customName,
            'category_post'         => json_encode($this->categoriesArticle),
            'status_post'           => ($this->status == 1) ? 1 : 0,
            'update_date_post'      => Carbon::now()->toDateTimeString()
        ]);

        session()->flash('message', 'Article updated successfully.');
        return redirect()->route('app-articles');
    }

    public function mount(){

        //dd(DB::table('app_post_categories')->get()->toArray());



    }

    public function render(){

        $this->categories = DB::table('app_post_categories')->get()->toArray();

        // Convierto el titulo en slug del articulo
        $this->slug =  Str::slug($this->title, '-');

        return view('livewire.admin.articles.form-articles');
    }
}
