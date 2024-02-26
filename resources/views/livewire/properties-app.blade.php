<div class="max-w-screen-xl mx-auto">

    {{-- Search properties component --}}
    <livewire:WebSearchPropertiesApp />

    <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-4 py-5 px-4">

        @php

            $dataProperty = range(0, 11);

            $titleProperty = "1012 N Ocean Blvd 1009, Pompano Beach, Fl 33062";

            $slugUrlProperty = \Illuminate\Support\Str::slug($titleProperty . '-rd12345');

        @endphp
        @foreach($dataProperty as $data)

            <div class="rounded item-propertie">
                <div class="w-full rounded bg-white shadow duration-150 hover:scale-105 hover:shadow-md">
                    <a href="{{ route('single-property', ['slug' => $slugUrlProperty]) }}" class="relative">
                        <span class="absolute inline float-right bg-blue-100 text-blue-800 text-xs font-medium m-3 px-2.5 py-0.5 rounded-full">Active</span>
                        <img class="w-full object-cover rounded object-center" src="https://images.unsplash.com/photo-1580477371194-4593e3c7c6cf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="{{ $titleProperty }}" title="{{ $titleProperty }}" />
                        <span class="absolute bottom-0 right-0 bg-teal-600 text-white text-xs font-medium m-3 px-2.5 py-0.5 rounded-full">$2.500.000</span>
                    </a>
                    <div class="py-2">
                        <div class="my-2 flex items-center justify-between px-4">
                            <a href="{{ route('single-property', ['slug' => $slugUrlProperty]) }}" class="font-bold text-gray-500" alt="{{ $titleProperty }}" >{{ $titleProperty }}</a>
                        </div>
                        <div class="my-4 flex items-center justify-between px-4">
                            <ul class="w-full grid grid-cols-2 gap-2 place-content-between">
                                <li class="flex flex-row text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path fill="currentColor" d="M3 18v-5q0-.444.256-.946T4 11.3V9q0-.846.577-1.423Q5.154 7 6 7h4.5q.517 0 .883.213q.365.212.617.587q.252-.375.617-.587Q12.983 7 13.5 7H18q.846 0 1.423.577Q20 8.154 20 9v2.3q.488.252.744.754T21 13v5h-1v-2H4v2H3Zm9.5-7H19V9q0-.425-.288-.713T18 8h-4.5q-.425 0-.713.288T12.5 9v2ZM5 11h6.5V9q0-.425-.288-.713T10.5 8H6q-.425 0-.713.288T5 9v2Zm-1 4h16v-2q0-.425-.288-.713T19 12H5q-.425 0-.713.288T4 13v2Zm16 0H4h16Z"/></svg>
                                    <span>5 Habitaciones</span>
                                </li>
                                <li class="flex flex-row text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="m240.801 293.826l-23.851 23.851l23.8 47.6l23.417-24.718l-23.366-46.733zm15.177 101.906l22.299 44.6l23.418-24.719l-22.3-44.599l-23.417 24.718zM438.926 202.62L415.8 227.032l44.423 21.246l23.127-24.412l-44.424-21.246zm-96.323-10.596l42.861 20.499l23.127-24.411l-41.992-20.084l-23.996 23.996zm-34.818 149.022l28.523 38.031l22.325-23.565l-28.523-38.031l-22.325 23.565zm2.848-49.534l-28.936-38.582l-22.857 22.857l29.468 39.29l22.325-23.565zm-9.89-57.628l36.683 29.347l22.085-23.313l-36.001-28.801l-22.767 22.767zm61.758 49.407l36.721 29.377l22.085-23.313l-36.721-29.376l-22.085 23.312zm-13.814-182.604l-26.24 26.239l-24.718-24.718a111.609 111.609 0 0 0-157.839 0c-.342.341-.673.689-1.009 1.034A77.974 77.974 0 0 0 16 166.988V408h32V166.988a45.975 45.975 0 0 1 72.048-37.868a111.809 111.809 0 0 0 19.842 130.929l24.717 24.717l-23.92 23.921l20 20l208-208ZM185.006 259.911l-22.489-22.489A79.611 79.611 0 0 1 275.1 124.835l22.489 22.49Z"/>
                                    </svg>
                                    <span>3 Baños</span>
                                </li>
                                <li class="flex flex-row text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 16.5a5 5 0 0 0-5-5"/><path d="M5.5 5.5v11h11"/></g></svg>
                                    <span>1.562 Sqf</span>
                                </li>
                                <li class="flex flex-row text-xs" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path fill="currentColor" d="M208 34h-26V24a6 6 0 0 0-12 0v10H86V24a6 6 0 0 0-12 0v10H48a14 14 0 0 0-14 14v160a14 14 0 0 0 14 14h160a14 14 0 0 0 14-14V48a14 14 0 0 0-14-14ZM48 46h26v10a6 6 0 0 0 12 0V46h84v10a6 6 0 0 0 12 0V46h26a2 2 0 0 1 2 2v34H46V48a2 2 0 0 1 2-2Zm160 164H48a2 2 0 0 1-2-2V94h164v114a2 2 0 0 1-2 2Zm-98-90v64a6 6 0 0 1-12 0v-54.29l-7.32 3.66a6 6 0 1 1-5.36-10.74l16-8A6 6 0 0 1 110 120Zm59.57 29.25L148 178h20a6 6 0 0 1 0 12h-32a6 6 0 0 1-4.8-9.6L160 142a10 10 0 1 0-16.65-11a6 6 0 1 1-10.35-6a22 22 0 1 1 36.62 24.26Z"/></svg>
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
                            <a href="#" onclick="Livewire.dispatch('openModal', { component: 'partials.ModalGetInfoProperty' })" class="rounded bg-gray-200 px-4 py-1 text-sm font-semibold text-gray-600">Información</a>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>

    @livewire('wire-elements-modal')

</div>
