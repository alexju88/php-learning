<?php
$con = mysql_connect("localhost","wju","000000");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("wju", $con);

$sql="INSERT INTO we (name, love)
VALUES
('$_POST[name]','$_POST[love]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>
