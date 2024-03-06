<div>

    {{-- Do your work, then step back. --}}
    <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="flex items-center justify-between">
                <div class="mb-4">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">@lang('Categories')</h1>
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
                            <input type="text" wire:model.live="categoriesSearch" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Search category')">
                        </div>
                    </form>
                    <div class="flex pl-0 mt-3 space-x-1 sm:pl-2 sm:mt-0">

                    </div>
                </div>
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                    <button type="button" wire:click="openModalCreate()" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900" data-modal-target="modal-category" data-modal-toggle="modal-category">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z"/></svg> @lang('Create category')
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
                                @lang('Date')
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                @lang('Actions')
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                        @forelse($categories as $category)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="w-4 p-4 text-sm font-normal text-gray-500 dark:text-gray-400">
                                    {{ $category->id_post_category }}
                                </td>
                                <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">{{ $category->name_category }}</td>
                                <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">{{ $category->create_date_category }}</td>
                                <td class="p-4 space-x-2 whitespace-nowrap">
                                    <button wire:click="openModalEdit({{ $category }})" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-green-500 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" data-modal-target="modal-category" data-modal-toggle="modal-category">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                    </a>
                                    <button type="button" wire:click="openModalDeleteCategory({{ $category }})" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900" data-modal-target="modal-delete-category" data-modal-toggle="modal-delete-category">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700" >
                                <td class="w-4 p-4 text-center" colspan="5">
                                    @lang('No data')
                                </td>
                            </tr>
                        @endforelse


                        </tbody>
                    </table>

                    {{-- Pagination --}}
                    <div class="p-4">
                        {{ $categories->links() }}
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- Delete User Modal -->
    {{-- @include('livewire/admin/articles/_modalDeleteArticle') --}}
    @include('livewire/admin/articles/_modalCategory', ['actionFormModalEdit' => $actionFormModal])
    @include('livewire/admin/articles/_modalDeleteCategory')

    @section('websiteScripts')
        <script type="text/javascript">

            // Cierro el modal al editar y eliminar una categoria
            window.addEventListener('closeModal', () => {

                document.getElementById('closeModal').click();

            });

        </script>
    @endsection

</div>

