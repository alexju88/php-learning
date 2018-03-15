<?php
$con = mysql_connect("localhost","wju","000000");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("wju", $con);

$result = mysql_query("SELECT * FROM we");

while($row = mysql_fetch_array($result))
  {
  echo $row['name'] . " " . $row['love'];
  echo "<br />";
  }

mysql_close($con);
?>
