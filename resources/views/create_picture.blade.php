<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Picture</title>
</head>

<body>

    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="name"> <br>
        <input type="file" name="file" id="file"> <br>
        <button type="submit">Kirim</button>
    </form>

</body>

</html>