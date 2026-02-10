<?php
	$host = "localhost";
    $user = "root";
    $pwd = "Natcha12345";
    $db = "4066db";
    $conn = mysqli_connect($host,$user,$pwd,$db) or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
    mysqli_query($conn,"SET NAMES utf8");
?>