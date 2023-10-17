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
        <th>ID</th>
        <th>Book</th>
        <th>Available</th>
        <th>Actions</th>
    </tr>
    @foreach($copies as $copy)
        <tr>
            <td> <a href="{{ route('copy.show', $copy->id) }}">{{$copy->id}}</a></td>
            <td>{{$copy->book->title}}</td>
            <td>{{$copy->available == 1 ? 'Available' : 'Not Available'}}</td>
            <td>
                <a href="{{ route('copy.edit', $copy->id) }}">
                    <button>Edit</button>
                </a>
                <div>
                    <form action="{{route('copy.destroy', $copy->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
</table>

</body>

</html>
