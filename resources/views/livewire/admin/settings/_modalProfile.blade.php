<div id="create-profile-modal" class="fixed left-0 right-0 z-50 flex items-center justify-center overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full {{ ($openModalCreateClass == false) ? 'hidden' : '' }}">
    <div class="relative w-full h-full max-w-md px-4 md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
            <!-- Modal header -->
            <div class="flex justify-end p-2">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white pl-2">
                    {{ $titleModal }}
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white" data-modal-toggle="create-profile-modal" id="closeModalProfile">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <form wire:submit.prevent="{{ $actionFormModal }}" >

                <input type="hidden" wire:model="fieldProfileID">

                <!-- Modal body -->
                <div class="p-4 pt-0 text-center">
                        <div class="sm:col-span-1 mb-4">
                            <input type="number" wire:model="fieldProfileLevel" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Level')" @if(!is_null($fieldProfileID)) disabled @endif>
                            @error('fieldProfileLevel')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="sm:col-span-1 mb-4">
                            <input type="text" wire:model="fieldProfileName" id="repeatPassword" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Name')" >
                            @error('fieldProfileName')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                            @enderror
                        </div>
                    <div class="sm:col-span-1">
                        <textarea wire:model="fieldProfileDescription" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="@lang('Description')"></textarea>
                        @error('fieldProfileDescription')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <!-- Modal footer -->
                <div class="flex space-x-2 justify-end p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-toggle="create-profile-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">
                        @lang('Cancel')
                    </button>
                    <button type="submit" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2 dark:focus:ring-blue-800">

                        @if(is_null($fieldProfileID)) @lang('Create') @else @lang('Update') @endif


                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
