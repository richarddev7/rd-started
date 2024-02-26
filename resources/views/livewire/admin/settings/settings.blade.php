<div >

    {{-- Do your work, then step back. --}}
    <div class="p-4 block sm:flex items-center justify-between lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="flex items-center justify-between">
                <div class="mb-4">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">@lang('Settings')</h1>
                </div>

                <!-- Alertas -->
                @include('livewire/admin/partials/_alerts')
                <div>

                </div>
            </div>
            <div class="sm:flex">

            </div>
        </div>
    </div>

    <div class="grid grid-cols-8 px-4 xl:gap-4 dark:bg-gray-900">

            <a href="{{ route('app-settings-users') }}" class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800 hover:bg-gray-100">
                <div class="grid grid-cols-6 sm:space-x-4 xl:space-x-0 2xl:space-x-4">
                    <div class="flex items-stretch">
                        <svg class="self-center" xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 15.5A3.5 3.5 0 0 1 8.5 12A3.5 3.5 0 0 1 12 8.5a3.5 3.5 0 0 1 3.5 3.5a3.5 3.5 0 0 1-3.5 3.5m7.43-2.53c.04-.32.07-.64.07-.97c0-.33-.03-.66-.07-1l2.11-1.63c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.31-.61-.22l-2.49 1c-.52-.39-1.06-.73-1.69-.98l-.37-2.65A.506.506 0 0 0 14 2h-4c-.25 0-.46.18-.5.42l-.37 2.65c-.63.25-1.17.59-1.69.98l-2.49-1c-.22-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64L4.57 11c-.04.34-.07.67-.07 1c0 .33.03.65.07.97l-2.11 1.66c-.19.15-.25.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1.01c.52.4 1.06.74 1.69.99l.37 2.65c.04.24.25.42.5.42h4c.25 0 .46-.18.5-.42l.37-2.65c.63-.26 1.17-.59 1.69-.99l2.49 1.01c.22.08.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64z"/></svg>
                    </div>
                    <div class="col-span-4">
                        <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">@lang('Profiles user')</h3>
                        <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">

                        </div>
                    </div>
                </div>
            </a>


    </div>

    <div class="col-span-2"></div>


</div>
