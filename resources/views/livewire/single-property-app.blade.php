<div class="max-w-screen-xl mx-auto">

    {{-- Search properties component --}}
    <livewire:WebSearchPropertiesApp/>

    <div class="grid md:grid-cols-6 sm:grid-cols-1 gap-4 py-4 px-4">

        {{-- Content --}}
        <div class="lg:col-span-4 sm:lg:col-span-8">

            {{-- Info fast property --}}
            <div class="grid md:grid-cols-5 sm:grid-cols-1 mb-4">

                <div class="lg:col-span-4 sm:grid-cols-1">
                    <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">1012 N Ocean Blvd 1009, Pompano
                        Beach, Fl 33062</h1>
                    <span class="font-normal text-gray-700 dark:text-gray-400">Single Family Home</span>
                </div>
                <div class="text-center">
                    <span class="block mb-2">
                        <span
                            class=" inline bg-blue-100 text-blue-800 text-lg font-medium m-3 px-2.5 py-0.5 rounded-full">Active</span>
                    </span>
                    <span>
                        <span class="bg-teal-600 text-white text-lg font-medium m-3 px-2.5 py-0.5 rounded-full">$2.500.000</span>
                    </span>
                </div>

            </div>

            {{-- Slider Images --}}
            <div id="default-carousel" class="relative w-full mb-4" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img
                            src="https://images.unsplash.com/photo-1580477371194-4593e3c7c6cf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img
                            src="https://images.unsplash.com/photo-1580477371194-4593e3c7c6cf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img
                            src="https://images.unsplash.com/photo-1580477371194-4593e3c7c6cf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img
                            src="https://images.unsplash.com/photo-1580477371194-4593e3c7c6cf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img
                            src="https://images.unsplash.com/photo-1580477371194-4593e3c7c6cf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                            data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                            data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

            {{-- Discription Property --}}
            <div class="h-50 w-full rounded-lg border mb-4">
                <!-- Header -->
                <div class="flex items-center justify-between border-b">
                    <div class="p-3 text-gray-700 text-lg font-bold">Descripción</div>
                </div>
                <div class="p-3 text-sm text-gray-600">
                    <ul class="grid md:grid-cols-4 sm:grid-cols-1 mb-4 gap-2">
                        <li class="grid grid-cols-3">
                            <div class="bg-gray-300 rounded-full w-12 h-12 text-center p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                     class="">
                                    <path fill="currentColor"
                                          d="M10 2v2.26l2 1.33V4h10v15h-5v2h7V2H10M7.5 5L0 10v11h15V10L7.5 5M14 6v.93L15.61 8H16V6h-2m4 0v2h2V6h-2M7.5 7.5L13 11v8h-3v-6H5v6H2v-8l5.5-3.5M18 10v2h2v-2h-2m0 4v2h2v-2h-2Z"/>
                                </svg>
                            </div>
                            <div class="col-span-2">
                                <span class="font-bold">Tipo de Propiedad</span>
                                <span>Single Home Family</span>
                            </div>
                        </li>
                        <li class="grid grid-cols-3">
                            <div class="bg-gray-300 rounded-full w-12 h-12 text-center p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                          d="m29 30l1 90h36V66h26V30H29zm99 0v36h72V30h-72zm108 0v36h72V30h-72zm108 0v36h72V30h-72zm102 0v78h36V30h-36zm-206 80v36h100.543l-118 118H30v218h218V289.457l118-118V272h36V110H240zm206 34v72h36v-72h-36zM30 156v72h36v-72H30zm416 96v72h36v-72h-36zm0 108v72h36v-72h-36zm-166 86v36h72v-36h-72zm108 0v36h72v-36h-72z"/>
                                </svg>
                            </div>
                            <div class="col-span-2">
                                <span class="font-bold block">Area</span>
                                <span>1010 sq ft</span>
                            </div>
                        </li>
                        <li class="grid grid-cols-3">
                            <div class="bg-gray-300 rounded-full w-12 h-12 text-center p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 2048 1280">
                                    <path fill="currentColor"
                                          d="M256 768h1728q26 0 45 19t19 45v448h-256v-256H256v256H0V64q0-26 19-45T64 0h128q26 0 45 19t19 45v704zm576-320q0-106-75-181t-181-75t-181 75t-75 181t75 181t181 75t181-75t75-181zm1216 256v-64q0-159-112.5-271.5T1664 256H960q-26 0-45 19t-19 45v384h1152z"/>
                                </svg>
                            </div>
                            <div class="col-span-2">
                                <span class="font-bold block">Habitaciones</span>
                                <span>2 Dormitorios</span>
                            </div>
                        </li>
                        <li class="grid grid-cols-3">
                            <div class="bg-gray-300 rounded-full w-12 h-12 text-center p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 1792 1792">
                                    <path fill="currentColor"
                                          d="M1664 1088v192q0 169-128 286v194q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-118q-63 22-128 22H512q-65 0-128-22v110q0 17-9.5 28.5T352 1792h-64q-13 0-22.5-11.5T256 1752v-186q-128-117-128-286v-192h1536zM704 672q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm64-64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm-64-64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm128 0q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm-64-64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm-64-64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm1088 512v64q0 14-9 23t-23 9H32q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h96V256q0-106 75-181T384 0q108 0 184 78q46-19 98-12t93 39l22-22q11-11 22 0l42 42q11 11 0 22L531 461q-11 11-22 0l-42-42q-11-11 0-22l22-22q-36-46-40.5-104T472 163q-37-35-88-35q-53 0-90.5 37.5T256 256v640h1504q14 0 23 9t9 23zM896 480q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm-64-64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm-64-64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm192 64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm-64-64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm-64-64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm192 64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm-64-64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm128 0q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23z"/>
                                </svg>
                            </div>
                            <div class="col-span-2">
                                <span class="font-bold block">Baños</span>
                                <span>2 Baños</span>
                            </div>
                        </li>
                        <li class="grid grid-cols-3">
                            <div class="bg-gray-300 rounded-full w-12 h-12 text-center p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 1792 1792">
                                    <path fill="currentColor"
                                          d="M1664 1088v192q0 169-128 286v194q0 14-9 23t-23 9h-64q-14 0-23-9t-9-23v-118q-63 22-128 22H512q-65 0-128-22v110q0 17-9.5 28.5T352 1792h-64q-13 0-22.5-11.5T256 1752v-186q-128-117-128-286v-192h1536zM704 672q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm64-64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm-64-64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm128 0q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm-64-64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm-64-64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm1088 512v64q0 14-9 23t-23 9H32q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h96V256q0-106 75-181T384 0q108 0 184 78q46-19 98-12t93 39l22-22q11-11 22 0l42 42q11 11 0 22L531 461q-11 11-22 0l-42-42q-11-11 0-22l22-22q-36-46-40.5-104T472 163q-37-35-88-35q-53 0-90.5 37.5T256 256v640h1504q14 0 23 9t9 23zM896 480q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm-64-64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm-64-64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm192 64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm-64-64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm-64-64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm192 64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm-64-64q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23zm128 0q0 14-9 23t-23 9t-23-9t-9-23t9-23t23-9t23 9t9 23z"/>
                                </svg>
                            </div>
                            <div class="col-span-2">
                                <span class="font-bold block">Baños</span>
                                <span>2 Baños</span>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

            {{-- Amenities Property --}}
            <div class="h-50 w-full rounded-lg border mb-4">
                <!-- Header -->
                <div class="flex items-center justify-between border-b">
                    <div class="p-3 text-gray-700 text-lg font-bold">Comodidades</div>
                </div>
                <div class="p-3 text-sm text-gray-600">
                    @php

                        $dataAmenities = [
                            'Dryer',
                            'Microwave',
                            'Other Equipment/Appliances',
                            'Electric Range',
                            'Refrigerator',
                            'Washer',
                            'Dishwasher',
                        ];

                        $dataInteriorFeatures = [
                            'First Floor Entry',
                            'Split Bedroom',
                            'Garage Converted'
                        ];

                    @endphp
                    <ul class="grid md:grid-cols-3 sm:grid-cols-1 mb-4 gap-2">
                        @foreach($dataAmenities as $data)
                            <li class="flex">
                                <div class="bg-gray-300 rounded-full w-5 h-5 text-center p-0.3 inline-block mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                              d="M9 16.17L5.53 12.7a.996.996 0 1 0-1.41 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71a.996.996 0 1 0-1.41-1.41L9 16.17z"/>
                                    </svg>
                                </div>
                                <span>{{ $data }}</span>
                            </li>
                        @endforeach
                    </ul>


                    <div class="flex items-center justify-between border-b mb-4">
                        <h3 class=" text-gray-700 text-lg font-bold">Caracteristicas Interiores</h3>
                    </div>
                    <ul class="grid md:grid-cols-3 sm:grid-cols-1 mb-4 gap-2">
                        @foreach($dataInteriorFeatures as $data)
                            <li class="flex">
                                <div class="bg-gray-300 rounded-full w-5 h-5 text-center p-0.3 inline-block mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                              d="M9 16.17L5.53 12.7a.996.996 0 1 0-1.41 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71a.996.996 0 1 0-1.41-1.41L9 16.17z"/>
                                    </svg>
                                </div>
                                <span>{{ $data }}</span>
                            </li>
                        @endforeach
                    </ul>

                </div>

            </div>

            {{-- Map Location Property --}}
            <div class="h-50 w-full rounded-lg border">
                <!-- Header -->
                <div class="flex items-center justify-between border-b">
                    <div class="p-3 text-gray-700 text-lg font-bold">Ubicacion</div>
                </div>
                <div class="p-3 text-sm text-gray-600">
                    <iframe class="w-full"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254508.51141489705!2d-74.107807!3d4.64829755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses-419!2sco!4v1700972322614!5m2!1ses-419!2sco"
                            height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>

        </div>

        {{-- Aside --}}
        <div class="lg:col-span-2 sm:lg:col-span-8">

            <div class="block w-full p-6 bg-white border border-gray-200 rounded-lg shadow mb-4">
                <form class="space-y-4 md:space-y-6" action="#">
                    <div>
                        <input type="text" name="name" id="name"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                               placeholder="Nombre Completo" required>
                    </div>
                    <div>
                        <input type="email" name="email" id="email"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                               placeholder="name@company.com" required>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <select name="password" id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required>
                            <option value="93">(+93) AFG</option>
                            <option value="355">(+355) ALB</option>
                            <option value="213">(+213) DZA</option>
                            <option value="1684">(+1684) ASM</option>
                            <option value="376">(+376) AND</option>
                            <option value="244">(+244) AGO</option>
                            <option value="1264">(+1264) AIA</option>
                            <option value="1268">(+1268) ATG</option>
                            <option value="54">(+54) ARG</option>
                            <option value="374">(+374) ARM</option>
                            <option value="297">(+297) ABW</option>
                            <option value="61">(+61) AUS</option>
                            <option value="43">(+43) AUT</option>
                            <option value="994">(+994) AZE</option>
                            <option value="1242">(+1242) BHS</option>
                            <option value="973">(+973) BHR</option>
                            <option value="880">(+880) BGD</option>
                            <option value="1246">(+1246) BRB</option>
                            <option value="375">(+375) BLR</option>
                            <option value="32">(+32) BEL</option>
                            <option value="501">(+501) BLZ</option>
                            <option value="229">(+229) BEN</option>
                            <option value="1441">(+1441) BMU</option>
                            <option value="975">(+975) BTN</option>
                            <option value="591">(+591) BOL</option>
                            <option value="387">(+387) BIH</option>
                            <option value="267">(+267) BWA</option>
                            <option value="55">(+55) BRA</option>
                            <option value="673">(+673) BRN</option>
                            <option value="359">(+359) BGR</option>
                            <option value="226">(+226) BFA</option>
                            <option value="257">(+257) BDI</option>
                            <option value="855">(+855) KHM</option>
                            <option value="237">(+237) CMR</option>
                            <option value="1">(+1) CAN</option>
                            <option value="238">(+238) CPV</option>
                            <option value="1345">(+1345) CYM</option>
                            <option value="236">(+236) CAF</option>
                            <option value="235">(+235) TCD</option>
                            <option value="56">(+56) CHL</option>
                            <option value="86">(+86) CHN</option>
                            <option value="57">(+57) COL</option>
                            <option value="269">(+269) COM</option>
                            <option value="242">(+242) COG</option>
                            <option value="242">(+242) COD</option>
                            <option value="682">(+682) COK</option>
                            <option value="506">(+506) CRI</option>
                            <option value="225">(+225) CIV</option>
                            <option value="385">(+385) HRV</option>
                            <option value="53">(+53) CUB</option>
                            <option value="357">(+357) CYP</option>
                            <option value="420">(+420) CZE</option>
                            <option value="45">(+45) DNK</option>
                            <option value="253">(+253) DJI</option>
                            <option value="1767">(+1767) DMA</option>
                            <option value="1809">(+1809) DOM</option>
                            <option value="593">(+593) ECU</option>
                            <option value="20">(+20) EGY</option>
                            <option value="503">(+503) SLV</option>
                            <option value="240">(+240) GNQ</option>
                            <option value="291">(+291) ERI</option>
                            <option value="372">(+372) EST</option>
                            <option value="251">(+251) ETH</option>
                            <option value="500">(+500) FLK</option>
                            <option value="298">(+298) FRO</option>
                            <option value="679">(+679) FJI</option>
                            <option value="358">(+358) FIN</option>
                            <option value="33">(+33) FRA</option>
                            <option value="594">(+594) GUF</option>
                            <option value="689">(+689) PYF</option>
                            <option value="241">(+241) GAB</option>
                            <option value="220">(+220) GMB</option>
                            <option value="995">(+995) GEO</option>
                            <option value="49">(+49) DEU</option>
                            <option value="233">(+233) GHA</option>
                            <option value="350">(+350) GIB</option>
                            <option value="30">(+30) GRC</option>
                            <option value="299">(+299) GRL</option>
                            <option value="1473">(+1473) GRD</option>
                            <option value="590">(+590) GLP</option>
                            <option value="1671">(+1671) GUM</option>
                            <option value="502">(+502) GTM</option>
                            <option value="224">(+224) GIN</option>
                            <option value="245">(+245) GNB</option>
                            <option value="592">(+592) GUY</option>
                            <option value="509">(+509) HTI</option>
                            <option value="39">(+39) VAT</option>
                            <option value="504">(+504) HND</option>
                            <option value="852">(+852) HKG</option>
                            <option value="36">(+36) HUN</option>
                            <option value="354">(+354) ISL</option>
                            <option value="91">(+91) IND</option>
                            <option value="62">(+62) IDN</option>
                            <option value="98">(+98) IRN</option>
                            <option value="964">(+964) IRQ</option>
                            <option value="353">(+353) IRL</option>
                            <option value="972">(+972) ISR</option>
                            <option value="39">(+39) ITA</option>
                            <option value="1876">(+1876) JAM</option>
                            <option value="81">(+81) JPN</option>
                            <option value="962">(+962) JOR</option>
                            <option value="7">(+7) KAZ</option>
                            <option value="254">(+254) KEN</option>
                            <option value="686">(+686) KIR</option>
                            <option value="850">(+850) PRK</option>
                            <option value="82">(+82) KOR</option>
                            <option value="965">(+965) KWT</option>
                            <option value="996">(+996) KGZ</option>
                            <option value="856">(+856) LAO</option>
                            <option value="371">(+371) LVA</option>
                            <option value="961">(+961) LBN</option>
                            <option value="266">(+266) LSO</option>
                            <option value="231">(+231) LBR</option>
                            <option value="218">(+218) LBY</option>
                            <option value="423">(+423) LIE</option>
                            <option value="370">(+370) LTU</option>
                            <option value="352">(+352) LUX</option>
                            <option value="853">(+853) MAC</option>
                            <option value="389">(+389) MKD</option>
                            <option value="261">(+261) MDG</option>
                            <option value="265">(+265) MWI</option>
                            <option value="60">(+60) MYS</option>
                            <option value="960">(+960) MDV</option>
                            <option value="223">(+223) MLI</option>
                            <option value="356">(+356) MLT</option>
                            <option value="692">(+692) MHL</option>
                            <option value="596">(+596) MTQ</option>
                            <option value="222">(+222) MRT</option>
                            <option value="230">(+230) MUS</option>
                            <option value="52">(+52) MEX</option>
                            <option value="691">(+691) FSM</option>
                            <option value="373">(+373) MDA</option>
                            <option value="377">(+377) MCO</option>
                            <option value="976">(+976) MNG</option>
                            <option value="1664">(+1664) MSR</option>
                            <option value="212">(+212) MAR</option>
                            <option value="258">(+258) MOZ</option>
                            <option value="95">(+95) MMR</option>
                            <option value="264">(+264) NAM</option>
                            <option value="674">(+674) NRU</option>
                            <option value="977">(+977) NPL</option>
                            <option value="31">(+31) NLD</option>
                            <option value="599">(+599) ANT</option>
                            <option value="687">(+687) NCL</option>
                            <option value="64">(+64) NZL</option>
                            <option value="505">(+505) NIC</option>
                            <option value="227">(+227) NER</option>
                            <option value="234">(+234) NGA</option>
                            <option value="683">(+683) NIU</option>
                            <option value="672">(+672) NFK</option>
                            <option value="1670">(+1670) MNP</option>
                            <option value="47">(+47) NOR</option>
                            <option value="968">(+968) OMN</option>
                            <option value="92">(+92) PAK</option>
                            <option value="680">(+680) PLW</option>
                            <option value="507">(+507) PAN</option>
                            <option value="675">(+675) PNG</option>
                            <option value="595">(+595) PRY</option>
                            <option value="51">(+51) PER</option>
                            <option value="63">(+63) PHL</option>
                            <option value="0">(+0) PCN</option>
                            <option value="48">(+48) POL</option>
                            <option value="351">(+351) PRT</option>
                            <option value="1787">(+1787) PRI</option>
                            <option value="974">(+974) QAT</option>
                            <option value="262">(+262) REU</option>
                            <option value="40">(+40) ROM</option>
                            <option value="70">(+70) RUS</option>
                            <option value="250">(+250) RWA</option>
                            <option value="290">(+290) SHN</option>
                            <option value="1869">(+1869) KNA</option>
                            <option value="1758">(+1758) LCA</option>
                            <option value="508">(+508) SPM</option>
                            <option value="1784">(+1784) VCT</option>
                            <option value="684">(+684) WSM</option>
                            <option value="378">(+378) SMR</option>
                            <option value="239">(+239) STP</option>
                            <option value="966">(+966) SAU</option>
                            <option value="221">(+221) SEN</option>
                            <option value="248">(+248) SYC</option>
                            <option value="232">(+232) SLE</option>
                            <option value="65">(+65) SGP</option>
                            <option value="421">(+421) SVK</option>
                            <option value="386">(+386) SVN</option>
                            <option value="677">(+677) SLB</option>
                            <option value="252">(+252) SOM</option>
                            <option value="27">(+27) ZAF</option>
                            <option value="34">(+34) ESP</option>
                            <option value="94">(+94) LKA</option>
                            <option value="249">(+249) SDN</option>
                            <option value="597">(+597) SUR</option>
                            <option value="47">(+47) SJM</option>
                            <option value="268">(+268) SWZ</option>
                            <option value="46">(+46) SWE</option>
                            <option value="41">(+41) CHE</option>
                            <option value="963">(+963) SYR</option>
                            <option value="886">(+886) TWN</option>
                            <option value="992">(+992) TJK</option>
                            <option value="255">(+255) TZA</option>
                            <option value="66">(+66) THA</option>
                            <option value="228">(+228) TGO</option>
                            <option value="690">(+690) TKL</option>
                            <option value="676">(+676) TON</option>
                            <option value="1868">(+1868) TTO</option>
                            <option value="216">(+216) TUN</option>
                            <option value="90">(+90) TUR</option>
                            <option value="7370">(+7370) TKM</option>
                            <option value="1649">(+1649) TCA</option>
                            <option value="688">(+688) TUV</option>
                            <option value="256">(+256) UGA</option>
                            <option value="380">(+380) UKR</option>
                            <option value="971">(+971) ARE</option>
                            <option value="44">(+44) GBR</option>
                            <option value="1" selected="">(+1) USA</option>
                            <option value="598">(+598) URY</option>
                            <option value="998">(+998) UZB</option>
                            <option value="678">(+678) VUT</option>
                            <option value="58">(+58) VEN</option>
                            <option value="84">(+84) VNM</option>
                            <option value="1284">(+1284) VGB</option>
                            <option value="1340">(+1340) VIR</option>
                            <option value="681">(+681) WLF</option>
                            <option value="212">(+212) ESH</option>
                            <option value="967">(+967) YEM</option>
                            <option value="260">(+260) ZMB</option>
                            <option value="263">(+263) ZWE</option>
                        </select>
                        <input type="number" name="phone" id="phone" placeholder="Telefono" class="col-span-2 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required>
                    </div>
                    <div>
                        <textarea name="repeat-password" id="repeat-password" placeholder="Mensaje" rows="5" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required></textarea>
                    </div>
                    <button type="submit" class="w-full active:scale-95 rounded-lg bg-blue-600 px-8 py-2 font-medium text-white outline-none focus:ring hover:opacity-90">
                        Solicitar Información
                    </button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Al enviar este formulario usted acepta los terminos y condiciones de <a href="#" class="font-medium text-primary-600 hover:underline">Esta pagina</a>
                    </p>
                </form>
            </div>
            <a href="#"
               class="block w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
                    acquisitions 2021</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>

        </div>


    </div>

    @php

        $dataProperty = range(0, 3);

        $titleProperty = "1012 N Ocean Blvd 1009, Pompano Beach, Fl 33062";

        $slugUrlProperty = \Illuminate\Support\Str::slug($titleProperty . '-rd12345');

    @endphp

    {{-- Slider Around Properties --}}
    <div class="w-full px-4 mb-4 grid md:grid-cols-4 sm:grid-cols-1 gap-4">

        @foreach($dataProperty as $data)
            <div class="w-full rounded shadow duration-150 hover:scale-95 hover:shadow-md">
                <a href="{{ route('single-property', ['slug' => $slugUrlProperty]) }}" class="relative">
                    <span
                        class="absolute inline float-right bg-blue-100 text-blue-800 text-xs font-medium m-3 px-2.5 py-0.5 rounded-full">Active</span>
                    <img class="w-full object-cover rounded object-center"
                         src="https://images.unsplash.com/photo-1580477371194-4593e3c7c6cf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         alt="{{ $titleProperty }}" title="{{ $titleProperty }}"/>
                    <span
                        class="absolute bottom-0 right-0 bg-teal-600 text-white text-xs font-medium m-3 px-2.5 py-0.5 rounded-full">$2.500.000</span>
                </a>
                <div class="py-2">
                    <div class="my-2 flex items-center justify-between px-4">
                        <a href="{{ route('single-property', ['slug' => $slugUrlProperty]) }}"
                           class="font-bold text-gray-500" alt="{{ $titleProperty }}">{{ $titleProperty }}</a>
                    </div>
                    <div class="my-4 flex items-center justify-between px-4">
                        <ul class="w-full grid grid-cols-2 gap-2 place-content-between">
                            <li class="flex flex-row text-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                          d="M3 18v-5q0-.444.256-.946T4 11.3V9q0-.846.577-1.423Q5.154 7 6 7h4.5q.517 0 .883.213q.365.212.617.587q.252-.375.617-.587Q12.983 7 13.5 7H18q.846 0 1.423.577Q20 8.154 20 9v2.3q.488.252.744.754T21 13v5h-1v-2H4v2H3Zm9.5-7H19V9q0-.425-.288-.713T18 8h-4.5q-.425 0-.713.288T12.5 9v2ZM5 11h6.5V9q0-.425-.288-.713T10.5 8H6q-.425 0-.713.288T5 9v2Zm-1 4h16v-2q0-.425-.288-.713T19 12H5q-.425 0-.713.288T4 13v2Zm16 0H4h16Z"/>
                                </svg>
                                <span>5 Habitaciones</span>
                            </li>
                            <li class="flex flex-row text-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                          d="m240.801 293.826l-23.851 23.851l23.8 47.6l23.417-24.718l-23.366-46.733zm15.177 101.906l22.299 44.6l23.418-24.719l-22.3-44.599l-23.417 24.718zM438.926 202.62L415.8 227.032l44.423 21.246l23.127-24.412l-44.424-21.246zm-96.323-10.596l42.861 20.499l23.127-24.411l-41.992-20.084l-23.996 23.996zm-34.818 149.022l28.523 38.031l22.325-23.565l-28.523-38.031l-22.325 23.565zm2.848-49.534l-28.936-38.582l-22.857 22.857l29.468 39.29l22.325-23.565zm-9.89-57.628l36.683 29.347l22.085-23.313l-36.001-28.801l-22.767 22.767zm61.758 49.407l36.721 29.377l22.085-23.313l-36.721-29.376l-22.085 23.312zm-13.814-182.604l-26.24 26.239l-24.718-24.718a111.609 111.609 0 0 0-157.839 0c-.342.341-.673.689-1.009 1.034A77.974 77.974 0 0 0 16 166.988V408h32V166.988a45.975 45.975 0 0 1 72.048-37.868a111.809 111.809 0 0 0 19.842 130.929l24.717 24.717l-23.92 23.921l20 20l208-208ZM185.006 259.911l-22.489-22.489A79.611 79.611 0 0 1 275.1 124.835l22.489 22.49Z"/>
                                </svg>
                                <span>3 Baños</span>
                            </li>
                            <li class="flex flex-row text-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 21 21">
                                    <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                       stroke-linejoin="round">
                                        <path d="M10.5 16.5a5 5 0 0 0-5-5"/>
                                        <path d="M5.5 5.5v11h11"/>
                                    </g>
                                </svg>
                                <span>1.562 Sqf</span>
                            </li>
                            <li class="flex flex-row text-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256">
                                    <path fill="currentColor"
                                          d="M208 34h-26V24a6 6 0 0 0-12 0v10H86V24a6 6 0 0 0-12 0v10H48a14 14 0 0 0-14 14v160a14 14 0 0 0 14 14h160a14 14 0 0 0 14-14V48a14 14 0 0 0-14-14ZM48 46h26v10a6 6 0 0 0 12 0V46h84v10a6 6 0 0 0 12 0V46h26a2 2 0 0 1 2 2v34H46V48a2 2 0 0 1 2-2Zm160 164H48a2 2 0 0 1-2-2V94h164v114a2 2 0 0 1-2 2Zm-98-90v64a6 6 0 0 1-12 0v-54.29l-7.32 3.66a6 6 0 1 1-5.36-10.74l16-8A6 6 0 0 1 110 120Zm59.57 29.25L148 178h20a6 6 0 0 1 0 12h-32a6 6 0 0 1-4.8-9.6L160 142a10 10 0 1 0-16.65-11a6 6 0 1 1-10.35-6a22 22 0 1 1 36.62 24.26Z"/>
                                </svg>
                                <span>2007</span>
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center px-4">
                        <hr class="bg-gray-200 border-0 dark:bg-gray-700">
                        <span class="text-xs">LA ROSA REALTY ST. PETERSBURG</span>
                    </div>
                    <div class="my-2 flex items-center justify-between px-4 pt-2 border-t-2 border-gray-200">
                        <p class="text-sm font-semibold text-gray-500">Hace 51 minutos</p>
                        <a href="#" class="rounded bg-gray-200 px-4 py-1 text-sm font-semibold text-gray-600">Información</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>


</div>

@section('websiteStyles')


@endsection

@section('websiteScripts')



@endsection
