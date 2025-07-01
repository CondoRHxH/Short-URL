<?php
// most secured config right now


function safe_log($message, $filePath = "logs/db_error.log") {
    $dir = dirname($filePath);
    if (!file_exists($dir)) {
        mkdir($dir, 0777, true);
    }
    file_put_contents($filePath, $message, FILE_APPEND);
}




	$host = "localhost";
	$username = "root";	
	$dbName = "url";
	$dbPassword = "";

	try{
		$conn = new PDO("mysql:host=$host;dbname=$dbName",$username,$dbPassword);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	}
	catch(PDOException $e) {
    safe_log($e->getMessage()."\n");
		die("Error While Connecting");
	}

?>