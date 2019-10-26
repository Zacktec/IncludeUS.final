<?php
$ip = 'localhost';
$conn = mysqli_connect($ip,'root','','event' );

if (!$conn) {
    die ("connection failed: ".mysqli_connect_error());
   
} 