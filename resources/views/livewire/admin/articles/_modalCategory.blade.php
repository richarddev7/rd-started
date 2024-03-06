<div id="modal-category" class="fixed left-0 right-0 z-50 flex items-center justify-center overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full hidden" wire:ignore.self>
    <div class="relative w-full h-full max-w-md px-4 md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    @if(is_null($modalFieldIDCategory)) @lang('Create category') @else @lang('Update category') @endif
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-category">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form wire:submit.deferer="{{ $actionFormModal }}" >

                <input type="hidden" wire:model="modalFieldIDCategory">

                <!-- Modal body -->
                <div class="p-4 pt-4 text-center">
                    <div class="sm:col-span-1 mb-4">
                        <input type="text" wire:model.live="modalFieldNameCategory" id="modalFieldNameCategory" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Name')">
                        @error('modalFieldNameCategory')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-1 mb-4">
                        <input type="text" wire:model="modalFieldSlugCategory" id="modalFieldSlugCategory" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Slug')">
                        @error('modalFieldSlugCategory')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-1">
                        <textarea wire:model="modalFieldDescriptionCategory" id="messmodalFieldDescriptionCategoryage" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="@lang('Description')"></textarea>
                        @error('modalFieldDescriptionCategory')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <!-- Modal footer -->
                <div class="flex space-x-2 justify-end p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-toggle="modal-category" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">
                        @lang('Cancel')
                    </button>
                    <button type="submit" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2 dark:focus:ring-blue-800">
                        @if(is_null($modalFieldIDCategory)) @lang('Create') @else @lang('Update') @endif
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
