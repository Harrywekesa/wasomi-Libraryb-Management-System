<?php
include('dbcon.php');
$id=$_GET['id'];
mysqli_query($link, "delete from member where member_id='$id'") or die(mysql_error());
header('location:member.php');
?>