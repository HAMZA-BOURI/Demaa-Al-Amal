<?php
if (isset($_POST['submit'])) {
require 'connction.php';
    $name = $_POST['ImgNom'];
    echo $name;
    $file = $_FILES['FileImage'];
    if ($file['error'] == 4) {
        echo"<script>alert('image does Not Exist');</script>";
    }else{
        $filename = $file["name"];
        $filesize = $file["size"];
        $tmpName = $file["tmp_name"];
        $validImagE =['jpg','jpeg','png'];
        //Extendion
        $imgExtendion=explode('.',$filename);
        $imgExtendion = strtolower(end($imgExtendion));
        if (!in_array($imgExtendion,$validImagE)){
            echo "<script>alert('Invalid Image Extendion');</script>";
        }else if ($filesize>10000000){
            echo "<script>alert('Image Size Is Too Large');</script>";
        }
        else{
            $newImageName = uniqid();
            $newImageName = "$name." .$imgExtendion;
            move_uploaded_file($tmpName,"img/". $newImageName);
            $query = "insert into image (ID_img,nameImg,imagelink) values (1,'$name','$newImageName')";
            mysqli_query($conn,$query);
            echo"<script>alert('Successfully Added');
            //document.location.href = 'afficher image.php';
            </script>";
        }
        
    }

}
else{
header("location:choix.php");
}
?>