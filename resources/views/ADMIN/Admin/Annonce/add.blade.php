<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page Choix un image</title>
</head>
<body>
<form action="{{route('upload.image')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="name" name="nom">Name :</label>
    <input type="text" name="ImgNom"><br> <br>
    <label for="image">image :</label>
    <input type="file" name="FileImage" accept=".jpg, .jpeg ,.png"><br> <br>
    <button tybe="submit" name="submit">Submit</button>
</body>
</html>
