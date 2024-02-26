<div class="container mx-auto">

    <div class="mt-15 mb-10 ">
        <div class=" gap-4 w-full m-auto mt-6 ">
            <div class="w-3/6 content-center self-center m-auto">

                <form class="w-full content-center self-center m-auto mb-4">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Buscar</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Direccion, Ciudad, Codigo postal..." required>
                    </div>
                </form>

                <div class="grid lg:grid-cols-3 sm:grid-cols-1 gap-2 p-4 bg-gray-300 rounded">
                    <div class="lg:col-span-2">
                        <div class="listProperties">
                            <h4 class="text-lg font-bold text-white">Propiedades</h4>
                            <ul>
                                @php
                                    $dataProperty = range(0, 4);
                                @endphp
                                @foreach($dataProperty as $data)
                                    <li class="item-property mb-4 bg-gray-100 rounded drop-shadow-md duration-150 hover:scale-105 hover:shadow-md">
                                        <a href="#" class="">
                                            <div class="grid lg:grid-cols-5 md:grid-cols-1 gap-2">
                                                <div class="header-property lg:col-span-1 col-span-4">
                                                    <img class="rounded w-full" src="https://placehold.co/180x180">
                                                </div>
                                                <div class="content-info-property col-span-4 pt-2 pr-4 pb-0 lg:pl-0 pl-2">
                                                    <div class="flex justify-between">
                                                        <h2 class="font-bold">1012 N Ocean Blvd 1009, Pompano Beach, Fl 33062</h2>
                                                        <div class="text-center">
                                                            <span class="inline bg-blue-100 text-blue-800 text-sm font-medium px-2.5 py-0.5 rounded-full">Active</span>
                                                            <span class="bottom-0 right-0 bg-teal-600 text-white text-sm font-medium px-2.5 py-0.5 rounded-full">$2.500.000</span>
                                                        </div>
                                                    </div>
                                                    <p class="my-2 text-sm">
                                                    </p>
                                                    <div class="mb-2 flex items-center justify-between ">
                                                        <ul class="w-full flex inline">
                                                            <li class="flex flex-row text-sm mr-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="mr-2"><path fill="currentColor" d="M3 18v-5q0-.444.256-.946T4 11.3V9q0-.846.577-1.423Q5.154 7 6 7h4.5q.517 0 .883.213q.365.212.617.587q.252-.375.617-.587Q12.983 7 13.5 7H18q.846 0 1.423.577Q20 8.154 20 9v2.3q.488.252.744.754T21 13v5h-1v-2H4v2H3Zm9.5-7H19V9q0-.425-.288-.713T18 8h-4.5q-.425 0-.713.288T12.5 9v2ZM5 11h6.5V9q0-.425-.288-.713T10.5 8H6q-.425 0-.713.288T5 9v2Zm-1 4h16v-2q0-.425-.288-.713T19 12H5q-.425 0-.713.288T4 13v2Zm16 0H4h16Z"/></svg>
                                                                <span>5</span>
                                                            </li>
                                                            <li class="flex flex-row text-sm mr-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512" class="mr-2">
                                                                    <path fill="currentColor" d="m240.801 293.826l-23.851 23.851l23.8 47.6l23.417-24.718l-23.366-46.733zm15.177 101.906l22.299 44.6l23.418-24.719l-22.3-44.599l-23.417 24.718zM438.926 202.62L415.8 227.032l44.423 21.246l23.127-24.412l-44.424-21.246zm-96.323-10.596l42.861 20.499l23.127-24.411l-41.992-20.084l-23.996 23.996zm-34.818 149.022l28.523 38.031l22.325-23.565l-28.523-38.031l-22.325 23.565zm2.848-49.534l-28.936-38.582l-22.857 22.857l29.468 39.29l22.325-23.565zm-9.89-57.628l36.683 29.347l22.085-23.313l-36.001-28.801l-22.767 22.767zm61.758 49.407l36.721 29.377l22.085-23.313l-36.721-29.376l-22.085 23.312zm-13.814-182.604l-26.24 26.239l-24.718-24.718a111.609 111.609 0 0 0-157.839 0c-.342.341-.673.689-1.009 1.034A77.974 77.974 0 0 0 16 166.988V408h32V166.988a45.975 45.975 0 0 1 72.048-37.868a111.809 111.809 0 0 0 19.842 130.929l24.717 24.717l-23.92 23.921l20 20l208-208ZM185.006 259.911l-22.489-22.489A79.611 79.611 0 0 1 275.1 124.835l22.489 22.49Z"/>
                                                                </svg>
                                                                <span>3</span>
                                                            </li>
                                                            <li class="flex flex-row text-sm mr-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 21 21" class="mr-2"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 16.5a5 5 0 0 0-5-5"/><path d="M5.5 5.5v11h11"/></g></svg>
                                                                <span>1.562 Sqf</span>
                                                            </li>
                                                            <li class="flex flex-row text-sm mr-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256" class="mr-2"><path fill="currentColor" d="M208 34h-26V24a6 6 0 0 0-12 0v10H86V24a6 6 0 0 0-12 0v10H48a14 14 0 0 0-14 14v160a14 14 0 0 0 14 14h160a14 14 0 0 0 14-14V48a14 14 0 0 0-14-14ZM48 46h26v10a6 6 0 0 0 12 0V46h84v10a6 6 0 0 0 12 0V46h26a2 2 0 0 1 2 2v34H46V48a2 2 0 0 1 2-2Zm160 164H48a2 2 0 0 1-2-2V94h164v114a2 2 0 0 1-2 2Zm-98-90v64a6 6 0 0 1-12 0v-54.29l-7.32 3.66a6 6 0 1 1-5.36-10.74l16-8A6 6 0 0 1 110 120Zm59.57 29.25L148 178h20a6 6 0 0 1 0 12h-32a6 6 0 0 1-4.8-9.6L160 142a10 10 0 1 0-16.65-11a6 6 0 1 1-10.35-6a22 22 0 1 1 36.62 24.26Z"/></svg>
                                                                <span>2007</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <div class="listCities">
                            <h4 class="text-lg font-bold text-white">Ciudades</h4>
                            <ul class="">
                                <li class="hover:translate-x-6 duration-150">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="inline"><path fill="currentColor" d="M12 2C7.589 2 4 5.589 4 9.995C3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12c0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4s4 1.79 4 4s-1.79 4-4 4z"/></svg>
                                        Pompano Beach, FL
                                    </a>
                                </li>
                                <li class="hover:translate-x-6 duration-150">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="inline"><path fill="currentColor" d="M12 2C7.589 2 4 5.589 4 9.995C3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12c0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4s4 1.79 4 4s-1.79 4-4 4z"/></svg>
                                        Sarasota, FL
                                    </a>
                                </li>
                                <li class="hover:translate-x-6 duration-150">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="inline"><path fill="currentColor" d="M12 2C7.589 2 4 5.589 4 9.995C3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12c0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4s4 1.79 4 4s-1.79 4-4 4z"/></svg>
                                        Kissimmiee, FL
                                    </a>

                                </li>
                                <li class="hover:translate-x-6 duration-150">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="inline"><path fill="currentColor" d="M12 2C7.589 2 4 5.589 4 9.995C3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12c0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4s4 1.79 4 4s-1.79 4-4 4z"/></svg>
                                        Ocala, FL
                                    </a>
                                </li>
                                <li class="hover:translate-x-6 duration-150">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="inline"><path fill="currentColor" d="M12 2C7.589 2 4 5.589 4 9.995C3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12c0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4s4 1.79 4 4s-1.79 4-4 4z"/></svg>
                                        Miami Gardens, FL
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="listZipCode">
                            <h4 class="text-lg font-bold text-white">Codigo Postal</h4>
                            <ul class="">
                                <li class="hover:translate-x-6 duration-150">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50" class="inline"><path fill="currentColor" d="M25 0c-8.284 0-15 6.656-15 14.866c0 8.211 15 35.135 15 35.135s15-26.924 15-35.135C40 6.656 33.284 0 25 0zm-.049 19.312c-2.557 0-4.629-2.055-4.629-4.588c0-2.535 2.072-4.589 4.629-4.589c2.559 0 4.631 2.054 4.631 4.589c0 2.533-2.072 4.588-4.631 4.588z"/></svg>
                                        33062 (Pompano Beach, FL)
                                    </a>
                                </li>
                                <li class="hover:translate-x-6 duration-150">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50" class="inline"><path fill="currentColor" d="M25 0c-8.284 0-15 6.656-15 14.866c0 8.211 15 35.135 15 35.135s15-26.924 15-35.135C40 6.656 33.284 0 25 0zm-.049 19.312c-2.557 0-4.629-2.055-4.629-4.588c0-2.535 2.072-4.589 4.629-4.589c2.559 0 4.631 2.054 4.631 4.589c0 2.533-2.072 4.588-4.631 4.588z"/></svg>
                                        33062 (Sarasota, FL)
                                    </a>
                                </li>
                                <li class="hover:translate-x-6 duration-150">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50" class="inline"><path fill="currentColor" d="M25 0c-8.284 0-15 6.656-15 14.866c0 8.211 15 35.135 15 35.135s15-26.924 15-35.135C40 6.656 33.284 0 25 0zm-.049 19.312c-2.557 0-4.629-2.055-4.629-4.588c0-2.535 2.072-4.589 4.629-4.589c2.559 0 4.631 2.054 4.631 4.589c0 2.533-2.072 4.588-4.631 4.588z"/></svg>
                                        33062 (Kissimmiee, FL)
                                    </a>
                                </li>
                                <li class="hover:translate-x-6 duration-150">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50" class="inline"><path fill="currentColor" d="M25 0c-8.284 0-15 6.656-15 14.866c0 8.211 15 35.135 15 35.135s15-26.924 15-35.135C40 6.656 33.284 0 25 0zm-.049 19.312c-2.557 0-4.629-2.055-4.629-4.588c0-2.535 2.072-4.589 4.629-4.589c2.559 0 4.631 2.054 4.631 4.589c0 2.533-2.072 4.588-4.631 4.588z"/></svg>
                                        33062 (Ocala, FL)
                                    </a>
                                </li>
                                <li class="hover:translate-x-6 duration-150">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 50 50" class="inline"><path fill="currentColor" d="M25 0c-8.284 0-15 6.656-15 14.866c0 8.211 15 35.135 15 35.135s15-26.924 15-35.135C40 6.656 33.284 0 25 0zm-.049 19.312c-2.557 0-4.629-2.055-4.629-4.588c0-2.535 2.072-4.589 4.629-4.589c2.559 0 4.631 2.054 4.631 4.589c0 2.533-2.072 4.588-4.631 4.588z"/></svg>
                                        33062 (Miami Gardens, FL)
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>
