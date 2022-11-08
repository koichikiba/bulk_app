<x-app-layout>
    <div class="container lg:w-1/2 md:w-4/5 w-11/12 mx-auto mt-8 px-8 bg-white shadow-md">

        <h2 class="text-center text-lg font-bold pt-6 tracking-widest">新規作成</h2>

        <x-validation-errors :errors="$errors" />

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data"
            class="rounded pt-3 pb-8 mb-4">
            @csrf
            {{-- <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="category">
                    部位
                </label>
                @foreach ($categories as $category)
                    <div>
                        <input type="radio" name="category_id" id="category{{ $category->id }}"
                            value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'checked' : '' }}>
                        <label for="category{{ $category->id }}">{{ $category->name }}</label>
                    </div>
                @endforeach
            </div> --}}
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

            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="menu">
                    メニュー
                </label>
                <textarea name="menu" rows="10"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    required>{{ old('menu') }}</textarea>
            </div>
            <input type="submit" value="登録"
                class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </form>
    </div>
</x-app-layout>
