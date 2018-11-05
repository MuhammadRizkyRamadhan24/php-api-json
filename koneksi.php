<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databasekk4";
$db = mysqli_connect($servername, $username, $password, $dbname);
if (!$db){
        die("Connection Failed:".mysqli_connect_error());
    }
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$db){
        die("Connection Failed:".mysqli_connect_error());
    }	
?>