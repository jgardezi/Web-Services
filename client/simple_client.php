<?php

require_once '../nusoap/nusoap.php';

$client = new nusoap_client('http://localhost/testproject/webservices/simple_server.php?wsdl', true );

echo $client->call('echoo', array("This is client call and webservices and git is synchronized! Using github") );

/*
$echo = $_GET['input'];

print "<h2>Echo Web Service</h2>";
print "<form action='simple_client.php' method='GET'/>";
print "<input name='input' value='$echo'/><br/>";
print "<input type='Submit' name='submit' value='GO'/>";
print "</form>";

if($echo != ''){
	echo "Test Message<br >";
    $client = new SoapClient(null, array(
      'location' => "http://localhost/soap/simple_server.php",
      'uri'      => "urn://tyler/req"));

    $result = $client->__soapCall("echoo",array($echo));

    print $result;
}

*/