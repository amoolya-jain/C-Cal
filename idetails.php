<?php
$con=mysqli_connect("localhost","root","");
if(!$con){
    die("could not connect:".mysqli_connect_error());

}
mysqli_select_db($con,"ccal");
$name=$_POST['name'];
$age=$_POST['age'];
$feet=$_POST['feet'];
$inch=$_POST['inch'];
$weight=$_POST['weight'];
$bmi=$_POST['bmi'];
mysqli_query($con,"INSERT INTO customer_health_details VALUES('$name','$age','$feet','$inch','$weight','$bmi')")
or
die(mysqli_connect_error());
echo"succesfully inserted";

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