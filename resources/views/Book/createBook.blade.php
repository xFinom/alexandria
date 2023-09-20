<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Libro</title>
</head>

<body>

    <form action="/book" method="post">
        @csrf
        <label for="ISBN">IBSN:</label>
        <input type="text" id="ISBN" name="ISBN">
        <br>
        <br>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
        <br>
        <br>
        <label for="author">Author:</label>
        <input type="text" id="author" name="author">
        <br>
        <br>
        <label for="pages">Pages:</label>
        <input type="text" id="pages" name="pages">
        <br>
        <br>
        <label for="edition">Edition:</label>
        <input type="text" id="edition" name="edition">
        <br>
        <br>
        <label for="publisher">Publisher</label>
        <input type="text" id="publisher" name="publisher">
        <br>
        <br>
        <button type="submit">Save</button>
    </form>

</body>

</html>
