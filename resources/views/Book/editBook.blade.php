<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
</head>

<body>

<form action="/book" method="post">
    @csrf

    <label for="ISBN">IBSN:</label>
    <input type="text" id="ISBN" name="ISBN" value={{$book->ISBN}}>
    <br>
    <br>
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value='{{$book->title}}'>
    <br>
    <br>
    <label for="author">Author:</label>
    <input type="text" id="author" name="author" value='{{$book->author}}'>
    <br>
    <br>
    <label for="pages">Pages:</label>
    <input type="text" id="pages" name="pages" value={{$book->pages}}>
    <br>
    <br>
    <label for="edition">Edition:</label>
    <input type="text" id="edition" name="edition" value={{$book->edition}}>
    <br>
    <br>
    <label for="publisher">Publisher</label>
    <input type="text" id="publisher" name="publisher" value='{{$book->publisher}}'>
    <br>
    <br>
    <button type="submit">Save</button>
</form>

</body>

</html>
