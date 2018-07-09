<?php
//call library
require_once('nusoap.php');
$URL       = "www.wirecard.com.tr/SubscriptionDeactivation";
$namespace = 'http://cservices.mikro-odeme.com.tr/mapping/generated/';
//using soap_server to create server object
$server    = new soap_server;
$server->configureWSDL('Wirecard', $namespace);
//register a function that works on server
$server->wsdl->addComplexType('input','complexType','struct','all','',
array( 
	'SubscriptionId' => array('name' => 'SubscriptionId','type' => 'xsd:string'),
	'GSMOperator'=> array ('name' => 'GSMOperator','type' => 'xsd:int'),
	'GSM' => array ('name' =>'GSMOperator','type' => 'xsd:string'),
	'CreateDate' => array ('name' => 'CreateDate', 'type' => 'xsd:dateTime'),
	'EndDate' => array ('name' => 'EndDate', 'type' => 'xsd:dateTime'),
	'ProductId' => array ('name' => 'ProductId', 'type' => 'xsd:int'),
	'Price' => array('name'=> 'Price', 'type'=> 'xsd:string')
	)
);
$server->wsdl->addComplexType('Response','complexType','struct','all','',
array(
	'SubscriptionDeactivationResult'=> array('name' => 'SubscriptionDeactivationResult','type'=>'xsd:string')
	)
	);
	
	$server->register('SubscriptionDeactivation',
	array('input'=> 'tns:input'),
	array('Response' => 'tns:Response')
	);
	
	
	function SubscriptionDeactivation($input)
	{
		return $Response;
	}
	
	 @$server->service(file_get_contents("php://input")); 
	 
	 exit();
?>	 ''
