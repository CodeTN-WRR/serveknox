<?php
	
	$servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "serveknox";
    $dbport = 3306;


	try {
		$db = new PDO("mysql:host=".$servername."; dbname=".$database."; port=".$dbport, $username, $password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->exec("SET NAMES 'utf8'");
	} catch (Exception $e) {
		echo "<h1 style='text-align: center; color: red; text-decoration: underline'>";
		echo "Failed Connection.";
		echo "</h1>";
		echo "<div style='margin: auto; max-width: 40%; border: 2px solid black; background-color: #b30000; color: white; border-radius: 5px'>";
		echo "</div>";
		die();
	}
	
	try {
		$results = $db->query("SELECT * FROM event ORDER BY eventdate DESC;");
		$events = $results->fetchAll(PDO::FETCH_ASSOC);
		
	} catch (Exception $e) {
		echo "<h1 style='text-align: center; color: red; text-decoration: underline'>";
		echo "Failed Query.";
		echo "</h1>";
		echo "<div style='margin: auto; max-width: 40%; border: 2px solid black; background-color: #b30000; color: white; border-radius: 5px'>";
		echo "</div>";
		die();
	}

?>