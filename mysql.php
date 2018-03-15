<?php
$con = mysql_connect("localhost","wju","000000");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("wju", $con);

$result = mysql_query("SELECT * FROM we");

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Love</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['love'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>
