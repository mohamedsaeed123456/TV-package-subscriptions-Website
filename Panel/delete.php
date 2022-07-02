<?php ob_start();
include 'connection.php';
if(isset($_GET['Del'])){ 
$id=$_GET['Del'];
$query="delete from add_share where id='".$id."'"; 
$result=mysqli_query($link,$query);
if($result){ 
header("Location: update_share.php");
}

}

ob_end_flush();
?>