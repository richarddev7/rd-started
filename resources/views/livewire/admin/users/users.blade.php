<div class="">

    {{-- Do your work, then step back. --}}
    <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="flex items-center justify-between">
                <div class="mb-4">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">@lang('Users')</h1>
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
                            <input type="text" wire:model.live="userSearch" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Search user')">
                        </div>
                    </form>
                    <div class="flex pl-0 mt-3 space-x-1 sm:pl-2 sm:mt-0">

                    </div>
                </div>
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                    <a href="{{ route('app-create-user') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900" type="button">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z"/></svg> @lang('Create user')
                    </a>
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
                                @lang('Image')
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                @lang('Name')
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                @lang('Date')
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                @lang('Status')
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                @lang('Actions')
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                            @forelse($users as $user)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="w-4 p-4 text-sm font-normal text-gray-500 dark:text-gray-400">
                                        {{ $user->id }}
                                    </td>
                                    <td class="w-4 p-4 text-sm font-normal text-gray-500 dark:text-gray-400">
                                        <img class="w-10 h-10 rounded-full" src="{{ (!is_null($user->image)) ? Storage::url('public/' . $user->image) : Storage::url('assets/' . NAME_IMAGE_DEFULT) }}">
                                    </td>
                                    <td class="flex items-center p-4 mr-12 space-x-6 whitespace-nowrap">
                                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                            <div class="text-base font-semibold text-gray-900 dark:text-white">{{ $user->name }}</div>
                                            <div class="text-sm font-normal text-gray-500 dark:text-gray-400">{{ $user->email }}</div>
                                        </div>
                                    </td>
                                    <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">{{ $user->created_at }}</td>
                                    <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="flex items-center">
                                            @if($user->status == 1)
                                                <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>  @lang('Active')
                                            @else
                                                <div class="h-2.5 w-2.5 rounded-full bg-red-400 mr-2"></div>  @lang('Inactive')
                                            @endif
                                        </div>
                                    </td>
                                    <td class="p-4 space-x-2 whitespace-nowrap">
                                        <a href="{{ route('app-edit-user', $user->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-green-500 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                        </a>
                                        <button type="button" wire:click="openPasswordModal({{ $user }})" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900" data-modal-target="password-user-modal" data-modal-toggle="password-user-modal">
                                            <svg class="w-4 h-4" fill="currentColor"  xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path  d="M12 17a2 2 0 0 0 2-2a2 2 0 0 0-2-2a2 2 0 0 0-2 2a2 2 0 0 0 2 2m6-9a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V10a2 2 0 0 1 2-2h1V6a5 5 0 0 1 5-5a5 5 0 0 1 5 5v2zm-6-5a3 3 0 0 0-3 3v2h6V6a3 3 0 0 0-3-3"/></svg>
                                        </button>
                                         {{-- Para no borrar el Usuario Administrador  --}}
                                        @if($user->id != 1)
                                            <button type="button" wire:click="openDeleteModal({{ $user }})" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900" data-modal-target="delete-user-modal" data-modal-toggle="delete-user-modal">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                            </button>
                                            <button type="button" wire:click="updateStatusUser({{ $user }})" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="1.13em" height="1em" viewBox="0 0 576 512"><path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19M288 400a144 144 0 1 1 144-144a143.93 143.93 0 0 1-144 144m0-240a95.31 95.31 0 0 0-25.31 3.79a47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160"/></svg>
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

                    {{ $users->links() }}

                </div>
            </div>
        </div>
    </div>

    <!-- Delete User Modal -->
    @include('livewire/admin/users/_modalDeleteUser')
    @include('livewire/admin/users/_modalPasswordUser')

    @section('websiteScripts')
        <script type="text/javascript">



            window.addEventListener('userDeleted', () => {
                // toggle the modal
                //modal.toggle();

                console.log('Ejecuto la funcion que cierra el modal...');


                document.getElementById('closeModal').click();


            });

            window.addEventListener('userPasswordChanged', () => {
                // toggle the modal
                //modal.toggle();

                console.log('Ejecuto la funcion que cierra el modal del password...');


                document.getElementById('closeModalPassword').click();


            });
        </script>
    @endsection

</div>


