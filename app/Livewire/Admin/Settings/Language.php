<?php

namespace App\Livewire\Admin\Settings;

use App\Models\MUserAdicional;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Language extends Component{

    public $lang;

    public function changeLanguage($idUser, $lang, $currentRouteName = 'app-dashboard'){

        //dd($idUser . ' - ' . $lang);

        MUserAdicional::where('id_user_adicional', $idUser)->update([
            'language'        => $lang
        ]);

        $this->lang = $lang;

        App::setLocale($lang);
        //app()->setLocale($lang);
        session()->put('locale', $lang);

        return redirect()->route($currentRouteName);

    }

    public function render()
    {
        return view('livewire.admin.settings.language');
    }
}
