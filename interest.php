<?php
$interest=$_POST['si'];
$time=$_POST['time'];
$rate=$_POST['rate'];
 $simple_interest=($interest*$time*$rate)/100;
 echo( "Simle Interest is:".$simple_interest);

?>