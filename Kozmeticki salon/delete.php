<?php 
include 'konekcija.php';
if (isset($_GET['delete'])){
    $id=$_GET['delete'];
    $del=mysqli_query($link,"DELETE FROM zakazani WHERE id=$id") or die($mysqli->error());
}
 header("location: zakazani.php");
?>