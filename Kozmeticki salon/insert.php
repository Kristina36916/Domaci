<?php 
include 'zakazivanje.php';
include 'konekcija.php';

if(isset($_POST['submit'])){

if(empty($_POST['ime'])|| empty($_POST['prezime'])||empty($_POST['telefon'])||empty($_POST['email'])||
empty($_POST['datum'])||empty($_POST['kozmeticar'])||empty($_POST['usluga'])){
    echo "Popunite prazna polja.";

}else{
$imez= $_POST['ime'];
$prezimez= $_POST['prezime'];
$telefonz= $_POST['telefon'];
$emailz= $_POST['email'];
$datum= $_POST['datum'];
$kozmeticar= $_POST['kozmeticar'];
$usluga= $_POST['usluga'];

$sql="INSERT INTO zakazani(id,imez,prezimez,telefonz,emailz,datum,kozmeticar,usluga) values ('','$ime','$prezime','$telefon','$email','$datum','$kozmeticar','$usluga')";
$run= mysqli_query($link,$sql);
if($run== true){
    echo "Uspesno zakazano!";
}else{
    echo "Greska!";
}}}
?>