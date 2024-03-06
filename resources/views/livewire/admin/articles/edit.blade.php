@extends('components.layouts.adminApp')

@section('content')

    <div class="mb-10">

        {{-- Do your work, then step back. --}}
        <div class="p-5 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full">
                <div class="py-4">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">@lang('Edit article')</h1>
                </div>
            </div>
        </div>

        {{-- dd($page) --}}

        {{-- Search properties component --}}
        @livewire('Admin\Articles\FormArticles', [
            'actionForm' => 'updateArticle',
            'editForm' => true,
            'btnSubmitForm' => __('Update'),
            'idArticle' => $article->id_post,
            'title' => $article->title_post,
            'slug' => $article->slug_post,
            'formFieldContent' => $article->content_post,
            'seoTitle' => $article->title_seo_post,
            'seoDescription' => $article->description_seo_post,
            'seoKeyworks' => $article->keywords_seo_post,
            'categoriesArticle' => json_decode($article->category_post),
            'status' => $article->status_post,
        ])

    </div>


@endsection
