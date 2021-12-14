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
        <div class= "container">
        <div class="naslov">
        <h2><i><b>Kozmetički salon</b></i></h2>
    </div>
</header>
    <div >
        <h2>Zakazivanje termina</h2>    
    </div>
    <form action="insert.php" method="POST" class="formaUnos">
        <div class="polje">
            <label>Ime</label>
            <input type="text" name="ime" id="ime" placeholder="Unesite ime">
        </div><br>
        <div class="polje">
            <label>Prezime</label>
            <input type="text" name="prezime" id="prezime" placeholder="Unesite prezime">
        </div><br>
        <div class="polje">
            <label>Broj telefona</label>
            <input type="text" name="telefon" id="telefon" placeholder="Unesite telefon">
        </div><br>
        <div class="polje">
            <label>Email</label>
            <input type="text" name="email" id="email" placeholder="Unesite email">
        </div><br>
        <div class="polje">
            <label>Datum</label>
            <input type="date" name="datum" id="datum" >
        </div><br>
        <div class="polje">
<label>Izaberi kozmetičara</label>
<select name="kozmeticar" id="kozmeticar" >
   <option ></option>
   <?php 
   // izbor kozmetičara iz tabele kozmeticar u bazi kozmeticki salon
  
  $q=mysqli_query($link, "SELECT * FROM kozmeticari");
  while($rows =mysqli_fetch_array($q)){
   $ime1=$rows['ime'];
    $prezime1=$rows['prezime'];

    echo"<option >$ime1 $prezime1</option>";}?>
</select>
</div><br>

<div class="polje">
<label>Usluga</label>
<select name="usluga" id="usluga" >
   <option ></option>

   <?php 
   $q1=mysqli_query($link, "SELECT * FROM usluga");
  while($rows =mysqli_fetch_array($q1)){
   $naziv1=$rows['naziv'];
    echo"<option >$naziv1</option>"; }
?>
</select>
</div><br>

<div class="polje">
            <button type="submit" name="submit" class="btn">Potvrdi</button>
            <button type="submit" name="vidi" class="btn"><a href="zakazani.php">Vidi zakazane</a></button>
            
        </div>
    </form>

</div><br>
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