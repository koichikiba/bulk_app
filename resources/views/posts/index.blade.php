<x-app-layout>
    <div class="container max-w-7xl mx-auto px-4 md:px-12 pb-3 mt-3">

        <x-flash-message :message="session('notice')" />

        <div class="w-full flex-row text-center my-4">
            <a href="{{ route('posts.create') }}"
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">トレーニングする</a>

            <div class="flex-wrap -mx-1 lg:-mx-4 mb-4">
                @foreach ($posts as $post)
                    {{-- flex取ると中央寄せ --}}
                    <article class="flex w-full px-4 text-xl text-gray-800 leading-normal">
                        <a href="{{ route('posts.show', $post) }}">
                            <p class="font-bold font-sans break-normal text-gray-900 pt-6 pb-1 text-3xl md:text-4xl">
                                {{ \Carbon\Carbon::parse($post->created_at)->format('Y/m/d') }}&emsp;{{ $post->category->name }}</p>
                        </a>
                    </article>
                @endforeach
            </div>

            {{ $posts->links() }}
            <br>
            <form method="POST" action="{{ route('logout') }}"
                class="bg-white hover:bg-gray-700 text-red-600 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                @csrf
                <href="route('logout')"
                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                    {{ __('Log Out') }}
            </form>
            {{-- class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"> --}}
        </div>
</x-app-layout>
