<?php
$con=mysqli_connect("localhost","root","");
if(!$con){
    die("could not connect:".mysqli_connect_error());
}
mysqli_select_db($con,"ccal");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $usermail = $_POST['mail'];
    $password = $_POST['password'];

    $sql = "select * from customer_details where email='$usermail' AND password='$password' ";
    $result = mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        echo "<center><h3><script>alert('Logged In successfully.')</script></h3></center>";
        // header("location: index.html");
        header("refresh:0;url=index.html");
    }
    else{
        echo "<center><h3><script>alert('Incorrect mail id or password.')</script></h3></center>";
    header("refresh:0;url=login.html");
    }
}
?>

