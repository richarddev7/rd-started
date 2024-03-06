<?php

namespace App\Livewire\Admin\Pages;

use App\Models\MPost;
use Livewire\Component;

class Pages extends Component{

    public $titlePage = 'Paginas';
    public $pageSearch;
    public $infoPage;

    public function createPage(){

        return view('livewire.admin.pages.create', [
            'title' => 'Create page'
        ]);

    }

    public function editPage($id){

        // Consulto la pagina
        $pageData = MPost::where('id_post', $id)->first();

        return view('livewire.admin.pages.edit', [
            'title' => 'Edit user',
            'page' => $pageData
        ]);

    }

    public function openModalDelete($page) {
        $this->infoPage = $page;
    }

    public function deletePage($idPage) {

        MPost::find($idPage)->delete();
        session()->flash('message', 'Page deleted successfully.');

        $this->dispatch('pageDeleted');

    }

    public function updateStatusPage($idPage){

        $infoPage = MPost::where('id_post', $idPage)->first();

        MPost::where('id_post', $infoPage->id_post)->update([
            'status_post'        => ($infoPage->status_post == 0) ? 1 : 0
        ]);

        session()->flash('message', 'User updated successfully.');

    }

    public function render(){

        // busqueda
        $pages = MPost::where('title_post', 'like', '%' . $this->pageSearch . '%')
            ->orderBy('create_date_post', 'desc')
            ->paginate(NUM_PAGINATE_DEFAULT_SYSTEM);

        return view('livewire.admin.pages.pages', [
            'pages' => $pages
        ])->extends('components.layouts.adminApp', [
            'title' => $this->titlePage
        ]);

    }
}
