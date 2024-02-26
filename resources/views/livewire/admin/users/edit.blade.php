@extends('components.layouts.adminApp')

@section('content')

    <div class="mb-10">

        {{-- Do your work, then step back. --}}
        <div class="p-5 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full mb-1">
                <div class="my-4">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">@lang('Edit user')</h1>
                </div>
            </div>
        </div>

        {{-- json_encode($user) --}}

        {{-- Search properties component --}}
        @livewire('Admin\Users\FormUser', [
            'actionForm' => 'updateUser',
            'editForm' => true,
            'user' => $user,
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'whatsappNumber' => $user->whatsapp,
            'country' => $user->country,
            'state' => $user->state,
            'city' => $user->city,
            'address' => $user->address,
            'birthdate' => $user->birthdate,
            'profile' => $user->level,
            'aboutMe' => $user->about_me,
            'status' => $user->status,
            'darkMode' => $user->adicional->dark_mode,
            'language' => $user->adicional->language,
            'webPage' => $user->adicional->web_page,
            'socialFacebook' => $user->adicional->social_facebook,
            'socialYoutube' => $user->adicional->social_youtube,
            'socialInstagram' => $user->adicional->social_instagram,
            'socialX' => $user->adicional->social_x,
            'userProfiles' => $userProfiles,
            'btnSubmitForm' => __('Update')
        ])

    </div>

@endsection
