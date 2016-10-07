<?php
$link = mysqli_connect("localhost" , "root" , "","student");

mysqli_select_db($link, "student") or die(mysqli_error($link));
?>