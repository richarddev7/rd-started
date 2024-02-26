<?php

namespace App\Livewire\Admin\Settings;

use App\Models\MProfileUsers;
use Livewire\Component;

class ProfileUsers extends Component
{
    public $titlePage = 'Profile users';
    public $titleModal;
    public $actionFormModal;
    public $profileSearch;
    public $openModalCreateClass;

    // Form fields
    public $fieldProfileID;
    public $fieldProfileLevel;
    public $fieldProfileName;
    public $fieldProfileDescription;

    public function openModalCreate(){

        $this->fieldProfileID = null;
        $this->fieldProfileLevel = null;
        $this->fieldProfileName = null;
        $this->fieldProfileDescription = null;

        $this->titleModal = 'Create profile';
        $this->actionFormModal = 'storeProfileUser';
        $this->openModalCreateClass = true;

    }

    public function storeProfileUser(){

        $this->openModalCreateClass = true;

        $this->validate([
            'fieldProfileLevel' => ['required', 'unique:app_user_profile,level'],
            'fieldProfileName' => ['required']
        ]);

        $profileData = new MProfileUsers();
        $profileData->level = $this->fieldProfileLevel;
        $profileData->name_profile = $this->fieldProfileName;
        $profileData->description_profile = $this->fieldProfileDescription;
        $profileData->save();

        $this->openModalCreateClass = false;
        $this->dispatch('closeModal');
        session()->flash('message', 'Profile created successfully.');
    }

    public function editProfileUser($profile){

        $this->fieldProfileID = $profile['id'];
        $this->fieldProfileLevel = $profile['level'];
        $this->fieldProfileName = $profile['name_profile'];
        $this->fieldProfileDescription = $profile['description_profile'];

        $this->titleModal = 'Edit profile';
        $this->actionFormModal = 'updateProfileUser';
        $this->openModalCreateClass = true;

    }

    public function updateProfileUser(){

        //dd('AWDWAD: ' . $idUser);

        $this->validate([
            'fieldProfileLevel' => ['required'],
            'fieldProfileName' => ['required']
        ]);

        // Cuenta Activa
        MProfileUsers::where('id', $this->fieldProfileID)->update([
            'name_profile'  => $this->fieldProfileName,
            'description_profile'  => $this->fieldProfileDescription
        ]);

        $this->openModalCreateClass = false;
        $this->dispatch('closeModal');
        session()->flash('message', 'Profile updated successfully.');

    }

    public function alertDeleteProfile($profile){
        $this->dispatch('showAlertDeleteProfile', $profile);
    }

    public function deleteProfile($idProfile) {

        MProfileUsers::where('id', $idProfile)->delete();
        session()->flash('message', 'Profile deleted successfully.');

    }

    public function mount(){

    }

    public function render(){

        // busqueda de usuario por nombre o email
        $profiles = MProfileUsers::where('name_profile', 'like', '%' . $this->profileSearch . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(2);

        return view('livewire.admin.settings.profile-users', [
            'profiles' => $profiles
        ])->extends('components.layouts.adminApp', [
            'title' => $this->titlePage
        ]);
    }
}
