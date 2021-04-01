<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "xavierdb";
$conn = mysqli_connect ($servername, $username, $password);
mysqli_select_db($conn, "$dbname");
$result = mysqli_query ($conn, $sql);


?>

<table border = '1px';>
    <tr>
        <th> First Name </th>
        <th> colspan = "2"> Action </th>

    </tr>
    <tr>
        <td> <? php echo $row ['Firstname'];?> </td>
        <td> <a href = "editform.php?id=<?php echo $row['id'];?>">Edit </td>
        <td> <a href = "deleteform.php?id=<?php echo $row['id'];?>">Delete </td>
        <td> 
     </tr>
     <? php } ?>

</table>
