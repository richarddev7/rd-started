<?php

namespace App\Livewire\Admin\Users;

use App\Models\MUserAdicional;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use function session;
use function view;

class Users extends Component{

    use WithPagination;

    public $titlePage = 'Users';
    public $userForDeleting;
    public $userForPassword;
    public $userSearch;
    public $password;
    public $repeatPassword;

    public function createUser(){

        // Perfiles de usuario
        $userProfiles = UserProfile::all();

        return view('livewire.admin.users.create', [
            'title' => 'Create user',
            'userProfiles' => $userProfiles
        ]);

    }


    public function editUser($id){

        // Consulto el usuario con los datos de la tabla adicional enlazada en el modelo
        $userData = User::with('adicional')->where('id', $id)->first();

        // Perfiles de usuario
        $userProfiles = UserProfile::all();

        return view('livewire.admin.users.edit', [
            'title' => 'Edit user',
            'userProfiles' => $userProfiles,
            'user'  => $userData
        ]);

    }

    public function openDeleteModal($user) {

        $this->userForPassword = '';
        $this->userForDeleting = $user;

    }

    public function openPasswordModal($user) {

        $this->password = '';
        $this->repeatPassword = '';
        $this->userForDeleting = '';
        $this->userForPassword = $user;

    }

    public function updatePasswordUser($idUser){

        //dd('AWDWAD: ' . $idUser);

        $this->validate([
            'password' => ['required', 'min:5'],
            'repeatPassword' => ['required', 'min:5', 'same:password']
        ]);

        // Cuenta Activa
        User::where('id', $idUser)->update([
            'password'  => Hash::make($this->password)
        ]);

        session()->flash('message', 'User updated successfully.');

        $this->userForPassword = [];
        $this->dispatch('userPasswordChanged', $idUser);

    }

    public function deleteUser($idUser) {

        //dd($idUser);
        User::find($idUser)->delete();
        session()->flash('message', 'User deleted successfully.');

        // Tipos de mensaje para mostrar en la alertat
        //session()->flash('type', 'success');
        //session()->flash('type', 'error');


        $this->userForDeleting = [];
        $this->dispatch('userDeleted', $idUser);



    }

    public function updateStatusUser($idUser){

        $infoUser = User::where('id', $idUser)->first();

        if($infoUser->status == 0){
            // Cuenta Activa
            User::where('email', $infoUser->email)->update([
                'status'        => 1
            ]);

        }else{
            // Cuenta Desactivada
            User::where('email', $infoUser->email)->update([
                'status'        => 0
            ]);

        }

        session()->flash('message', 'User updated successfully.');

    }

    public function mount() {
        //dd("Hola");
        // /storage/upload/users/65d169cd65bc3.png
        //dd(Storage::exists('public/upload/users/65d169cd65bc3.png'));
    }

    public function render(){

        //$user = User::all()->reverse();
        // busqueda de usuario por nombre o email
        $users = User::where('name', 'like', '%' . $this->userSearch . '%')
            ->orWhere('email', 'like', '%' . $this->userSearch . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(4);

        $userCount = count($users);

        return view('livewire.admin.users.users', [
            'users' => $users
        ])->extends('components.layouts.adminApp', [
            'title' => $this->titlePage
        ]);

    }
}
