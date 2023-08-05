<x-guest-layout>
    <!-- component -->

    <main class="relative container mx-auto bg-white px-4">
        <div class="w-1/2 mx-auto">
            <div class="relative pt-[56.25%] overflow-hidden rounded">
                <img src="/storage/images/{{ $post->image }}" alt="" class="w-full h-full absolute inset-0 object-cover">
            </div>
        </div>

        <article class="max-w-prose mx-auto py-8">
            <h1 class="text-2xl font-bold"> {{ $post->title }}</h1>
            <h2 class="mt-2 text-sm text-gray-500">{{ $post->user->name }}, {{ $post->created_at->diffForHumans() }}</h2>

            <div class="mt-4">
                {{ $post->body }}
            </div>

            @include('comment', ['comments'=> $post->comments])
        </article>
    </main>
</x-guest-layout>
