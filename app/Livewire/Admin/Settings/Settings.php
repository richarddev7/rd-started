<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;

class Settings extends Component
{

    public $titlePage = 'Settings';

    public function render()
    {
        return view('livewire.admin.settings.settings')->extends('components.layouts.adminApp', [
            'title' => $this->titlePage
        ]);
    }
}
