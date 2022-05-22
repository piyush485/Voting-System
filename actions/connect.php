<?php
    $servername = "localhost";
    $uname = "root";
    $pswd = "";
    $db = "votingsystem";
    $con = mysqli_connect($servername, $uname, $pswd, $db);

    if(!$con){
        die(mysql_error($con));
    }
?>