<html>

<head>
<meta charset="UTF-8">
<title> Upis novog artikla </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>

	<div id="wrap">
	<div id="meni">
  <a href="index.php" class="meni">Početna</a>
  <a href="insert.php" class="meni">Dodavanje<a>
  <a href="remove.php" class="meni">Brisanje<a>
</div>
		<div id="search">

		<form action="#" method="POST">
		
			<label> Jedinica: <br>
		<input type="text" name="Jedinica"> </label><br>
			<label> Vrsta: <br>
		<input type="text" name="Vrsta"> </label><br>
			<label> Cijena: <br>
		<input type="text" name="Cijena"> </label><br>
		
		<input type="submit" name="insert" value="Insert"> <br>
		
		
		</form>
		
		</div>
		
		<div id="message">
		<?php
		
		if(isset($_POST['insert'])) {
			
		if(isset($_POST['Jedinica']) && isset($_POST['Vrsta']) && isset($_POST['Cijena'])) {
			
			if(!empty($_POST['Jedinica']) && !empty($_POST['Vrsta']) && !empty($_POST['Cijena'])) {
				
			$jedinica = trim($_POST['Jedinica']);
			$vrsta = trim($_POST['Vrsta']);
			$cijena = trim($_POST['Cijena']);	
			
			require('inc/connect.php');
			
			$jedinica = mysqli_real_escape_string($connection,$jedinica);
			$vrsta = mysqli_real_escape_string($connection,$vrsta);
			$cijena = mysqli_real_escape_string($connection,$cijena);
			
			$query = "INSERT INTO namirnice(Jedinica, Vrsta, Cijena ) VALUES ('{$jedinica}','{$vrsta}','{$cijena}')";
			
			if (mysqli_query($connection,$query) === TRUE){
				echo "New record succesfully created";
			} else {
				echo "Error!";
			}
				
			} else {
				
				echo "All fields must be filled in.";
				
			}
			
		}	else {
			
			echo "All parameters must be sent.";
			
		}
			
		}
		
		?>
		</div>
		
	</div>

</body>

</html>