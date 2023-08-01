<?php 


$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$course=$_POST['course'];
$message=$_POST['message'];
$sql="UPDATE inquiry SET firstname='$firstname',lastname='$lastname',email='$email',dob='$dob',course='$course',message='$message'
where id ='$id'";
include('connection.php');
$qry=mysqli_query($conn,$sql);
if($qry){
    header("Location: fetch.php");
    
}
else{
    echo"something wrong";
}


?>