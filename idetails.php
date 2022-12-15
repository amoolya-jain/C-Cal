<?php
$con=mysqli_connect("localhost","root","");
if(!$con){
    die("could not connect:".mysqli_connect_error());

}
mysqli_select_db($con,"ccal");
$Email=$_POST['mail'];
$age=$_POST['age'];
$feet=$_POST['feet'];
$inch=$_POST['inch'];
$weight=$_POST['weight'];
$bmi=$_POST['bmi'];
// $mail=$_SESSION['usermail'];
mysqli_query($con,"INSERT INTO customer_health_details VALUES('$Email','$age','$feet','$inch','$weight','$bmi')")
or
die(mysqli_connect_error());
// echo"succesfully inserted";
echo "<center><h3><script>alert('signed up successfully.')</script></h3></center>";
header("refresh:0;url=index.html");

// $query=mysqli_query($con,"SELECT * FROM customer_deatails");
// if(!$row=mysqli_fetch_array($query))
// echo"no records found";

//  else
// {
//     <table border=1 bgcolor="grey" cellspacing="2" width="30%"> <tr>
   
//     <td>$row['username']</td>
//     <td>$row['mail']</td>
//     <td>$row['phoneNo']</td>
//     <td>$row['password']</td>
//     </tr>
//     </table>
// }

mysqli_close($con);
?>