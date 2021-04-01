<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "xavierdb";
$conn = mysqli_connect ($servername, $username, $password);
mysqli_select_db($conn, "$dbname");
$sid = $_GET['id'];
$sql = "SELECT * FROM tbl_students where id='sid' ";
$result = mysqli_query ($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<!doctype html>
<html>
    <body> 
        <h3> Edit Students </h3>
        <div style="text-align: center">
        <form method = "post" action = "updateform.php">
            <input type = "hidden" name="sid" values = "<?php echo $sid;?>" > First name:<br>
            <input type = "text" name="first_name" values ="<?php echo $row ['firstname']; ?>" >
            <input type = "Submit"  name ="update" values = "update">
</form>
</div>
 
    </body>
    </html>