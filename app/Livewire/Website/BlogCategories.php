<?php

namespace App\Livewire\Website;

use App\Models\MPost;
use App\Models\MPostCategories;
use Livewire\Component;

class BlogCategories extends Component{

    public $titlePage;
    public $listArticlesCategories;
    public $category;

    public function mount($slug){


        $dataPostCategory = MPostCategories::where('slug_category', '=',$slug)->first();

        if(!is_null($dataPostCategory)){

            $this->titlePage = $dataPostCategory['name_category'];
            $this->category = $dataPostCategory;

            $dataPost = MPost::query();
            $dataPost->where('type_post', '=', 'article');

            $articlesCategories = $dataPost->get();
            if(!is_null($articlesCategories)){

                $listArticles = [];
                foreach ($articlesCategories as $article) {

                    if(count(json_decode($article->category_post)) != 0 && in_array($this->category['id_post_category'], json_decode($article->category_post)) == true){
                        $listArticles[] = $article;
                    }

                    if(count(json_decode($article->category_post)) == 0){
                        $listArticles = [];
                    }

                }

            }else{
                $listArticles = null;
            }


            $this->listArticlesCategories = $listArticles;


        }else{
            $this->category = null;
            $this->listArticlesCategories = null;
        }

    }

    public function render(){

        if(!is_null($this->category)){
            return view('livewire.website.blog-categories');
        }else{
            return view('livewire/website/error-404');
        }


    }

}
