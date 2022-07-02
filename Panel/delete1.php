<?php ob_start();
include 'connection.php';
if(isset($_GET['DEL'])){ 
$id=$_GET['DEL'];
$query="delete from title_share where id='".$id."'"; 
$result=mysqli_query($link,$query);
if($result){ 
header("Location: update_title.php");
}

}

ob_end_flush();
?>