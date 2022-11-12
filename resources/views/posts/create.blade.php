<x-app-layout>
    <div class="container lg:w-1/2 md:w-4/5 w-11/12 mx-auto mt-8 px-8 bg-white shadow-md">

        <h2 class="text-center text-lg font-bold pt-6 tracking-widest">新規作成</h2>

        <x-validation-errors :errors="$errors" />

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data"
            class="rounded pt-3 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="category">
                    部位
                </label>
                <select name="category_id" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-pink-600 w-full py-2 px-3" required>
                    <option disabled selected value="">選択してください</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if($category->id == old('category_id')) selected @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="event">
                    種目
                </label>
                <input type="text" name="event"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    required placeholder="種目" value="{{ old('event') }}">
            </div>

            {{-- <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="weight">
                    重量
                </label>
                <input type="number" name="weight"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    required placeholder="重量" value="{{ old('weight') }}">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="reps">
                    レップ
                </label>
                <input type="number" name="reps"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    required placeholder="レップ" value="{{ old('reps') }}">
            </div> --}}

            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="memo">
                    セット・重量・レップ
                </label>
                <textarea name="memo" rows="10"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    required>{{ old('memo') }}</textarea>
                    {{-- class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    placeholder="メモ" value="{{ old('memo', $post->memo) }}"> --}}
            </div>

            {{-- <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="memo">
                    メモ
                </label>
                <input type="text" name="memo"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    placeholder="メモ" value="{{ old('memo') }}">
            </div> --}}

            {{-- <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="event">
                    種目
                </label>
                <input type="text" name="event"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    required placeholder="種目" value="{{ old('event') }}">
            </div>

            <p class="font-bold font-sans break-normal text-gray-900 pt-6 pb-1 text-3xl md:text-4xl">
                {{ $post->category->weight }}&emsp;{{ $post->category->reps }}&emsp;{{ $post->category->memo }}</p> --}}

            <input type="submit" value="登録"
                class="w-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </form>
    </div>
</x-app-layout>
