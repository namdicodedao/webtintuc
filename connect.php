<?php
$server = 'm7wltxurw8d2n21q.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$user = 'd78co66csqefqxnq';
$pass = 'mj350gtj90n70zmb';
$database = 'rhpmjug5tcbd919';

$conn = mysqli_connect($server, $user, $pass, $database);
if ($conn) {
    mysqLi_query($conn, "SET NAMES 'utf8' ");
} else {
    exit('Lỗi kết nối: ' . mysqli_connect_error());
}
