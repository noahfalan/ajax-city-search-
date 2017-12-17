<?php
$q = intval($_GET['q']);

$dbc = mysqli_connect('localhost','14415','14415','ajax4');
if (!$dbc) {
    die('Could not connect: ' . mysqli_error($dbc));
}

mysqli_select_db($dbc,"ajax4");
$sql = "SELECT Name FROM city WHERE Name LIKE '%" . $_GET['q'] . "%' ";
$result = mysqli_query($dbc, $sql);


echo "<table>
<tr>
<th>Name</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td onclick=\"infouser('". $row['Name'] . "')\">". $row['Name'] . "</td> ";
    echo "</tr>";
}
echo "</table>";
mysqli_close($dbc);
?>
