 <?php
include 'connection.php';
$id=$_GET['ID'];
$result1 = mysqli_query($link,"Select * from add_share inner join mobile where add_share.id='$id'");
while($row = mysqli_fetch_array($result1)){
if($result1){
echo "<script>alert('تم الطلب بنجاح جاري تحويلك تواصل معنا لاستلام الاشتراك');
location.href='https://wa.me/".$row['mobile']."?text=مرحبا بك انا عميل من موقع Zoom TV اريد الاشتراك في هذا الطلب تفاصيل الطلب       :  عنوان الاشتراك  :           ".$row['title1']."  وصف الاشتراك    :  ".$row['description']." سعر الاشتراك  :".$row['price']." '   </script>";
}
}
?>
               
