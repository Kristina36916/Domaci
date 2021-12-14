<?php 
include 'konekcija.php';

$sql = "SELECT * FROM usluga";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>naziv</th>";
                echo "<th>trajanje</th>";
                echo "<th>cena</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['naziv'] . "</td>";
                echo "<td>" . $row['trajanje'] . "</td>";
                echo "<td>" . $row['cena'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "Ne postoji rezultat trazenog upita";
    }
} else{
    echo "Greska: Upit ne moze da se izvrsi $sql. " . mysqli_error($link);
}


?>