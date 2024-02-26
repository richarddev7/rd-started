<div class="p-4 md:p-5 space-y-4">
    <form wire:submit.prevent="{{ $actionForm }}">
        <div class="grid gap-4 md:grid-cols-2 sm:gap-6">
            <div class="sm:col-span-1">
                <div class="flex gap-4">
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="imageProfile">@lang('Image profile')</label>
                        <input wire:model="imageProfile" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" accept="image/png, image/jpeg">
                    </div>
                    <div class="">
                        @if($imageProfile)
                            <img class="w-24 h-20" src="{{ $imageProfile->temporaryUrl() }}">
                        @else
                            <img class="w-24 h-20" src="{{ Storage::url('assets/' . NAME_IMAGE_DEFULT) }}">
                        @endif
                    </div>
                </div>

                @error('imageProfile')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>
            <div class="sm:col-span-1">

                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Name')</label>
                <input type="text" wire:model="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Name')">
                @error('name')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>
            <div class="sm:col-span-1">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Email')</label>
                <input type="text" wire:model="email"  id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @if($editForm == true) bg-gray-500 @endif" placeholder="@lang('Email')" @if($editForm == true) readonly @endif>
                @error('email')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>
            <div class="sm:col-span-1">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Phone')</label>
                <input type="text" wire:model="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Phone')">
                @error('phone')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>
            <div class="sm:col-span-1">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Whatsapp')</label>
                <input type="text" wire:model="whatsappNumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Whatsapp')">
                @error('whatsappNumber')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>
            <div class="sm:col-span-1">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Country')</label>
                <input type="text" wire:model="country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Country')">
                @error('country')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>
            <div class="sm:col-span-1">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('State')</label>
                <input type="text" wire:model="state" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('State')">
                @error('state')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>
            <div class="sm:col-span-1">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('City')</label>
                <input type="text" wire:model="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('City')">
                @error('city')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>
            <div class="sm:col-span-1">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Address')</label>
                <input type="text" wire:model="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Address')">
                @error('address')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>
            <div class="sm:col-span-1">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Birthdate')</label>
                <input type="date" wire:model="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Birthdate')">
                @error('birthdate')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>
            <div class="sm:col-span-1">
                <label for="profile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Profile')</label>
                <select wire:model="profile" id="profile" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">--- @lang('Select a profile user') ---</option>
                    @forelse($userProfiles as $profile)
                        <option value="{{ $profile->level }}" @if(!is_null($user) && $user->level == $profile->level) selected @endif>{{ $profile->name_profile }}</option>
                    @empty
                        <option value="">@lang('No hay perfiles')</option>
                    @endforelse

                </select>
                @error('profile')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>
            <div class="sm:col-span-1 text-right">
                <label class="relative inline-flex items-center mb-5 cursor-pointer">
                    <input type="checkbox" value="1" class="sr-only peer" wire:model="status" @if($status == 1) checked @endif>
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">@lang('Status user')</span>
                </label>
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('About me')</label>
                <textarea wire:model="aboutMe" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
                @error('aboutMe')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>

            <div class="sm:col-span-1 ">
                <div class="flex gap-4">
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="imageProfile">@lang('Image banner profile')</label>
                        <input wire:model="imageBanner" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" accept="image/png, image/jpeg">
                    </div>
                    <div class="">
                        @if($imageBanner)
                            <img class="w-24 h-20" src="{{ $imageBanner->temporaryUrl() }}">
                        @else
                            <img class="w-24 h-20" src="{{ Storage::url('assets/' . NAME_IMAGE_DEFULT) }}">
                        @endif
                    </div>
                </div>

                @error('imageProfile')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>
            <div class="sm:col-span-1 text-right">
                <label class="relative inline-flex items-center mb-5 cursor-pointer">
                    <input type="checkbox" value="1" class="sr-only peer" wire:model="darkMode" @if($darkMode == 1) checked @endif>
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">@lang('Dark mode')</span>
                </label>
            </div>

            <div class="sm:col-span-1">
                <label for="language" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Language')</label>
                <select wire:model="language" id="language" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="es" @if($language == 'es') selected @endif>@lang('Spanish')</option>
                    <option value="en" @if($language == 'en') selected @endif>@lang('English')</option>
                </select>
                @error('language')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>

            <div class="sm:col-span-1">
                <label for="webPage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Web page')</label>
                <input type="text" wire:model="webPage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Web page')">
                @error('webPage')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>

            <div class="sm:col-span-1">
                <label for="socialFacebook" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Facebook')</label>
                <input type="text" wire:model="socialFacebook" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Facebook')">
                @error('socialFacebook')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>

            <div class="sm:col-span-1">
                <label for="socialYoutube" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Youtube')</label>
                <input type="text" wire:model="socialYoutube" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Youtube')">
                @error('socialYoutube')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>

            <div class="sm:col-span-1">
                <label for="socialInstagram" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Instagram')</label>
                <input type="text" wire:model="socialInstagram" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Instagram')">
                @error('socialInstagram')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>

            <div class="sm:col-span-1">
                <label for="socialX" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('X (Twitter)')</label>
                <input type="text" wire:model="socialX" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('X (Twitter)')">
                @error('socialX')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                @enderror
            </div>

            <div class="sm:col-span-1 flex justify-end">
                <a href="{{ route('app-users') }}" class=" text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">@lang('Cancel')</a>
                <button type="submit" class="ms-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    {{ $btnSubmitForm }}</button>
            </div>
        </div>
    </form>
</div>
