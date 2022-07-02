<?php
 $link =mysqli_connect("localhost","u428711066_zoomtv","Gajdif82@oqh");
    mysqli_select_db($link ,"u428711066_zoomtv");
   if($link->connect_error){
   	die("Connection failed :" . $link->connect_error);
   }
?>