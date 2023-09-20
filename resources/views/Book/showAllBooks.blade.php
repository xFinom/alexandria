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
    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{$book->ISBN}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->edition}}</td>
            <td>{{$book->pages}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->publisher}}</td>
        </tr>
    @endforeach
</table>

</body>

</html>
