<?php
        require_once '../conf/conn.php';

//var_dump($_POST);

$name = $_POST['newotdelname'];

var_dump($_POST);

mysqli_query($ks_handler,"INSERT INTO `otdel` (id, `name`)
VALUES(NULL, '$name')");

header('Location: ../index.php');

?>  