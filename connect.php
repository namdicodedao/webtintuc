<?php
$server = 'us-cluster-east-01.k8s.cleardb.net';
$user = 'b8ffe5a62c35f1';
$pass = '2be9b6f5';
$database = 'heroku_b16802400ef12b1';

$conn = mysqli_connect($server, $user, $pass, $database);
if ($conn) {
    mysqLi_query($conn, "SET NAMES 'utf8' ");
} else {
    exit('Lỗi kết nối: ' . mysqli_connect_error());
}
