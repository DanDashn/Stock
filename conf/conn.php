<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'prom_tovari');

$ks_handler = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if (!$ks_handler) {
    die('Не удается подключиться к базе данных!');
}

?>