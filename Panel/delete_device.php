<?php ob_start();
include 'connection.php';
if(isset($_GET['Del'])){ 
$id=$_GET['Del'];
$query="delete from add_device where id='".$id."'"; 
$result=mysqli_query($link,$query);
if($result){ 
header("Location: display_device.php");
}

}

ob_end_flush();
?>