<?php

	require "../config.php";

	if(isset($_GET['id'])){
		$id = $_GET['id'];

		$data = $conn->prepare("SELECT * FROM urls WHERE id=?");

		$data->execute([$id]);

		$donnes = $data->fetch(PDO::FETCH_OBJ);

		header("Location:".$donnes->url);
	}

?>