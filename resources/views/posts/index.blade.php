<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Posts') }}</h2>
    </x-slot>

    {{-- Body Section --}}

    <!----- ============ Blog Section Start -->
    <section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
        <div class="container">
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
                        <h2
                            class="font-bold
                                text-3xl
                                sm:text-4xl
                                md:text-[40px]
                                text-dark
                                mb-4

                            "
                        >Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
                @foreach($posts as $post)
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                        <div class="max-2-[370px] mx-auto mb-10">
                            <div class="rounded overflow-hidden mb-8">
                                <img src="/storage/images/{{ $post->image }}" alt="image" class="w-full"/>
                            </div>
                        </div>
                        <span class="bg-blue-600 rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                            Dec 22, 2023
                        </span>
                        <h3><a href="{{ route('post.show', $post->slug) }}"
                            class="
                                font-semibold
                                text-xl
                                sm:text-xl
                                lg:text-xl
                                xl:text-2xl
                                mb-4
                                inline-block
                                text-dark
                                hover:text-primary
                            "
                            >{{ $post->title }}</a> </h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>
