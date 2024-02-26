    <div id="password-user-modal" class="fixed left-0 right-0 z-50 flex items-center justify-center overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full @if(!$userForPassword) hidden @endif">
    <div class="relative w-full h-full max-w-md px-4 md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                <!-- Modal header -->
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white" data-modal-toggle="password-user-modal" id="closeModalPassword">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            <form wire:submit.prevent="updatePasswordUser({{ $userForPassword['id'] ?? '' }})" >
                <!-- Modal body -->
                <div class="p-4 pt-0 text-center">
                    @if($userForPassword)
                        <svg class="w-16 h-16 mx-auto text-green-600" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#10a228" d="M12 17a2 2 0 0 0 2-2a2 2 0 0 0-2-2a2 2 0 0 0-2 2a2 2 0 0 0 2 2m6-9a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V10a2 2 0 0 1 2-2h1V6a5 5 0 0 1 5-5a5 5 0 0 1 5 5v2zm-6-5a3 3 0 0 0-3 3v2h6V6a3 3 0 0 0-3-3"/></svg>

                        <h3 class="mt-5 mb-6 text-lg text-gray-500 dark:text-gray-400">
                            <p>@lang('Update password user'): <strong>{{ $userForPassword['name'] }}</strong></p>
                        </h3>
                        <div class="sm:col-span-1 mb-4">
                            <input type="password" wire:model="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Password')" >
                            @error('password')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="sm:col-span-1">
                            <input type="password" wire:model="repeatPassword" id="repeatPassword" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Repeat Password')" >
                            @error('repeatPassword')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                            @enderror
                        </div>
                    @endif
                </div>
                <!-- Modal footer -->
                <div class="flex space-x-2 justify-end p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-toggle="password-user-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">
                        @lang('Cancel')
                    </button>
                    <button type="submit" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2 dark:focus:ring-blue-800">
                        @lang('Update')
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
