<?php
$server = 'host.docker.internal';
$user = 'root';
$pass = '123456';
$database = 'webtintuc';

$conn = mysqli_connect($server, $user, $pass, $database);
if ($conn) {
    mysqLi_query($conn, "SET NAMES 'utf8' ");
} else {
    exit('Lỗi kết nối: ' . mysqli_connect_error());
}
