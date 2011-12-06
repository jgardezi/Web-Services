<?php
require_once '../nusoap/nusoap.php';

$client_pinefalls = new nusoap_client('http://localhost/testproject/webservices/server_pinefalls.php?wsdl', true );
//echo $client_pinefalls->call('echoo', array("This is client call and webservices and git is synchronized! Using github") );

$client_selkirk = new nusoap_client('http://localhost/testproject/webservices/server_selkirk.php?wsdl', true );
//echo $client_selkirk->call('echoo', array("This is client call and webservices and git is synchronized! Using github") );

$client_steinbach = new nusoap_client('http://localhost/testproject/webservices/server_steinbach.php?wsdl', true );
//echo $client_steinbach->call('echoo', array("This is client call and webservices and git is synchronized! Using github") );