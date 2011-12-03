<?php

include '../nusoap/nusoap.php';

$server = new soap_server();

$server->configureWSDL('Hello', 'urn:printtext');

$server->register("echoo", 
					array('st1' => 'xsd:string'), 
					array('stEcho' => 'xsd:string'),
					'urn:printtext',
					'urn:printtext#echoo');
					
$server->service( isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '' );

function echoo( $echo ) {
	if ( $echo != null )
		return "ECHO: " . $echo;
	else 
		return new soap_fault('Client', '', 'parameters empty');
}