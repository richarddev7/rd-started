<?php

namespace App\Livewire\Admin\Articles;

use App\Models\MPost;
use App\Models\MPostCategories;
use Livewire\Component;

class Articles extends Component
{

    public $titlePage = "Articles";
    public $infoArticle;
    public $articleSearch;

    public function createArticle(){

        return view('livewire.admin.articles.create', [
            'title' => 'Create page'
        ]);

    }

    public function editArticle($id){

        // Consulto la pagina
        $articleData = MPost::where('id_post', $id)->first();

        return view('livewire.admin.articles.edit', [
            'title' => 'Edit article',
            'article' => $articleData
        ]);

    }

    public function updateStatusArticle($idArticle){

        $infoArticle = MPost::where('id_post', $idArticle)->first();

        MPost::where('id_post', $infoArticle->id_post)->update([
            'status_post'        => ($infoArticle->status_post == 0) ? 1 : 0
        ]);

        session()->flash('message', 'Article updated successfully.');

    }

    public function openModalDelete($article) {
        $this->infoArticle = $article;
    }

    public function deleteArticle($idArticle) {

        MPost::where('id_post', $idArticle)->delete();
        session()->flash('message', 'Article deleted successfully.');

        $this->dispatch('articleDeleted');

    }

    public function render(){

        // busqueda
        $articles = MPost::where('title_post', 'like', '%' . $this->articleSearch . '%')
            ->where('type_post', 'article')
            ->orderBy('create_date_post', 'desc')
            ->paginate(NUM_PAGINATE_DEFAULT_SYSTEM);

        return view('livewire.admin.articles.articles', [
            'articles' => $articles
        ])->extends('components.layouts.adminApp', [
            'title' => $this->titlePage
        ]);
    }
}
