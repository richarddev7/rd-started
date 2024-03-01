<?php

namespace App\Livewire\Admin\Pages;

use App\Models\MPost;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\Attributes\Computed;

class FormPages extends Component{

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

    public function storePage(){

        //dd($this->name);

        $this->validate([
            'title' => ['required', 'min:3'],
            'slug' => ['required', 'min:3']
        ]);

        $pageData = new MPost();
        $pageData->title_post = $this->title;
        $pageData->slug_post = $this->slug;
        $pageData->type_post = 'page';
        $pageData->content_post = $this->formFieldContent;
        $pageData->status_post = ($this->status == 1) ? 1 : 0;
        $pageData->create_date_post = Carbon::now()->toDateTimeString();
        $pageData->update_date_post = Carbon::now()->toDateTimeString();
        $pageData->save();

        session()->flash('message', 'Page created successfully.');
        return redirect()->route('app-pages');
    }

    public function updatePage(){

        $this->validate([
            'title' => ['required', 'min:3'],
            'slug' => ['required', 'min:3']
        ]);

        MPost::where('id_post', $this->idPage)->update([
            'title_post'            => $this->title,
            'slug_post'             => $this->slug,
            'content_post'          => $this->formFieldContent,
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
