<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginApp extends Component{

    public $email;
    public $password;


    public function mount() {

        // Verifico si el usuario esta logueado
        if(Auth::check()){
            return redirect()->route('app-dashboard');
        }

    }

    /**
     * Autentcacion del Usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function userAuthenticate(){

        $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);


        $userDataLogin = User::with('adicional')->where('email', $this->email)->first();

        // Verifico si el usuario existe
        if(is_null($userDataLogin)){

            return session()->flash('errors', __('ERROR.. Please verify your data access.'));

        }

        // Verifico si el usuario esta activo
        if($userDataLogin->status == 1){

            if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){

                session()->regenerate();

                Session::put('dark_mode_system', (isset($userDataLogin->adicional->dark_mode) ? $userDataLogin->adicional->dark_mode : 0)); // Definicion del modo oscuro
                session()->put('locale', (isset($userDataLogin->adicional->language) ? $userDataLogin->adicional->language : 'en')); // Lenguaje

                // Agrego la informaciond del usuario a la session
                // https://www.codegrepper.com/code-examples/php/session+variable+in+laravel
                session()->put('userLogin', $userDataLogin);

                // Message login sucess
                //session()->flash('message', __('You have successfully logged in!'));

                return redirect()->route('app-dashboard');

            }else{
                return session()->flash('errors', __('ERROR.. Please verify your data access.'));
            }

        }else{

            return session()->flash('errors', __('ERROR.. This account is not active.'));

        }


    }

    public function render(){

        return view('livewire.login-app');

    }
}
