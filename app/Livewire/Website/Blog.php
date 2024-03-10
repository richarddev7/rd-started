<?php

namespace App\Livewire\Website;

use App\Models\MPost;
use Livewire\Component;

class Blog extends Component{

    public $titlePage = 'Blog';
    public $listBlog;

    public function mount(){

        $dataPost = MPost::query();
        $dataPost->where('type_post', '=', 'article');

        $this->listBlog = $dataPost->get();

    }

    public function render(){

        //dd($this->listBlog);

        if(!is_null($this->listBlog)){
            return view('livewire.website.blog');
        }else{
            return view('livewire/website/error-404');
        }


    }
}
