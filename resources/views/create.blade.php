<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
    <form action="{{ route('store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="number" name="score" placeholder="Score">
        <button type="submit">Add</button>
    </form>
</body>
</html>