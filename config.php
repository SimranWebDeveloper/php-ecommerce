<?php 
    $host="localhost";
    $username="root";
    $pass="";
    $database="coursedb";

    $baglanti=mysqli_connect($host,$username,$pass,$database);

    if (mysqli_connect_errno()>0) {
        die("xeta: ".mysqli_connect_error());
    }

    echo "baglanti tamma";

    mysqli_close($baglanti);

    echo "baglanti kapatildi";

?>