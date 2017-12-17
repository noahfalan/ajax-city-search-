<?php
$q = intval($_GET['q']);

$dbc = mysqli_connect('localhost','14415','14415','ajax4');
if (!$dbc) {
    die('Could not connect: ' . mysqli_error($dbc));
}

mysqli_select_db($dbc,"ajax4");
$sql = "SELECT * FROM city WHERE Name LIKE '" . $_GET['q'] . "' ORDER BY Name ";
$result = mysqli_query($dbc, $sql);
echo "<table>
<tr>
<th>Name</th>
<th>CountryCode</th>
<th>District</th>
<th>Population</th>
</tr>";
while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['CountryCode'] . "</td>";
   echo "<td>" . $row['District'] . "</td>";
   echo "<td>" . $row['Population'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($dbc);
?>
