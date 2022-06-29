<html>
<head>
  <meta charset="UTF-8">
 <title>Početna</title>
 <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div id="wrap">
<div id="meni">
  <a href="index.php" class="meni">Početna</a>
  <a href="insert.php" class="meni">Dodavanje<a>
  <a href="remove.php" class="meni">Brisanje<a>
</div>
<div id="result">
  <p>Unesite naziv artikla koji želite pretražiti u bazi podataka: </p>
  <form action="#" method="GET">
		<input type="text" placeholder="Search database" name="criteria">
		<input type="submit" value="Search"> <br>
		</form>

<?php
    include("inc/getResults.php");

?>
</div>
</div>
</body>
</html>

