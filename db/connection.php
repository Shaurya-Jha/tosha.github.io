<?php

$servername = "localhost";
$user = "root";
$password = "";
$db = "tosha";

$conn = mysqli_connect($servername, $user, $password, $db);

if(!$conn){
    die("Connection failed");
}
else{
    echo"<script>
    alert('Connection successfull');
    </script>";
}

?>