<?php

namespace App\Livewire\Website;

use App\Models\MPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Website extends Component{

    public $post;
    public $postType;
    public $categories;

    public function mount($slug){

        // Verifico si existe y si esta activo
        $dataPost = MPost::query();
        $dataPost->where('slug_post', '=', $slug);

        // VAlido que el usuario este logueado para mostrarle el articulo
        if(Auth::check() != 'true'){
            $dataPost->where('status_post', '=', 1);
        }

        // Informacion del post
        $this->post = $dataPost->first();

        if(!is_null($this->post)){
            $this->postType = $this->post['type_post'];

            if($this->postType == 'article'){
                $this->categories = DB::table('app_post_categories')->get()->toArray();
            }
        }

    }

    public function render(){

        if($this->postType == 'page'){
            return view('livewire.website.website-page'); // Page
        }elseif ($this->postType == 'article'){
            return view('livewire.website.website-article'); // Article
        }else{
            return view('livewire/website/error-404'); // Error 404
        }


    }
}
