<?php
require("connect.php");

if(isset($_GET['criteria'])){
    if(!empty($_GET['criteria'])){

        $criteria = trim($_GET['criteria']);
        $criteria = mysqli_real_escape_string($connection, $criteria);
        $query =  "SELECT * FROM namirnice WHERE Jedinica LIKE '%{$criteria}%' OR Vrsta LIKE '%{$criteria}%'";

        $result=mysqli_query($connection, $query);



    if (mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)){
            ?>
            <div id="result>">
            <p>Jedinica: <?php echo $row['Jedinica'] ."<br>" .  " Vrsta proizvoda: " . $row['Vrsta'] . "<br> Cijena: " .  $row['Cijena'] . " KM";?><a href='/inc/removeEntry.php?id=<?php echo $row['id'] ?>' id="pretraga"> Izbriši </a></p><hr>
            </div>
            <?php 
        }

        echo "Broj rezultata pretrage: " . mysqli_num_rows($result);


    } else {
        echo "No results";
    }

}else {
		
    echo "Input
     is empty";
    
}


}

?>