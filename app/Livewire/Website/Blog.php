<?php

namespace App\Livewire\Website;

use App\Models\MPost;
use App\Models\MPostCategories;
use Livewire\Component;

class Blog extends Component{

    public $titlePage = 'Blog';
    public $listBlog;
    public $category = null;

    public function mount($slug = null){

        //dd($slug);

        $dataPost = MPost::query();
        $dataPost->where('type_post', '=', 'article');

        if(!is_null($slug)){

            $this->titlePage = 'Category:';

            $dataPostCategory = MPostCategories::where('slug_category', '=',$slug)->first();

            //dd($dataPostCategory);

            if(is_null($dataPostCategory)){
                $this->category = null;
            }else{

                $this->category = $dataPostCategory;

                foreach ($dataPost->get() as $article) {

                    if(count(json_decode($article->category_post)) != 0 && in_array($this->category['id_post_category'], json_decode($article->category_post)) == true){
                        $listArticles[] = $article;
                    }

                }

            }

            // Articulos de categoria
            if(isset($listArticles) && !is_null($listArticles)){
                $this->listBlog = $listArticles;
            }else{
                $this->listBlog = null;
            }

        }else{
            $this->listBlog = $dataPost->get();
        }

    }

    public function render(){

        //dd($this->listBlog);

        if(!is_null($this->listBlog)){
            return view('livewire.website.blog');
        }else if(!is_null($this->category)) {
            return view('livewire.website.blog');
        }else{
            return view('livewire/website/error-404');
        }


    }
}
