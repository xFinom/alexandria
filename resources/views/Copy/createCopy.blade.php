<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Libro</title>
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

<form action="{{route('copy.store')}}" method="post">
    @csrf
    <label for="book_id">Book:</label>
    <select name="book_id">
        @foreach($books as $book)
            <option value="{{$book->id}}">{{$book->title}}</option>
        @endforeach
    </select>
    <br>
    <br>
    <button type="submit">Save</button>
</form>

</body>

</html>
