<div>
    <div class="">

        <div class="max-w-screen-xl mx-auto">

            <!-- Right Content -->
            <div class="grid grid-cols-2 gap-4 md:grid-cols-2 lg:grid-cols-12 lg:gap-4 py-4">
                <div class="col-span-9 mb-1 bg-white border border-gray-200 rounded-lg shadow-sm  dark:border-gray-700 dark:bg-gray-800">
                    @if(!is_null($post['img_cover_post']))
                        <img class="w-full rounded-md" src="{{ asset('/storage/' . $post['img_cover_post']) }}">
                    @endif

                    <h1 class="text-xl py-4 text-center font-semibold text-gray-900 sm:text-2xl dark:text-white">{{ $post['title_post'] }}</h1>
                    <div class="px-4 mb-4 text-sm">
                        {{ $post['create_date_post'] }}
                        -
                        @foreach($categories as $categoryPost)
                            @if(in_array($categoryPost->id_post_category, json_decode($post['category_post'])))
                                <a href="{{ route('categories-web', ['slug' => $categoryPost->slug_category]) }}" class="text-blue-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    📌 {{ $categoryPost->name_category }}
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="px-4">
                        {!! $post['content_post'] !!}
                    </div>

                </div>
                <div class="p-2 mb-4 space-y-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-3 dark:border-gray-700 sm:p-4 dark:bg-gray-800">
                    <div class=" text-gray-400">
                        <h3>@lang('Categories')</h3>
                    </div>
                    <div class="text-gray-400 dark:border-gray-600">
                        <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                        @forelse($categories as $categorie)
                            <li class="flex items-center">
                                <a href="{{ route('categories-web', ['slug' => $categorie->slug_category]) }}" class="text-blue-600 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <svg class="inline w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    {{ $categorie->name_category }}
                                </a>
                            </li>
                        @empty
                            <li>
                                @lang('No categories')
                            </li>
                        @endforelse
                        </ul>
                    </div>
                    <div class="px-4 py-2 text-gray-400 border border-gray-200 border-dashed rounded dark:border-gray-600 hidden">
                        <h3>Card footer</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
