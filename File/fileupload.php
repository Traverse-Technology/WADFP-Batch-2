<?php
if (isset($_POST['upload'])){
    $file_tmp_name = $_FILES['file']["tmp_name"];
    $file_name = $_FILES['file']["name"];
    $file_type = $_FILES['file']["type"];
    echo $file_tmp_name;
    echo $file_type;
    $save_file = 'upload/'.time().$file_name;
    if ($file_type == "image/png" or $file_type == "image/jpeg"){
        move_uploaded_file($file_tmp_name,$save_file);
    }else{
        echo "<script>alert('Can only access PNG')</script>";
    }

}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<h1 class="text-center mt-3 mb-4">Choose File</h1>

<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <input name="file" class="form-control" type="file" id="formFile">
        </div>
        <button name="upload" class="btn btn-primary">Upload</button>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>