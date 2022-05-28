<?php
        require_once '../conf/conn.php';

        $id = $_GET['id'];
        mysqli_query($ks_handler, "DELETE FROM `otdel` WHERE `otdel`.`id` = '$id'");
        //var_dump($_GET);
        header('Location: ../index.php');
?>