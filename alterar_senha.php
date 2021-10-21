<?php

	include('./servidor/webservice/lib/nusoap.php');


	$cliente = new nusoap_client('http://localhost/sistema-imobiliario/servidor/webservice/servidor.php?wsdl');


	$parametros = array('email'=> $_GET['email']);


	$resultado = $cliente->call('alterarSenha', $parametros);

	echo ($resultado);

?>
