<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
</head>

<body>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('book.update', $book) }}" method="POST">
    @method('PATCH')
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <label for="ISBN">IBSN:</label>
    <input type="text" id="ISBN" name="ISBN" value={{old('ISBN') ?? $book->ISBN}}>
    <br>
    <br>
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value='{{old('ISBN') ?? $book->title}}'>
    <br>
    <br>
    <label for="author">Author:</label>
    <input type="text" id="author" name="author" value='{{old('ISBN') ?? $book->author}}'>
    <br>
    <br>
    <label for="pages">Pages:</label>
    <input type="text" id="pages" name="pages" value={{old('ISBN') ?? $book->pages}}>
    <br>
    <br>
    <label for="edition">Edition:</label>
    <input type="text" id="edition" name="edition" value="{{old('ISBN') ?? $book->edition}}">
    <br>
    <br>
    <label for="publisher">Publisher</label>
    <input type="text" id="publisher" name="publisher" value='{{old('ISBN') ?? $book->publisher}}'>
    <br>
    <br>
    <button type="submit">Save</button>
</form>

</body>

</html>
