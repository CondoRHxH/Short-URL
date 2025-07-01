<?php
	
	require "config.php";

	if(isset($_POST['submit'])){
		if($_POST['url'] == ''){
			echo "3mr 3mr 3ad clicker";
		} else {
			$url = $_POST['url'];

			$insert = prepare("INSERT INTO urls (url) VALUES (:url)");

			$insert->execute([':url' => $url]);
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
	<title>TodoList</title>
</head>
<body>
	
		<div class="container">
			<form method="POST" action="insert.php">

				<div class="row g-3 align-items-center mt-4 mb-5">
				  <div class="col-auto">
				    <label for="inputPassword6" class="col-form-label">Enter a task</label>
				  </div>
				  <div class="col-2">
				    <input type="text" name="url" id="inputPassword6" class="form-control">
				  </div>
				  <div class="col-2">
				    <input type="submit" name="submit" class="btn btn-danger" value="Submit">
				  </div>
				</div>


				
		</form>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">Numbers</th>
      <th scope="col">Tasks</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<tr>
  	 <td scope="col">Numbers</td>
     <td scope="col">Tasks</td>
     <td scope="col">Action</td>
     </tr>
  </tbody>
</table>
</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>