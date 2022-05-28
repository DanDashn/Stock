<?php
        require_once '../conf/conn.php';
        $id = $_POST['id'];
        $name = $_POST['name'];
        $img = $_POST['img'];
        $edizm = $_POST['edizm'];
        $kolichestvo = $_POST['kolichestvo'];
        $cena = $_POST['cena'];
        $otdel = $_POST['upotdel'];
        //var_dump($_POST);
        if (!$ks_handler) {
                die('Не удается подключиться к базе данных!');
            }
            $sql = "UPDATE `xoz_tovari` SET `name` = '$name', `img` = '$img', `edizm` = '$edizm', `kolichestvo` = '$kolichestvo', `cena` = '$cena', `otdel_id` = '$otdel' WHERE `xoz_tovari`.`id` = '$id'";
        mysqli_query($ks_handler, $sql);
        //header('Location: ../index_adm.php');
        header('Location: ../index.php');
        if(!mysqli_query($ks_handler, $sql)){ 
        echo "Ошибка изменения журнала: ".mysqli_error($ks_handler);
        }
?>