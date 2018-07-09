<?php
//call library
require_once('nusoap.php');
$URL       = "www.wirecard.com.tr/ReceiveOrderResult";
$namespace = 'http://cservices.mikro-odeme.com.tr/mapping/generated/';
//using soap_server to create server object
$server    = new soap_server;
$server->configureWSDL('Wirecard', $namespace);
//register a function that works on server
$server->wsdl->addComplexType('input','complexType','struct','all','',
array( 
	'OrderObjectId' => array('name' => 'OrderObjectId','type' => 'xsd:string'),
	'GSM'=> array ('name' => 'GSM','type' => 'xsd:string'),
	'MPAY' => array ('name' =>'MPAY','type' => 'xsd:string'),
	'SMSContent' => array ('name' => 'SMSContent', 'type' => 'xsd:string'),
	'TotalPrice' => array ('name' => 'TotalPrice', 'type' => 'xsd:double'),
	'TotalUnitPrice' => array ('name' => 'TotalUnitPrice', 'type' => 'xsd:double'),
	'State' => array('name'=> 'State', 'type'=> 'xsd:int'),
	'StatusCode' => array('name'=> 'StatusCode', 'type'=> 'xsd:int'),
	'ErrorCode' => array('name'=> 'ErrorCode', 'type'=> 'xsd:string'),
	'ErrorMessage' => array('name'=> 'ErrorMessage', 'type'=> 'xsd:string'),
	'PaymentDateTime' => array('name'=> 'PaymentDateTime', 'type'=> 'xsd:dateTime'),
	'GsmOperator' => array('name'=> 'GsmOperator', 'type'=> 'xsd:int'),
	'GsmType' => array('name'=> 'GsmType', 'type'=> 'xsd:int'),
	'SubscriberId' => array('name'=> 'SubscriberId', 'type'=> 'xsd:string'),
	
		'Products' => array('name' => 'Products'
		
			'CScaleProduct' => array('name' => 'CScaleProduct', 
			'ProductId' => array ('name' => 'ProductId','type' => 'xsd:int'),
			'ProductCategory' => array ('name' => 'ProductCategory','type' => 'xsd:int'),
			'ProductDescription' => array ('name' => 'ProductDescription','type' => 'xsd:string'),
			'BasePrice' => array ('name' => 'BasePrice','type' => 'xsd:double'),
			'BaseUnitPrice' => array ('name' => 'BaseUnitPrice','type' => 'xsd:double'),
			'Unit' => array ('name' => 'Unit','type' => 'xsd:int'),
			
		),
	),
	'OrderChannelId' => array('name' => 'OrderChannelId', 'type' => 'xsd:int'),
	'PaymentTypeId' => array ('name' => 'PaymentTypeId', 'type' => 'xsd:int'),
	'PaymentCategoryId' => array ('name' => 'PaymentCategoryId','type' => 'xsd:int'), 
	'Pin' => array('name' => 'Pin','type' => 'xsd:string'), 
	
	
);
$server->wsdl->addComplexType('Response','complexType','struct','all','',
array(
	'ReceiveOrderResultResult' => array('name' => 'ReceiveOrderResultResult', 'type' => 'xsd:string'), 
	
	);
	
	$server->register('ReceiveOrderResult',
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
