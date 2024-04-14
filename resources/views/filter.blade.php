<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter</title>
</head>
<body>
    
<table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->score }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>