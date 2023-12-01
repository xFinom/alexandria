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
        <form action="{{ route('inventory.update', $copy) }}" method="POST">
            @method('PATCH')
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Book
                </span>
                <select
                    name="book_id" id="book_id" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                >
                    @foreach($books as $book)
                        <option value="{{$book->id}}">{{$book->title}}</option>
                    @endforeach
                </select>
            </label>
            <br>
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Price</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="number" id="price" name="price" placeholder="price" value={{old('price') ?? $copy->price}}>
            </label>
            <br>
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Stock</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="number" id="stock" name="stock" placeholder="number" value='{{old('stock') ?? $copy->stock}}'>
            </label>
            <br>

            <button class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit">Save</button>
        </form>
    </div>
</x-admin>
