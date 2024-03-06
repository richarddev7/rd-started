<div id="modal-delete-category" class="fixed left-0 right-0 z-50 flex items-center justify-center overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full hidden" wire:ignore.self>
    <div class="relative w-full h-full max-w-md px-4 md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
            <!-- Modal header -->
            <div class="flex justify-end p-2">

                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white" data-modal-toggle="modal-delete-category" id="closeModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 pt-0 text-center" >
                <svg class="w-16 h-16 mx-auto text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="mt-5 mb-6 text-lg text-gray-500 dark:text-gray-400">
                    <p>@lang('Are you sure you want to eliminate') <strong>{{ (!is_null($infoCategory)) ? $infoCategory['name_category'] : 'No data' }}</strong>?</p>
                </h3>
            </div>
            <!-- Modal footer -->
            <div class="flex space-x-2 justify-end p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-toggle="modal-delete-category" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">
                    @lang('Cancel')
                </button>
                <button type="button" wire:click.prevent="deleteCategory({{ (!is_null($infoCategory)) ? $infoCategory['id_post_category'] : 'No data' }})" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2 dark:focus:ring-red-800">
                    @lang('Delete')
                </button>
            </div>
        </div>
    </div>
</div>
