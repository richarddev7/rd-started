<?php

namespace App\Livewire\Partials;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

// Libreria de modal con livewire 3
// https://github.com/wire-elements/modal

class ModalGetInfoProperty extends ModalComponent
{
    public function render()
    {
        return view('livewire.partials.modal-get-info-property');
    }
}
