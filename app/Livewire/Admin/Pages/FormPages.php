<?php

namespace App\Livewire\Admin\Pages;

use App\Models\MPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\Attributes\Computed;
use Livewire\WithFileUploads;

class FormPages extends Component{

    use WithFileUploads;

    // Config Form
    public $actionForm;
    public $btnSubmitForm;
    public $editForm = false;
    public $page;

    // Form Field
    public $idPage;
    public $formFieldContent;
    public $title;
    public $slug;
    public $status;
    public $seoTitle;
    public $seoDescription;
    public $seoKeyworks;
    public $seoImage;

    public function storePage(){

        //dd($this->name);

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
            $customNameImagePage = "upload/post/page_" . uniqid() . "." . $this->seoImage->extension();

            // Almaceno la imagen
            $this->seoImage->storeAs('public', $customNameImagePage);

        }else{
            $customNameImagePage = null;
        }

        $pageData = new MPost();
        $pageData->title_post = $this->title;
        $pageData->slug_post = $this->slug;
        $pageData->type_post = 'page';
        $pageData->content_post = $this->formFieldContent;
        $pageData->title_seo_post = $this->seoTitle;
        $pageData->description_seo_post = $this->seoDescription;
        $pageData->keywords_seo_post = $this->seoKeyworks;
        $pageData->img_cover_post = $customNameImagePage;
        $pageData->status_post = ($this->status == 1) ? 1 : 0;
        $pageData->create_date_post = Carbon::now()->toDateTimeString();
        $pageData->update_date_post = Carbon::now()->toDateTimeString();
        $pageData->save();

        session()->flash('message', 'Page created successfully.');
        return redirect()->route('app-pages');
    }

    public function updatePage(){

        $this->validate([
            'seoImage' => ['nullable', 'image', 'max:1024'],
            'title' => ['required', 'min:3'],
            'slug' => ['required', 'min:3'],
            'seoTitle' => ['max:200'],
            'seoDescription' => ['max:350'],
            'seoKeyworks' => ['max:350'],
        ]);

        // Consulto la informacion del usuario
        $pageData = MPost::where('id_post', $this->idPage)->first();

        // Realizo la carga de la imagen del usuario
        if($this->seoImage){

            // Defino el nombre de la imagen
            $customName = "upload/post/page_" . uniqid() . "." . $this->seoImage->extension();

            // Almaceno la imagen
            $this->seoImage->storeAs('public', $customName);

            // Verifico si existe una imagen para eliminarla
            if (!is_null($pageData->img_cover_post)) {
                if (Storage::exists('public/' . $pageData->img_cover_post)) {
                    Storage::delete('public/' . $pageData->img_cover_post);
                }
            }


        }else{
            // dejo el valor que estaba originalmente
            $customName = $pageData->img_cover_post;
        }

        MPost::where('id_post', $this->idPage)->update([
            'title_post'            => $this->title,
            'slug_post'             => $this->slug,
            'content_post'          => $this->formFieldContent,
            'title_seo_post'        => $this->seoTitle,
            'description_seo_post'  => $this->seoDescription,
            'keywords_seo_post'     => $this->seoKeyworks,
            'img_cover_post'        => $customName,
            'status_post'           => ($this->status == 1) ? 1 : 0,
            'update_date_post'      => Carbon::now()->toDateTimeString()
        ]);

        session()->flash('message', 'Page updated successfully.');
        return redirect()->route('app-pages');
    }

    public function render(){

        $this->slug =  Str::slug($this->title, '-');

        return view('livewire.admin.pages.form-pages');

    }
}
