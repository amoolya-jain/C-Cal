<?php


$con=mysqli_connect("localhost","root","");
if(!$con){
    die("could not connect:".mysqli_connect_error());
}
mysqli_select_db($con,"ccal");
$username=$_POST['username'];

$emailId=$_POST['mail'];
session_start();
$_SESSION['usermail']=$emailId;
$phone=$_POST['phoneNo'];
$pass=$_POST['password'];
$res=mysqli_query($con,"SELECT  * from customer_details where email='$emailId'");
$row=mysqli_num_rows($res);   
if($row==1){
    echo "<center><h3><script>alert('Mail id already exsit.Please sign up with other mail id.')</script></h3></center>";
    // header("refresh:0;url=signup.html");
    header("refresh:0;url=signup.html");
//  echo 'email already exsit';
}
else
{

$result=mysqli_query($con,"INSERT INTO customer_details VALUES(NULL,'$username','$emailId','$phone','$pass')")
or

die(mysqli_connect_error());


header('Location: idetails.html');
mysqli_close($con);
}
?>