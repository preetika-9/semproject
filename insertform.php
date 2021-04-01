<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "xavierdb";
$conn = mysqli_connect ($servername, $username, $password);
mysqli_select_db($conn, "$dbname");
if (isset ($_POST ["Submit"]))
{
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $city_name = $_POST['Cname'];
    $email = $_POST['Email'];
    $gender = $_POST['Gender'];
    $country = $_POST['Country'];
   // print_r($_POST); // check garne ho 

  $sql = "INSERT INTO tbl_students (fristname, lastname, email, gender, country) values ('$first_name','$last_name','$email','$gender','$country')";


   
 //die();
  mysqli_query ($conn, $sql);
   echo"Record added successfully";


}
?>
