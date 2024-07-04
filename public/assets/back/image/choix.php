<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page Choix un image</title>
</head>
<body>
    <form action="codechoix.php" method="post" enctype="multipart/form-data">
        <label for="name" name="nom">Title Annonce :</label>
        <input type="text" name="ImgNom"><br> <br>
        <label for="name" name="nom">text Annonce :</label>
        <textarea name="textAnonce" id="" cols="30" rows="10"></textarea><br><br>
        <label for="image">Date D :</label>
        <input type="date" name="Date D" id="Date D">
        <label for="image">Date F :</label>
        <input type="date" name="Date F" id="Date F" ><br><br>
        <label for="image">image :</label>
        <input type="file" name="FileImage" accept=".jpg, .jpeg ,.png"><br> <br>
        <button tybe="submit" name="submit">Submit</button>



        <script>
            function check(){
                console.log(document.getElementById("Date D").innerText)
            }
        </script>
</body>
</html>