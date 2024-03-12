@section('title', __('Category') . ': ' . $titlePage . ' | ' . env('APP_NAME'))
<div>
    <div class="max-w-screen-xl mx-auto">

        <div class="py-8 mb-4 col-span-full xl:mb-2 text-center">
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">@lang('Category'): {{ $titlePage }}</h1>
        </div>
        <!-- Right Content -->
        <div class="container px-5 mx-auto">
            <div class="flex flex-wrap -m-4">
                @forelse($listArticlesCategories as $article)
                    @php

                        // Link
                        $linkArticle = route('post-web', ['slug' => $article->slug_post]);

                        // Date
                        $dateCreate = \Illuminate\Support\Carbon::make($article->create_date_post);

                        // Imagen del articulo
                        if($article->img_cover_post != ""){
                            $imgPost = '/storage/' . $article['img_cover_post'];

                        }else{
                            $imgPost = "storage/assets/image-default.jpg";
                        }

                        // Content
                        $dataArticle = html_entity_decode($article->content_post);
                        $contentArticle =  \Illuminate\Support\Str::limit(strip_tags($dataArticle), 150, $end = '...');

                    @endphp
                    <div class="p-4 md:w-1/3">
                        <div class="h-full rounded shadow-cla-blue bg-gradient-to-r from-indigo-50 to-blue-50 overflow-hidden">
                            <a href="{{ $linkArticle }}">
                                <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="{{ asset($imgPost) }}" alt="blog">
                            </a>
                            <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{ $dateCreate->toFormattedDateString() }} - CATEGORY-1</h2>
                                <h1 class="title-font text-lg font-medium text-gray-600 mb-3">
                                    <a href="{{ $linkArticle }}">
                                        {{ $article['title_post'] }}
                                    </a>
                                </h1>
                                <p class="leading-relaxed mb-3">{{ $contentArticle }}</p>
                                <div class="flex items-right flex-wrap ">
                                    <a href="{{ $linkArticle }}" class="bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded" >@lang('Read more')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="p-4 md:w-1/3">@lang('This category not have articles')</div>
                @endforelse
                <div class="p-4 md:w-1/3 hidden">
                    <div class="h-full rounded-xl shadow-cla-violate bg-gradient-to-r from-pink-50 to-red-50 overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="https://images.unsplash.com/photo-1624628639856-100bf817fd35?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8M2QlMjBpbWFnZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY-1</h2>
                            <h1 class="title-font text-lg font-medium text-gray-600 mb-3">The Catalyzer</h1>
                            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                            <div class="flex items-center flex-wrap ">
                                <button class="bg-gradient-to-r from-orange-300 to-amber-400 hover:scale-105 drop-shadow-md shadow-cla-violate px-4 py-1 rounded-lg">Learn more</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 hidden">
                    <div class="h-full rounded-xl shadow-cla-pink bg-gradient-to-r from-fuchsia-50 to-pink-50 overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="https://images.unsplash.com/photo-1631700611307-37dbcb89ef7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDIwfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=600&q=60" alt="blog">
                        <div class="p-6">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY-1</h2>
                            <h1 class="title-font text-lg font-medium text-gray-600 mb-3">The Catalyzer</h1>
                            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                            <div class="flex items-center flex-wrap ">
                                <button class="bg-gradient-to-r from-fuchsia-300 to-pink-400 hover:scale-105  shadow-cla-blue px-4 py-1 rounded-lg">Learn more</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

