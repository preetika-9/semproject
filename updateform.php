<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "xavierdb";
$conn = mysqli_connect ($servername, $username, $password);
mysqli_select_db($conn, "$dbname");
 if (isset ($_POST['update']))
{
    $id = $_POST['sid'];
    $fname = $_POST['First_name'];
    $sql = "Update tbl_students SET firstname = '$fname' WHERE id='$id' ";
    mysqli_query($conn, $sql);
    header ("location:listform.php");
}
?>