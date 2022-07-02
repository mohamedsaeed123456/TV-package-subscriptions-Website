<?php
ob_start();
include 'connection.php';

 if(isset($_POST['submit'])){
 	 $id=$_GET['ID'];
     $name=$_POST['name'];
     $mobile=$_POST['mobile'];
		  $name1=$_POST['name1'];
     $serial=$_POST['serial'];
		 $start=$_POST['start'];
		 $finish=$_POST['finish'];
      
    
     $query="UPDATE add_device set name='".$name."' , mobile='".$mobile."' , name1 ='".$name1."', serial='".$serial."' ,start='".$start."' ,finish='".$finish."' where id='".$id."' ";
     $result=mysqli_query($link,$query);
     if($result){
     	   
         echo "<script>alert('تم تحديث بيانات ضمان الجهاز بنجاح');
         location.href='display_device.php';
         </script>";
     }
    
 }

    
 ob_end_flush();
?>