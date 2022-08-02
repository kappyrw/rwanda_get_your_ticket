<?php 

$server = "localhost:3306";
$user = "tiquetrw";
$pass = "Preciousbestie1!";
$database = "tiquetrw";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>