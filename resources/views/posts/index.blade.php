<x-app-layout>
    <div class="container max-w-7xl mx-auto px-4 md:px-12 pb-3 mt-3">

        <x-flash-message :message="session('notice')" />
        
        <div class="flex flex-wrap -mx-1 lg:-mx-4 mb-4">
            @foreach ($posts as $post)
                <article class="w-full px-4 md:w-1/2 text-xl text-gray-800 leading-normal">
                    <a href="{{ route('posts.show', $post) }}">
                        <p class="font-bold font-sans break-normal text-gray-900 pt-6 pb-1 text-3xl md:text-4xl">
                            {{ $post->created_at }}</p>
                        <p class="font-bold font-sans break-normal text-gray-900 pt-6 pb-1 text-3xl md:text-4xl">
                        {{ $post->category->name }}</p>
                    </a>
                </article>
            @endforeach
        </div>
        {{ $posts->links() }}
    </div>
</x-app-layout>
