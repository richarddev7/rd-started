<div class="p-4 md:p-5 space-y-4">
    <form wire:submit.prevent="{{ $actionForm }}">

        @if($editForm == true)
            <input type="hidden" wire:model="idPage" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Title')">
        @endif

        <div class="grid gap-4 md:grid-cols-4 sm:gap-6">
            <div class="col-span-3 ">
                <div class="sm:col-span-3 mb-4">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Title')</label>
                    <input type="text" wire:model.live="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="@lang('Title')">
                    @error('title')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-3 mb-4">
                    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Slug')</label>
                    <input type="text" wire:model="slug" id="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    @error('slug')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-3 mb-4" wire:ignore>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Content')</label>
                    <textarea wire:model="formFieldContent" id="formFieldContent" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="@lang('Contetnt')"></textarea>
                </div>
                <div class="sm:col-span-3 mb-4">
                    @error('formFieldContent')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-3 mb-4 border-t-4 border-indigo-500 pt-4">
                    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Title seo')</label>
                    <input type="text" wire:model="seoTitle" id="seoTitle" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    @error('seoTitle')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-3 mb-4" wire:ignore>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Description seo')</label>
                    <textarea wire:model="seoDescription" id="seoDescription" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    @error('seoDescription')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-3 mb-10">
                    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">@lang('Keyworks seo')</label>
                    <input type="text" wire:model="seoKeyworks" id="seoTitle" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    @error('seoKeyworks')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                    @enderror
                </div>

            </div>
            <div class="col-span-1">
                <div class="flex flex-col pb-8">
                    <button type="submit" class="w-full text-center block text-white mb-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        {{ $btnSubmitForm }}</button>
                    <a href="{{ route('app-pages') }}" class="w-full text-center block text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">@lang('Cancel')</a>

                </div>
                <div class="text-right">
                    <label class="relative inline-flex items-center mb-5 cursor-pointer">
                        <input type="checkbox" value="1" class="sr-only peer" wire:model="status" @if($status == 1) checked @endif>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                        <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">@lang('Status page')</span>
                    </label>
                </div>
                <div class="sm:col-span-1">
                    <div class="">
                        <div class="">
                            @if($seoImage)
                                <img class="w-full" src="{{ $seoImage->temporaryUrl() }}">
                            @else
                                <img class="w-full" src="{{ Storage::url('assets/' . IMAGE_DEFAULT) }}">
                            @endif
                        </div>
                        <div class="w-full">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="imageProfile">@lang('Image page')</label>
                            <input wire:model="seoImage" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" accept="image/png, image/jpeg">
                        </div>
                        @error('seoImage')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                        @enderror

                    </div>

                    @error('imageProfile')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">ERROR!</span> {{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>



    </form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.1/tinymce.min.js" integrity="sha512-tbXTHOY9yg3iMu7/maK4/riWonAxPpblIf5liooEUo7U39WDMITQDTcA++6Y/SPcsTqLfZfK07Wb0am09Urrjw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>


        // Documentacion https://www.tiny.cloud/docs/demo/full-featured/
        tinymce.init({
            language: "es_419",
            language_url : '/app/tinymce/js/tinymce/langs/es_419.js',  // site absolute URL
            selector: 'textarea#formFieldContent',
            height: '500px',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: false,
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
                editor.on('change', function (e) {
                @this.set('formFieldContent', editor.getContent());
                });
            },
            /* enable title field in the Image dialog*/
            image_title: true,
            /* enable automatic uploads of images represented by blob or data URIs*/
            automatic_uploads: true,
            /*
              URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
              images_upload_url: 'postAcceptor.php',
              here we add custom filepicker only to Image dialog
            */
            images_upload_url: '/upload',
            file_picker_types: 'image',
            // La carga de imagen para tinyMCE Funcionó con este articulo -> https://www.dbestech.com/tutorials/easiest-way-to-upload-image-in-laravel
            // Y el problema en la configuiracion del tiny MCE -> (https://stackoverflow.com/a/49142273)
            images_upload_handler: function (blobInfo, success, failure) {
                var xhr, formData;
                xhr = new XMLHttpRequest();
                xhr.withCredentials = false;
                xhr.open('POST', '/upload');
                var token = '{{ csrf_token() }}';
                xhr.setRequestHeader("X-CSRF-Token", token);
                xhr.onload = function() {
                    var json;
                    if (xhr.status != 200) {
                        failure('HTTP Error: ' + xhr.status);
                        return;
                    }
                    json = JSON.parse(xhr.responseText);

                    if (!json || typeof json.location != 'string') {
                        failure('Invalid JSON: ' + xhr.responseText);
                        return;
                    }
                    success(json.location);
                };
                formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());
                xhr.send(formData);
            },
            /* and here's our custom image picker*/
            file_picker_callback: function (cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                /*
                  Note: In modern browsers input[type="file"] is functional without
                  even adding it to the DOM, but that might not be the case in some older
                  or quirky browsers like IE, so you might want to add it to the DOM
                  just in case, and visually hide it. And do not forget do remove it
                  once you do not need it anymore.
                */

                input.onchange = function () {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function () {
                        /*
                          Note: Now we need to register the blob in TinyMCEs image blob
                          registry. In the next release this part hopefully won't be
                          necessary, as we are looking to handle it internally.
                        */
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        /* call the callback and populate the Title field with the file name */
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            },
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });

    </script>



    @push('scripts')


    {{--
        <script type="text/javascript">

            console.log('Ejecuto la iniciacion del editor...');

            // Documentacion https://www.tiny.cloud/docs/demo/full-featured/
            tinymce.init({
                //language: "es_419",
                //language_url : '/app/tinymce/js/tinymce/langs/es_419.js',  // site absolute URL
                selector: 'textarea#contentPage',
                height: '500px',
                plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
                menubar: 'file edit view insert format tools table help',
                toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                toolbar_sticky: false,
                toolbar_mode: 'floating',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                /* enable title field in the Image dialog*/
                image_title: true,
                /* enable automatic uploads of images represented by blob or data URIs*/
                automatic_uploads: true,
                /*
                  URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
                  images_upload_url: 'postAcceptor.php',
                  here we add custom filepicker only to Image dialog
                */
                images_upload_url: '/upload',
                file_picker_types: 'image',
                // La carga de imagen para tinyMCE Funcionó con este articulo -> https://www.dbestech.com/tutorials/easiest-way-to-upload-image-in-laravel
                // Y el problema en la configuiracion del tiny MCE -> (https://stackoverflow.com/a/49142273)
                images_upload_handler: function (blobInfo, success, failure) {
                    var xhr, formData;
                    xhr = new XMLHttpRequest();
                    xhr.withCredentials = false;
                    xhr.open('POST', '/upload');
                    var token = '{{ csrf_token() }}';
                    xhr.setRequestHeader("X-CSRF-Token", token);
                    xhr.onload = function() {
                        var json;
                        if (xhr.status != 200) {
                            failure('HTTP Error: ' + xhr.status);
                            return;
                        }
                        json = JSON.parse(xhr.responseText);

                        if (!json || typeof json.location != 'string') {
                            failure('Invalid JSON: ' + xhr.responseText);
                            return;
                        }
                        success(json.location);
                    };
                    formData = new FormData();
                    formData.append('file', blobInfo.blob(), blobInfo.filename());
                    xhr.send(formData);
                },
                /* and here's our custom image picker*/
                file_picker_callback: function (cb, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');

                    /*
                      Note: In modern browsers input[type="file"] is functional without
                      even adding it to the DOM, but that might not be the case in some older
                      or quirky browsers like IE, so you might want to add it to the DOM
                      just in case, and visually hide it. And do not forget do remove it
                      once you do not need it anymore.
                    */

                    input.onchange = function () {
                        var file = this.files[0];

                        var reader = new FileReader();
                        reader.onload = function () {
                            /*
                              Note: Now we need to register the blob in TinyMCEs image blob
                              registry. In the next release this part hopefully won't be
                              necessary, as we are looking to handle it internally.
                            */
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);

                            /* call the callback and populate the Title field with the file name */
                            cb(blobInfo.blobUri(), { title: file.name });
                        };
                        reader.readAsDataURL(file);
                    };

                    input.click();
                },
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });




        </script>

        --}}
    @endpush


</div>


