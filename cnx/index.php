<?php

	require "../config.php";


	if(isset($_GET['id'])){
		$id = $_GET['id'];


		$data = $conn->prepare("SELECT * FROM urls WHERE id=?");

		$data->execute([$id]);

		$donnes = $data->fetch(PDO::FETCH_OBJ);

		$clicks = $donnes->clicks + 1;

		$update = $conn->prepare("UPDATE urls SET clicks =:clicks WHERE id = :id ");

		

		$update->execute([':id'=> $id,
			':clicks' => $clicks]);

		header("Location:".$donnes->url);

	}

?>
