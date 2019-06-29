<?php
	require_once("./src/autoload.php");
	//require_once("./vendor/autoload.php");
	$respuesta_json = "{}";
	$cookie = array(
		'cookie' 		=> array(
			'use' 		=> true,
			'file' 		=> __DIR__ . "/cookie.txt"
		)
	);
	$config = array(
		'representantes_legales' 	=> true,
		'cantidad_trabajadores' 	=> true,
		'establecimientos' 			=> true,
		'cookie' 					=> $cookie
	);
	$sunat = new \Sunat\ruc( $config );
	$numeroDocumento = false;

	if (isset($_GET['numeroDocumento'])) {
		$numeroDocumento= $_GET['numeroDocumento'];
	}else{
		$numeroDocumento = "";
	}

	$search1 = $sunat->consulta( $numeroDocumento );
	echo $search1->json( NULL, true ); // pretty format
?>
