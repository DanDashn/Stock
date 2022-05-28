<?php
        require_once '../conf/conn.php';

        $id = $_GET['id'];
        var_dump($_GET);
        mysqli_query($ks_handler, "DELETE FROM `prom_tovari`.`xoz_tovari` WHERE (`id` = '$id')");
        header('Location: ../index.php');

?>
