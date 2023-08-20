@section('title', 'Profile')
<x-app-layout>
    <div class="grid grid-cols-1 mb-5">
        <div class="flex items-center justify-between">
            <h4 class="mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">{{ __('Profile') }}</h4>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                            {{__('Apps')}}
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <a href="{{route('profile.edit')}}" class="ml-1 text-sm font-medium text-gray-500 hover:text-gray-900 md:ml-2 dark:text-gray-100 dark:hover:text-white">{{ __('Profile') }}</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl">
            @include('profile.partials.update-profile-information-form')
        </div>
        <div>
            <input type="file" onChange="preview_2(this);" accept='.jpg, .jpeg, .png, .webp'><br>
            <img id="imagePreview" style="height: 300px;width: 300px;" alt="" src="https://script.viserlab.com/viserbank/placeholder-image/400x400">
        </div>
    </div>

    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl">
            @include('profile.partials.update-password-form')
        </div>
    </div>

    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl">
            @include('profile.partials.delete-user-form')
        </div>
    </div>

    <script>
        let outImage ="imagePreview";
        function preview_2(obj)
        {
            if (FileReader)
            {
                let reader = new FileReader();
                reader.readAsDataURL(obj.files[0]);
                reader.onload = function (e) {
                    const image = new Image();
                    image.src = e.target.result;
                    image.onload = function () {
                        document.getElementById(outImage).src=image.src;
                    };
                }
            }
            else
            {
                // Not supported
            }
        }
    </script>
</x-app-layout>
