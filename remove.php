<html>

<head>
<meta charset="UTF-8">
<title> Brisanje </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>

	<div id="wrap">
	<div id="meni">
  <a href="index.php" class="meni">Početna</a>
  <a href="insert.php" class="meni">Dodavanje<a>
  <a href="remove.php" class="meni">Brisanje<a>
</div>
<hr class="underline">
		
		<?php
		
		require('inc/connect.php');
		$query = "SELECT * FROM namirnice";
		$result = mysqli_query($connection,$query);
		
		if(mysqli_num_rows($result) > 0) {
			
			while($row = mysqli_fetch_assoc($result)) {
				?>
	

<div class="result">
				<p class="item"><b>Jedinica: </b> <?php echo $row['Jedinica'] . " " . $row['Vrsta']; ?></p>
				<a href="inc/removeEntry.php?id=<?php echo $row['id'] ?>" id="link"> Izbriši </a>
				<p class="item"><b>Cijena: </b> <?php echo $row['Cijena']; ?> <br></p>
			</div>				

				<?php
			}
			
		} else {
			echo "Nema podataka";
		}
		
		?>
		
		
	</div>

</body>

</html>