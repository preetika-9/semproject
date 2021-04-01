<?php
    if($_POST)
    {
        $num = $_POST['num'];
        $reverse = strrev($num);
        if($num == $reverse){
            echo "The number $num is Palindrome";
        }else{
            echo"The number $num is not a Palindrome";
        }
    }
?>