<?php 
    $host="localhost";
    $username="root";
    $pass="";
    $database="coursedb";

    // Alternative PDO
    // MSQLi (object-orineted, procedual)
    $baglanti=mysqli_connect($host,$username,$pass,$database);

    if (mysqli_connect_errno()>0) {
        die("xeta: ".mysqli_connect_error());
    }

?>