<?php

$con = mysqli_connect('localhost','root','lpdip:17','EX_TODO');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"EX_TODO");

?>