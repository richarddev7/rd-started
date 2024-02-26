<div>
    {{-- Do your work, then step back. --}}
    <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="flex items-center justify-between">
                <div class="mb-4">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">@lang('Profiles user')</h1>
                </div>

                <!-- Alertas -->
                @include('livewire/admin/partials/_alerts')
                <div>

                </div>
            </div>
            <div class="sm:flex">
                <div class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                    <form class="lg:pr-3" action="#" method="GET">
                        <label for="users-search" class="sr-only">Search</label>
                        <div class="relative mt-1 lg:w-64 xl:w-96">
                            <input type="text" wire:model.live="profileSearch" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Search profile')">
                        </div>
                    </form>
                    <div class="flex pl-0 mt-3 space-x-1 sm:pl-2 sm:mt-0">

                    </div>
                </div>
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                    <button type="button" wire:click="openModalCreate()" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900" data-modal-target="create-profile-modal" data-modal-toggle="create-profile-modal">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z"/></svg> @lang('Create profile')
                    </button>

                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                @lang('ID')
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                @lang('Name')
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                @lang('Description')
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                @lang('Date')
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                @lang('Actions')
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                        @forelse($profiles as $profile)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="w-4 p-4 text-sm font-normal text-gray-500 dark:text-gray-400">
                                    {{ $profile->id }}
                                </td>
                                <td class="w-4 p-4 text-sm font-normal text-gray-500 dark:text-gray-400">
                                    {{ $profile->name_profile }}
                                </td>
                                <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $profile->description_profile }}
                                </td>
                                <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">{{ $profile->created_at }}</td>
                                <td class="p-4 space-x-2 whitespace-nowrap">
                                    <button type="button" wire:click="editProfileUser({{ $profile }})" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900" data-modal-target="create-profile-modal" data-modal-toggle="create-profile-modal">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                    </button>
                                    @if($profile->id != 1)
                                        <button type="button" wire:click="alertDeleteProfile({{ $profile }})" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                        </button>
                                        <button type="button" wire:click="deleteProfile({{ $profile }})" id="deleteProfile" class="hidden inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="w-4 p-4">
                                    @lang('No data')
                                </td>
                            </tr>
                        @endforelse


                        </tbody>
                    </table>

                    {{-- Pagination --}}
                    {{ $profiles->links() }}

                </div>
            </div>
        </div>
    </div>


    <!-- Delete User Modal -->
    @include('livewire.admin.settings._modalProfile')

    @section('websiteScripts')
        <script type="text/javascript">

            window.addEventListener('closeModal', () => {
                // toggle the modal
                //modal.toggle();

                document.getElementById('closeModalProfile').click();

            });

            // Mostrar alerta para eliminar
            window.addEventListener('showAlertDeleteProfile', ($profileInfo) => {

                //console.log($profileInfo.detail[0].name_profile);

                if (confirm("Delete profile: " + $profileInfo.detail[0].name_profile) == true) {
                    // Procedo a la eliminacion del perfil
                    document.getElementById('deleteProfile').click();
                } else {
                    console.log('Cancelo la eliminacion del perfil: ' + $profileInfo.detail[0].name_profile);
                }

            });

        </script>
    @endsection


</div>
