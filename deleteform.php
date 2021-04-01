<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "xavierdb";
$conn = mysqli_connect ($servername, $username, $password);
mysqli_select_db($conn, "$dbname");
if (isset ($_POST ["Submit"]))
{
    $id = $_GET['id'];
    $sqli_query ($conn , $sql)
}
?>