<?php
$photo = scandir('bmw/');
/*var_dump($photo)*/;
//
/*if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }

    if($file_size > 2097152) {
        $errors[]='File size must be excately 2 MB';
    }

    if(empty($errors)==true) {
        move_uploaded_file($file_tmp,"bmw/".$file_name);
        echo "Success";
    }else{
        print_r($errors);
    }
}*/
$uploads_dir = 'bmw/';
$uploadfile = $uploads_dir . basename($_FILES['userfile']['name']);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл загружен";}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="javascript.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<button id="btn_modal_window">Open Modal</button>
<div id="my_modal" class="modal">
    <div class="modal_content">
        <span class="close_modal_window">×</span>
         <p>Модальное окно!</p>

    </div>
</div>
<?php
foreach ($photo as $value) {

    echo "<a href='bmw/$value'> <img src='bmw/$value' style='width: 400px'></a>" ;
}

?>
<form enctype="multipart/form-data"  method="POST">
    <!--<input type = "file" name = "image" />-->
    <input name="userfile" type="file" />
    <input type="submit" value="Отправить файл" />
</form>

</body>
</html>