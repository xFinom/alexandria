<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
</head>

<body>

<table>
    <tr>
        <th>ISBN</th>
        <th>Title</th>
        <th>Edition</th>
        <th>Pages</th>
        <th>Author</th>
        <th>Publisher</th>
        <th>Actions</th>
    </tr>
    <tr>
        <td>{{$book->ISBN}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->edition}}</td>
        <td>{{$book->pages}}</td>
        <td>{{$book->author}}</td>
        <td>{{$book->publisher}}</td>
        <td>
            <a href="{{ route('book.edit', $book->id) }}">
                <button>Edit</button>
            </a>
            <div>
                <form action="{{route('book.destroy', $book->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </td>
    </tr>
</table>

</body>

</html>
