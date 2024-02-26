<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{

    public $titlePage = 'Dashboard';

    public function mount()
    {


    }

    public function render()
    {
        return view('livewire.admin.dashboard')->extends('components.layouts.adminApp', [
            'title' => $this->titlePage
        ]);
    }
}
