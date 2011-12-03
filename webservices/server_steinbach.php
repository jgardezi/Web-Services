<?php
include '../nusoap/nusoap.php';

$server = new soap_server();

$server->configureWSDL('Search', 'urn:searchvehicle');

$server->register("vehicleLookup", 
					array('make' => 'xsd:string', 'model' => 'xsd:string', 'year' => 'xsd:string' ), 
					array('stEcho' => 'xsd:string'),
					'urn:searchvehicle',
					'urn:searchvehicle#vehicleLookup');
					
$server->service( isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '' );

function vehicleLookup( $make, $model, $year ) {
	return '<tr><td>'. $make. ' '. $model. ' '. $year . '</td></tr>';
}