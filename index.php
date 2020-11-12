<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dog party</title>
</head>
<body>
    <form action="index.php" method="post" name="Test">
        <input class="enterCommand" name="enterCommand" type="text" placeholder="Введите команду">
    </form>
</body>
</html>
<?php use application\Controllers\DogController;

if(!empty($_POST['enterCommand'])){
    require 'application/Controllers/DogController.php';

    $dog = new DogController();
    echo $_POST['enterCommand']. "<br>";
    echo $var = $dog->indexAction();
}else{
    echo "Введите команду";
}
