<?php

namespace App\Livewire\Admin\Settings;

use App\Models\MUserAdicional;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DarkMode extends Component{

    public $darkMode;

    public function toggleDarkMode($idUser){

        $infoUser = MUserAdicional::where('id_user_adicional', $idUser)->first();

        //dd($infoUser->dark_mode);

        if($infoUser->dark_mode == 1){
            // Cuenta Activa
            MUserAdicional::where('id_user_adicional', $idUser)->update([
                'dark_mode'        => 0
            ]);

            // Actualizo el parametro en la sesion
            session()->put('dark_mode_system', '0');

            $this->darkMode = 0;

        }else{
            // Cuenta Desactivada
            MUserAdicional::where('id_user_adicional', $idUser)->update([
                'dark_mode'        => 1
            ]);

            // Actualizo el parametro en la sesion
            session()->put('dark_mode_system', '1');

            $this->darkMode = 1;

        }

    }

    public function render(){

        $this->darkMode = Session()->get('dark_mode_system');

        return view('livewire.admin.settings.dark-mode');
    }
}
