<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("task",$con);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
?>
