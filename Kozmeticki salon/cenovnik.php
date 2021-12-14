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
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
      <br>
      <br>
        <table class="center" id="cenovnik">
            <tr><th><h7><p>Cenovnik i usluge</p></h7></th></tr>
<tr>
    <th>Usluga</th>
    <th>Cena</th>
    <th>Trajanje</th>
  </tr>
  <tr>
    <td>Higijenski tertman lica</td>
    <td>2000</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Hemijski tertman lica</td>
    <td>3900</td>
    <td>60</td>
  </tr>
  <tr>
    <td>Dijamantska mikrodermoabrazija</td>
    <td>2000</td>
    <td>45</td>
  </tr>
  <tr>
    <td>Radiotalasni lifting lica – nehiruški lifting</td>
    <td>3500</td>
    <td>70</td>
  </tr>
  <tr>
    <td>Anticelulit masaža</td>
    <td>1400</td>
    <td>60</td>
  </tr>
  <tr>
    <td>Relax masaža</td>
    <td>2000</td>
    <td>60</td>
  </tr>
  <tr>
    <td>Terapeutska masaža </td>
    <td>1800</td>
    <td>45</td>
  </tr>
  <tr>
    <td>Epilacija nausnica</td>
    <td>1000</td>
    <td>20</td>
  </tr>
  <tr>
    <td>Epilacija celih ruku</td>
    <td>4000</td>
    <td>40</td>
  </tr>
  <tr>
    <td>Epilacija celih nogu </td>
    <td>10000</td>
    <td>80</td>
  </tr>
</table>
<!-- primer primene jScripta-konvertovanje tabele cenovnik u niz -->
<script>
   var convertedIntoArray = [];
   $("table#cenovnik tr").each(function() {
      var rowDataArray = [];
      var actualData = $(this).find('td');
      if (actualData.length > 0) {
         actualData.each(function() {
            rowDataArray.push($(this).text());
         });
         convertedIntoArray.push(rowDataArray);
      }
   });
   console.log(convertedIntoArray);
   console.log(convertedIntoArray.length);
</script>


<div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><a class="text-white m-0" href="./zakazivanje.php"><h4> Zakažite Vaš termin na vreme!</h4></a>
                </body>
                <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright; Kristina 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    
</html>