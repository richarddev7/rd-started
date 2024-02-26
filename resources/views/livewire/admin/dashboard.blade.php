<div class="px-4 pt-6">

    <!-- 2 columns -->
    <div class="grid grid-cols-1 xl:grid-cols-2 xl:gap-4">
        <!-- Activity Card -->


        {{-- Auth::user() --}}
        {{-- Session()->get('userLogin') --}}
        {{-- session()->get('locale') --}}

        <div class="flex items-center justify-between">
            <div class="">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white hidden">@lang('Dashboard')</h1>
            </div>

            <!-- Alertas -->
            @include('livewire/admin/partials/_alerts')

            <div></div>

        </div>

        <div class="grid grid-cols-8 gap-4">
            <div class="col-span-2">
                <!-- Profile Card -->
                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-3 dark:bg-gray-800">
                    <div class="image overflow-hidden">
                        <img class="h-auto w-full mx-auto" src="{{ (!is_null(Auth::user()->image)) ? Storage::url('public/' . Auth::user()->image) : Storage::url('assets/' . NAME_IMAGE_DEFULT) }}" alt="">
                    </div>
                    <h1 class="font-bold text-xl leading-8 my-1 text-gray-900 dark:text-white">{{ Auth::user()->name }}</h1>
                    <h3 class="text-gray-600 font-lg text-semibold leading-6">{{ Auth::user()->phone }}</h3>
                    <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">{{ Auth::user()->about_me }}</p>
                    <ul class="bg-gray-100 border border-gray-200 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <li class="flex items-center py-3">
                            <span>@lang('Status')</span>
                            <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">@lang('Active')</span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Member since</span>
                            <span class="ml-auto">Nov 07, 2016</span>
                        </li>
                    </ul>
                </div>
                <!-- End of profile card -->
            </div>

            <div class="col-span-6">

                <div class="mx-auto max-w-screen-xl ">
                    <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
                        <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">@lang('Welcome'), {{ Auth::user()->name }}</h1>
                        <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Bienvenida al panel de administración de su nuevo proyecto web. Esta plataforma le permitirá gestionar de forma eficiente todos los aspectos de su sitio web, desde la creación de contenido hasta la configuración de usuarios y permisos.</p>

                        <h3 class="text-gray-900 dark:text-white text-2xl md:text-3xl font-extrabold mb-2">Tecnologías utilizadas:</h3>
                        <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Este proyecto ha sido desarrollado utilizando las últimas tecnologías web para garantizar un rendimiento óptimo, una seguridad robusta y una experiencia de usuario excepcional. Las principales tecnologías que se han utilizado son:</p>

                        <ul class="flex flex-wrap justify-between items-center gap-4">
                            <li>
                                <a href="https://laravel.com/" target="_blank">
                                    <img src="{{ Storage::url('assets/logo-laravel-10.png') }}" alt="Laravel 10" class="h-12" />
                                </a>
                            </li>
                            <li>
                                <a href="https://livewire.laravel.com/" target="_blank">
                                    <img src="{{ Storage::url('assets/logo-livewire-3.png') }}" alt="Livewire 3" class="h-12" />
                                </a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" target="_blank">
                                    <img src="{{ Storage::url('assets/logo-tailwind-css-3.png') }}" alt="Tailwind CSS" class="h-12" />
                                </a>
                            </li>
                            <li>
                                <a href="https://flowbite.com/" target="_blank">
                                    <img src="{{ Storage::url('assets/logo-flowbite.png') }}" alt="Flowbite" class="h-12" />
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>


                <!--Carousel widget -->
                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div id="carousel" class="relative" data-carousel="">
                        <div class="relative mx-auto overflow-hidden h-[36rem] lg:h-[24rem]">
                            <div
                                class="duration-700 ease-in-out bg-white dark:bg-gray-800 absolute inset-0 transition-transform transform translate-x-0 z-20"
                                data-carousel-item="">
                                <div class="flex items-center mb-4 text-lg font-medium text-primary-600">
                                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                              d="M9.664 1.319a.75.75 0 01.672 0 41.059 41.059 0 018.198 5.424.75.75 0 01-.254 1.285 31.372 31.372 0 00-7.86 3.83.75.75 0 01-.84 0 31.508 31.508 0 00-2.08-1.287V9.394c0-.244.116-.463.302-.592a35.504 35.504 0 013.305-2.033.75.75 0 00-.714-1.319 37 37 0 00-3.446 2.12A2.216 2.216 0 006 9.393v.38a31.293 31.293 0 00-4.28-1.746.75.75 0 01-.254-1.285 41.059 41.059 0 018.198-5.424zM6 11.459a29.848 29.848 0 00-2.455-1.158 41.029 41.029 0 00-.39 3.114.75.75 0 00.419.74c.528.256 1.046.53 1.554.82-.21.324-.455.63-.739.914a.75.75 0 101.06 1.06c.37-.369.69-.77.96-1.193a26.61 26.61 0 013.095 2.348.75.75 0 00.992 0 26.547 26.547 0 015.93-3.95.75.75 0 00.42-.739 41.053 41.053 0 00-.39-3.114 29.925 29.925 0 00-5.199 2.801 2.25 2.25 0 01-2.514 0c-.41-.275-.826-.541-1.25-.797a6.985 6.985 0 01-1.084 3.45 26.503 26.503 0 00-1.281-.78A5.487 5.487 0 006 12v-.54z"></path>
                                    </svg>
                                    Insights


                                </div>
                                <h3 class="mb-4 text-2xl font-medium text-gray-900 dark:text-white">You are going to
                                    grow by 44% next year</h3>
                                <p class="mb-4 text-gray-500 dark:text-gray-400">Get started with a free and
                                    open-source admin dashboard layout built with Tailwind CSS and Flowbite
                                    featuring charts, widgets, CRUD layouts, authentication pages, and more</p>
                                <p class="mb-2 text-lg font-medium text-gray-900 dark:text-white">Key Takeaways:</p>
                                <ul class="pl-4 mb-4 space-y-3 text-gray-500 list-disc dark:text-gray-400">
                                    <li>What are the new challenges in the delivery industry due to new consumer
                                        expectations.
                                    </li>
                                    <li>How the online delivery business model is diversifying to meet new
                                        demands.
                                    </li>
                                    <li>Which new technology requirements must be met to ensure true retail
                                        experiences.
                                    </li>
                                    <li>How a headless commerce architecture solves challenges in the industry.</li>
                                </ul>
                                <a href="#"
                                   class="inline-flex items-center p-2 font-medium rounded-lg text-primary-700 hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                                    Get me there
                                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                              d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z"></path>
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="duration-700 ease-in-out bg-white dark:bg-gray-800 absolute inset-0 transition-transform transform translate-x-full z-10"
                                data-carousel-item="">
                                <div class="flex items-center mb-4 text-lg font-medium text-teal-500">
                                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                              d="M4.606 12.97a.75.75 0 01-.134 1.051 2.494 2.494 0 00-.93 2.437 2.494 2.494 0 002.437-.93.75.75 0 111.186.918 3.995 3.995 0 01-4.482 1.332.75.75 0 01-.461-.461 3.994 3.994 0 011.332-4.482.75.75 0 011.052.134z"></path>
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                              d="M5.752 12A13.07 13.07 0 008 14.248v4.002c0 .414.336.75.75.75a5 5 0 004.797-6.414 12.984 12.984 0 005.45-10.848.75.75 0 00-.735-.735 12.984 12.984 0 00-10.849 5.45A5 5 0 001 11.25c.001.414.337.75.751.75h4.002zM13 9a2 2 0 100-4 2 2 0 000 4z"></path>
                                    </svg>
                                    Tips to grow
                                </div>
                                <p class="mb-4 text-gray-500 dark:text-gray-400">Marketing, sales &amp; business
                                    growth for small business. Improve your marketing &amp; promotion results - and
                                    grow your sales!</p>
                                <p class="mb-4 text-lg font-medium text-gray-900 dark:text-white">What you'll
                                    learn:</p>
                                <ul role="list"
                                    class="pl-2 mb-4 space-y-3 text-gray-500 list-disc dark:text-gray-400">
                                    <li class="flex space-x-2">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 dark:text-gray-400"
                                             fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                  d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"></path>
                                        </svg>
                                        <span class="leading-tight">Dynamic reports and dashboards</span>
                                    </li>
                                    <li class="flex space-x-2">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 dark:text-gray-400"
                                             fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                  d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"></path>
                                        </svg>
                                        <span class="leading-tight">Learn from competitors about what to do, and not to do</span>
                                    </li>
                                    <li class="flex space-x-2">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 dark:text-gray-400"
                                             fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                  d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"></path>
                                        </svg>
                                        <span class="leading-tight">Take their business to the next level</span>
                                    </li>
                                    <li class="flex space-x-2">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 dark:text-gray-400"
                                             fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                  d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"></path>
                                        </svg>
                                        <span class="leading-tight">Limitless business automation</span>
                                    </li>
                                    <li class="flex space-x-2">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 dark:text-gray-400"
                                             fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                  d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"></path>
                                        </svg>
                                        <span class="leading-tight">Build relationships with other businesses to co-promote</span>
                                    </li>
                                    <li class="flex space-x-2">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 dark:text-gray-400"
                                             fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                  d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"></path>
                                        </svg>
                                        <span
                                            class="leading-tight">Make their customers feel loved and apprecaited</span>
                                    </li>
                                </ul>
                                <a href="#"
                                   class="inline-flex items-center p-2 font-medium rounded-lg text-primary-700 hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                                    Let's start
                                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                              d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z"></path>
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="duration-700 ease-in-out bg-white dark:bg-gray-800 absolute inset-0 transition-transform transform -translate-x-full z-10"
                                data-carousel-item="">
                                <div class="flex items-center mb-4 text-lg font-medium text-purple-600">
                                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                              d="M13.5 4.938a7 7 0 11-9.006 1.737c.202-.257.59-.218.793.039.278.352.594.672.943.954.332.269.786-.049.773-.476a5.977 5.977 0 01.572-2.759 6.026 6.026 0 012.486-2.665c.247-.14.55-.016.677.238A6.967 6.967 0 0013.5 4.938zM14 12a4 4 0 01-4 4c-1.913 0-3.52-1.398-3.91-3.182-.093-.429.44-.643.814-.413a4.043 4.043 0 001.601.564c.303.038.531-.24.51-.544a5.975 5.975 0 011.315-4.192.447.447 0 01.431-.16A4.001 4.001 0 0114 12z"></path>
                                    </svg>
                                    Features
                                </div>
                                <h3 class="mb-4 text-2xl font-medium text-gray-900 dark:text-white">Go next level
                                    with Flowbite</h3>
                                <p class="text-gray-500 dark:text-gray-400">Deliver great service experiences fast -
                                    without the complexity of traditional ITSM solutions.Accelerate critical
                                    development work, eliminate toil, and deploy changes with ease.</p>
                                <!-- List -->
                                <ul role="list"
                                    class="pl-2 my-5 mb-4 space-y-3 text-gray-500 list-disc dark:text-gray-400">
                                    <li class="flex space-x-3">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-purple-600 dark:text-purple-500"
                                             fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="leading-tight">Dynamic reports and dashboards</span>
                                    </li>
                                    <li class="flex space-x-3">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-purple-600 dark:text-purple-500"
                                             fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="leading-tight">Templates for everyone</span>
                                    </li>
                                    <li class="flex space-x-3">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-purple-600 dark:text-purple-500"
                                             fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="leading-tight">Development workflow</span>
                                    </li>
                                    <li class="flex space-x-3">
                                        <!-- Icon -->
                                        <svg class="flex-shrink-0 w-5 h-5 text-purple-600 dark:text-purple-500"
                                             fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="leading-tight">Limitless business automation</span>
                                    </li>
                                </ul>
                                <button type="button"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                    View more
                                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                              d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="flex items-center justify-center">
                            <button type="button"
                                    class="flex items-center justify-center h-full mr-4 cursor-pointer group focus:outline-none"
                                    data-carousel-prev="">
                  <span class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200">
                      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path
                              fill-rule="evenodd"
                              d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                              clip-rule="evenodd"></path></svg>
                      <span class="hidden">Previous</span>
                  </span>
                            </button>
                            <button type="button"
                                    class="flex items-center justify-center h-full cursor-pointer group focus:outline-none"
                                    data-carousel-next="">
                  <span class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200">
                      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path
                              fill-rule="evenodd"
                              d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path></svg>
                      <span class="hidden">Next</span>
                  </span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </div>



    </div>

</div>
