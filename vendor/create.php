<?php
        require_once '../conf/conn.php';

//var_dump($_POST);

$name = $_POST['name'];
$img = $_POST['img'];
$edizm = $_POST['edizm'];
$kolichestvo = $_POST['kolichestvo'];
$cena = $_POST['cena'];
$otdel = $_POST['otdel'];

var_dump($_POST);

mysqli_query($ks_handler,"INSERT INTO `xoz_tovari` (id, `name`, `img`,`edizm`, `kolichestvo`, `cena`, `otdel_id`)
VALUES(NULL, '$name', '$img','$edizm', '$kolichestvo', '$cena', '$otdel')");

header('Location: ../index.php');

?>  