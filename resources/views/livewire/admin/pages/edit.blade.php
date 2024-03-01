@extends('components.layouts.adminApp')

@section('content')

    <div class="mb-10">

        {{-- Do your work, then step back. --}}
        <div class="p-5 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full">
                <div class="py-4">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">@lang('Edit page')</h1>
                </div>
            </div>
        </div>

        {{-- dd($page) --}}

        {{-- Search properties component --}}
        @livewire('Admin\Pages\FormPages', [
            'actionForm' => 'updatePage',
            'editForm' => true,
            'btnSubmitForm' => __('Update'),
            'idPage' => $page->id_post,
            'title' => $page->title_post,
            'slug' => $page->slug_post,
            'formFieldContent' => $page->content_post,
            'status' => $page->status_post,
        ])

    </div>


@endsection
