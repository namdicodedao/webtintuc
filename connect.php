<?php
$server = 'lmag6s0zwmcswp5w.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$user = 'cpwl2jxjzqbpy7h9';
$pass = 'wud9bjhkyjvi0kpk ';
$database = 'k32zmwr9mjdnbp3k';
$port = '3306';

$conn = mysqli_connect($server, $user, $pass, $database,$port);
if ($conn) {
    mysqLi_query($conn, "SET NAMES 'utf8' ");
} else {
    exit('Lỗi kết nối: ' . mysqli_connect_error());
}
