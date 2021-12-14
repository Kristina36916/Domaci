<?php

if (!isset ($_GET["unos"])){
echo "Parametar Unos nije prosleđen!";
} else {
$pomocna=$_GET["unos"];
include "konekcija.php";
$sql="SELECT naziv FROM usluga WHERE naziv LIKE '$pomocna%'ORDER BY naziv ";
$rezultat =mysqli_query($link,$sql);
if ($rezultat->num_rows==0){
echo "U bazi ne postoji usluga koja počinje na " . $pomocna;
} else {
while($red = $rezultat->fetch_object()){
?>
<a href="#" onclick="place(this)"><?php  echo $red->naziv ;?></a>
<br/>
<?php
}
}
}
?>