<x-admin>
    <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
        Books for Rent
    </h2>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                >
                    <th class="px-4 py-3">ISBN</th>
                    <th class="px-4 py-3">Title</th>
                    <th class="px-4 py-3">User</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Actions</th>
                </tr>
                </thead>
                <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                >
                @foreach($copies as $copy)
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <a href="{{ route('book.show', $copy->id) }}"><p class="font-semibold">{{$copy->book->ISBN}}</p></a>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{$copy->book->title}}
                        </td>
                        <td class="px-4 py-3 text-xs">
                            {{$copy->book->author}}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{$copy->status}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin>
