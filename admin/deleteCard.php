<?php include "include/connectivity.php";
$id=$_GET['id'];
$query="delete from card where id={$id}";
$exe=mysqli_query($conn,$query);
if($exe){
	echo "<script>alert('succesfully deleted');window.location='manageCard.php';</script>";
}
?>