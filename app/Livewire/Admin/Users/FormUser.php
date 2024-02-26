<?php

namespace App\Livewire\Admin\Users;

use App\Models\MUserAdicional;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormUser extends Component{

    use WithFileUploads;

    // Config Form
    public $actionForm;
    public $btnSubmitForm;
    public $userProfiles;
    public $editForm = false;
    public $user;

    // Field Form
    public $imageProfile;
    public $name;
    public $email;
    public $phone;
    public $whatsappNumber;
    public $country;
    public $state;
    public $city;
    public $address;
    public $birthdate;
    public $profile;
    public $aboutMe;
    public $status;
    public $password;
    public $repeatPassword;

    // Field Form Adicional
    public $imageBanner;
    public $darkMode;
    public $language;
    public $webPage;
    public $socialFacebook;
    public $socialInstagram;
    public $socialYoutube;
    public $socialX;



    public function storeUser(){

        //dd($this->name);

        $this->validate([
            'imageProfile' => ['nullable', 'image', 'max:1024'],
            'name' => ['required', 'min:5', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'profile' => ['required'],
            'password' => ['required', 'min:5'],
            'repeatPassword' => ['required', 'min:5', 'same:password']
        ]);

        // Realizo la carga de la imagen del usuario
        if($this->imageProfile){

            // Defino el nombre de la imagen
            $customName = "upload/users/" . uniqid() . "." . $this->imageProfile->extension();

            // Almaceno la imagen
            $this->imageProfile->storeAs('public', $customName);

        }else{
            $customName = null;
        }

        $userData = new User();
        $userData->name = $this->name;
        $userData->email = $this->email;
        $userData->phone = $this->phone;
        $userData->whatsapp = $this->whatsappNumber;
        $userData->country = $this->country;
        $userData->state = $this->state;
        $userData->city = $this->city;
        $userData->address = $this->address;
        $userData->image = $customName;
        $userData->birthdate = $this->birthdate;
        $userData->level = $this->profile;
        $userData->about_me = $this->aboutMe;
        $userData->status = ($this->status == 1) ? 1 : 0;
        $userData->password = Hash::make($this->password);
        $userData->save();

        // Obntengo el id del usuario recien insertado
        $userId = $userData->id;

        // Realizo la carga de la imagen del usuario
        if($this->imageBanner){

            // Defino el nombre de la imagen
            $customNameBanner = "upload/users/banner_" . uniqid() . "." . $this->imageBanner->extension();

            // Almaceno la imagen
            $this->imageProfile->storeAs('public', $customNameBanner);

        }else{
            $customNameBanner = null;
        }

        // Informacion adicional
        $userAdicionalData = new MUserAdicional();
        $userAdicionalData->id_user_adicional = $userId;
        $userAdicionalData->image_banner = $customNameBanner;
        $userAdicionalData->dark_mode = ($this->darkMode == 1) ? 1 : 0;
        $userAdicionalData->language = $this->language;
        $userAdicionalData->web_page = $this->webPage;
        $userAdicionalData->social_facebook = $this->socialFacebook;
        $userAdicionalData->social_youtube = $this->socialYoutube;
        $userAdicionalData->social_instagram = $this->socialInstagram;
        $userAdicionalData->social_x = $this->socialX;
        $userAdicionalData->save();

        session()->flash('message', 'User created successfully.');
        return redirect()->route('app-users');
    }

    public function updateUser(){

        $this->validate([
            'imageProfile' => ['nullable', 'image', 'max:1024'],
            'imageBanner' => ['nullable', 'image', 'max:1024'],
            'name' => ['required', 'min:5', 'max:255']
        ]);

        // Consulto la informacion del usuario
        $userData = User::with('adicional')->where('email', $this->email)->first();

        // Realizo la carga de la imagen del usuario
        if($this->imageProfile){

            // Defino el nombre de la imagen
            $customName = "upload/users/" . uniqid() . "." . $this->imageProfile->extension();

            // Almaceno la imagen
            $this->imageProfile->storeAs('public', $customName);

            // Verifico si el usuario tiene imagen para eliminarla
            if (!is_null($userData->image)) {
                if (Storage::exists('public/' . $userData->image)) {
                    Storage::delete('public/' . $userData->image);
                }
            }


        }else{
            // dejo el valor que estaba originalmente
            $customName = $userData->image;
        }

        User::where('email', $this->email)->update([
            'name'          => $this->name,
            'phone'         => $this->phone,
            'whatsapp'      => $this->whatsappNumber,
            'country'       => $this->country,
            'state'         => $this->state,
            'city'          => $this->city,
            'address'       => $this->address,
            'image'         => $customName,
            'birthdate'     => $this->birthdate,
            'level'         => $this->profile,
            'about_me'      => $this->aboutMe,
            'status'        => ($this->status == 1) ? 1 : 0
        ]);

        // Obntengo el id del usuario recien insertado
        $userId = $userData->id;

        // Realizo la carga de la imagen del usuario
        if($this->imageBanner){

            // Defino el nombre de la imagen
            $customNameBanner = "upload/users/banner_" . uniqid() . "." . $this->imageBanner->extension();

            // Almaceno la imagen
            $this->imageProfile->storeAs('public', $customNameBanner);

        }else{
            $customNameBanner = $userData->adicional->image_banner;
        }

        // Actualizo la informacion adicional
        MUserAdicional::where('id_user_adicional', $userId)->update([
            'image_banner'          => $customNameBanner,
            'dark_mode'             => ($this->darkMode == 1) ? 1 : 0,
            'language'              => $this->language,
            'web_page'              => $this->webPage,
            'social_facebook'       => $this->socialFacebook,
            'social_youtube'        => $this->socialYoutube,
            'social_instagram'      => $this->socialInstagram,
            'social_x'              => $this->socialX
        ]);

        session()->flash('message', 'User updated successfully.');
        return redirect()->route('app-users');
    }



    public function render(){
        return view('livewire.admin.users.form-user');
    }
}
