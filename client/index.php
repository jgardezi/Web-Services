<?php

require 'header.php';

$make = $_GET['make'];
$model = $_GET['model'];
$year = $_GET['year'];

if ( $_GET['submit'] === 'GO' && ($make != '' || $model != '' || $year != '') ) {
	print "<h3>Search Results:</h3>";
	require 'client/client.php';
}

print "<h3>Search for vehicles based on year, make or model:</h3>";
print "<table>";
print "<form action='index.php' method='GET'>";
print "<tr><td>Make:</td><td>";
print "<input name='make' value='$make'/></td></tr>";
print "<tr><td>Model:</td><td>";
print "<input name='model' value='$model'/></td></tr>";
print "<tr><td>Year:</td>";
print "<td><input name='year' value='$year'/></td></tr>";
print "<tr><td><input type='submit' name='submit' value='GO'/>";
print "</td></tr>";
print "</form>";
print "</table>";

require 'footer.php';