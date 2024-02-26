<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component{

    public function logoutUser(){

        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();

        session()->flash('success', 'Sesión cerrada exitosamente!!');
        return redirect()->route('login-admin');
    }

    public function render()
    {
        return view('livewire.admin.logout');
    }
}
