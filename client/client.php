<?php
require_once '../nusoap/nusoap.php';


$client_pinefalls = new nusoap_client('http://localhost/testproject/webservices/server_pinefalls.php?wsdl', true );
$result_pinefalls = $client_pinefalls->call('vehicleLookup', array($make, $model, $year));
//echo $client_pinefalls->call('echoo', array("This is client call and webservices and git is synchronized! Using github") );

$client_selkirk = new nusoap_client('http://localhost/testproject/webservices/server_selkirk.php?wsdl', true );
$result_selkirk = $client_pinefalls->call('vehicleLookup', array($make, $model, $year));
//echo $client_selkirk->call('echoo', array("This is client call and webservices and git is synchronized! Using github") );

$client_steinbach = new nusoap_client('http://localhost/testproject/webservices/server_steinbach.php?wsdl', true );
$result_steinbach = $client_pinefalls->call('vehicleLookup', array($make, $model, $year));
//echo $client_steinbach->call('echoo', array("This is client call and webservices and git is synchronized! Using github") );

if ( $result_pinefalls != '' || $result_selkirk != '' || $result_steinbach != '' ){
	print "<table>";
	print "<tr><td><b>Make</b></td>
<td><b>Model</b></td>";
    print "<td><b>Year</b></td>";
    print "<td><b>Price</b></td><td>
			<b>Description</b></td></tr>";
    print $result_steinbach;
    print $result_pinefalls;
    print $result_selkirk;
    print "</table>";
}
