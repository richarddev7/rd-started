@extends('components.layouts.adminApp')

@section('content')

    <div class="mb-10">

        {{-- Do your work, then step back. --}}
        <div class="p-5 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full">
                <div class="py-4">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">@lang('Create user')</h1>
                </div>
            </div>
        </div>

        {{-- Search properties component --}}
        @livewire('Admin\Users\FormUser', ['actionForm' => 'storeUser', 'btnSubmitForm' => __('Create'), 'userProfiles' => $userProfiles])

    </div>

@endsection
