<x-admin>
    <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-300"
    >
        Edit Book
    </h2>
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
    @endif
    <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
    >
            <form action="{{ route('book.update', $book) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">ISBN</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" id="ISBN" name="ISBN" placeholder="ISBN" value={{old('ISBN') ?? $book->ISBN}}>
                </label>
                <br>
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Title</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" id="title" name="title" placeholder="title" value='{{old('title') ?? $book->title}}'>
                </label>
                <br>
                <label class="block text-sm" for="author">
                    <span class="text-gray-700 dark:text-gray-400">Author</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" id="author" name="author" placeholder="author" value='{{old('author') ?? $book->author}}'>
                </label>
                <br>
                <label class="block text-sm" for="pages">
                    <span class="text-gray-700 dark:text-gray-400">Pages</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" id="pages" name="pages" placeholder="pages" value={{old('pages') ?? $book->pages}}>
                </label>
                <br>
                <label class="block text-sm" for="edition">
                    <span class="text-gray-700 dark:text-gray-400">Edition</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" id="edition" name="edition" placeholder="edition" value="{{old('edition') ?? $book->edition}}">
                </label>
                <br>
                <label class="block text-sm" for="publisher">
                    <span class="text-gray-700 dark:text-gray-400">Publisher</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" id="publisher" name="publisher" placeholder="publisher" value='{{old('publisher') ?? $book->publisher}}'>
                </label>
                <br>
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Author</span>
                    <input class=" block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" id="image" name="image" value='{{old('image')}}'>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                </label>
                <br>

                <button class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit">Save</button>
            </form>
        </div>
</x-admin>
