<x-admin>
    <h4
        class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
    >
        Register Book
    </h4>
    @if ($errors->any())
        <div
            class="min-w-0 p-4 text-white bg-purple-600 rounded-lg shadow-xs"
        >
            <h4 class="mb-4 font-semibold">
                Error
            </h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br>
    @endif
    <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
    >
        <form action="{{ route('book.store') }}" method="POST">
            @csrf
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">ISBN</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" id="ISBN" name="ISBN" placeholder="ISBN" value={{old('ISBN')}}>
            </label>
            <br>
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Title</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" id="title" name="title" placeholder="title" value='{{old('ISBN')}}'>
            </label>
            <br>
            <label class="block text-sm" for="author">
                <span class="text-gray-700 dark:text-gray-400">Author</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" id="author" name="author" placeholder="author" value='{{old('ISBN')}}'>
            </label>
            <br>
            <label class="block text-sm" for="pages">
                <span class="text-gray-700 dark:text-gray-400">Pages</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" id="pages" name="pages" placeholder="pages" value={{old('ISBN')}}>
            </label>
            <br>
            <label class="block text-sm" for="edition">
                <span class="text-gray-700 dark:text-gray-400">Edition</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" id="edition" name="edition" placeholder="edition" value="{{old('ISBN')}}">
            </label>
            <br>
            <label class="block text-sm" for="publisher">
                <span class="text-gray-700 dark:text-gray-400">Publisher</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" id="publisher" name="publisher" placeholder="publisher" value='{{old('ISBN')}}'>
            </label>
            <br>

            <button class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit">Save</button>
        </form>
    </div>
</x-admin>

