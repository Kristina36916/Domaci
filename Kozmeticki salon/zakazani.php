<?php 
     include "konekcija.php";
    
 ?>
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kozmeticki salon</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/add.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Shine bright like a diamond</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active"  href="./index.php">Početna</a></li>
                        <li class="nav-item"><a class="nav-link" href="./onama.html">O nama</a></li>
                        <li class="nav-item"><a class="nav-link" href="./cenovnik.php">Cenovnik</a></li>
                        <li class="nav-item"><a class="nav-link" href="./zakazivanje.php">Zakazivanje</a></li>
                        <li class="nav-item"><a class="nav-link" href="./zakazani.php">Zakazani termini</a></li>
                        <li class="nav-item"><a class="nav-link" href="./kontakt.html">Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class=polje>
  <p> <h2><i><b>Kozmetički salon</b></i></h2>
        <h2>Zakazani pregledi</h2>   
</div>
<?php
//date funkcija, prikazuje vreme
$str_vreme= date("j/F/Y");
echo $str_vreme;
echo "<br>";
$str_vreme= date("H:i:s ");
echo $str_vreme;

?>      

<td>
<table class="table" id="zakazani"  border="1" cellpadding="5" cellspacing="2" style="text-align:center"> 
<thead><tr>
<th>Ime </th>
<th>Prezime</th>
<th>Telefon</th>
<th>Email</th>
<th>Datum</th>
<th>Kozmetičar</th>
<th>Usluga</th>
<th><i>Izmeni</i></th>
<th><i>Obriši</i></th>

</tr>
<?php 
// Prikaz svih zakazanih iz baze
 $upit="SELECT * FROM zakazani";
$rez=$link->query($upit);
if($rez->num_rows>0)
while ($row= mysqli_fetch_array($rez)) {?>
<tr>
<td><?php echo $row["imez"]; ?></td>
<td><?php echo $row["prezimez"]; ?></td>
<td><?php echo $row["telefonz"]; ?></td>
<td><?php echo $row["emailz"]; ?></td>
<td><?php echo $row["datum"]; ?></td>
<td><?php echo $row["kozmeticar"]; ?></td>
<td><?php echo $row["usluga"]; ?></td>

<td><button><a href="update.php?edit=<?php echo $row['id']; ?>">Izmeni</a></button></td>
<td><button ><a href="delete.php?delete=<?php echo $row['id']; ?>">Obriši</a></button></td>
<td><button ><a href="select.php?delete=<?php echo $row['id']; ?>">selektuj</a></button></td>
</tr>
<?php } ?>
</table>

<div class="polje">
<button type="submit" name="vidi" class="btn"><a href="./zakazivanje.php">Zakažite željenu uslugu</a></button>
            
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright; Kristina 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>