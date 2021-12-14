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

    <div >
        <h2>Izmena termina</h2>    
    </div>
    
    <?php
include ('konekcija.php');
if(isset($_GET['edit'])){

    $id=$_GET['edit'];
   
    $result=$link->query("SELECT * FROM zakazani WHERE id=$id") ;
  
      $row=$result->fetch_array();
      $ime=$row['imez'];
      $prezime=$row["prezimez"];
      $telefon=$row["telefonz"];
      $email=$row["emailz"];
      $datum=$row["datum"];
      $kozmeticar=$row["kozmeticar"];
      $usluga=$row["usluga"];
   
  }  ?><div>
    <form  method="POST" id="update" class="formaIzmena">
    <input type="hidden" id="hidden" value="<?php echo $id;?>">
        <div class="polje">
            <label for="imeU">Ime</label>
            <input type="text" name="imeU" id="imeU" value="<?php echo $ime;?>">
        </div><br>
        <div class="polje">
            <label for="prezimeU">Prezime</label>
            <input type="text" name="prezimeU" id="prezimeU" value="<?php echo $prezime;?>">
        </div><br>
        <div class="polje">
            <label for="telefonU">Broj telefona</label>
            <input type="text" name="telefonU" id="telefonU" value="<?php echo $telefon;?>">
        </div><br>
        <div class="polje">
            <label for="emailU">Email</label>
            <input type="text" name="emailU" id="emailU" value="<?php echo $email;?>">
        </div><br>
        <div class="polje">
            <label for="datumU">Datum</label>
            <input type="date" name="datumU" id="datumU" value="<?php echo $datum;?>">
        </div><br>
        <div class="polje">
<label for="kozmeticarU">Izaberi kozmetičara</label>
<select name="kozmeticarU" id="kozmeticarU"  >
   <option ></option>
   <?php 
   // izbor kozmeticara iz tabele kozmeticari u bazi kozmeticki salon
   
  $q=mysqli_query($link, "SELECT * FROM kozmeticari");
  while($rows =mysqli_fetch_array($q)){
   $ime1=$rows['ime'];
    $prezime1=$rows['prezime'];

    echo"<option>$ime1 $prezime1</option>";}?>
</select>
</div><br>

<div class="polje">
<label for="uslugaU">Usluga</label>
<select name="uslugaU" id="uslugaU">
   <option ></option>

   <?php 
   $q1=mysqli_query($link, "SELECT * FROM usluga");
  while($rows =mysqli_fetch_array($q1)){
   $naziv1=$rows['naziv'];
    echo"<option>$naziv1</option>"; }
?>
</select>
</div></div><br>
<input type="hidden" value="<?php echo $id;?>" id="id">
        <div class="polje">
        <input type="submit" class="dugme2" name="submit" value="Izmeni" id="update">
          
            <button type="submit" name="vidi" class="dugme3"><a href="zakazani.php">Vidi zakazane</a></button>
            
        </div>
    </form>
    
<?php 

  include ('konekcija.php');

  // Update, uzima podatke iz polja za  izmenu
  $imeU=filter_input(INPUT_POST,'imeU'); 
  $prezimeU=filter_input(INPUT_POST,'prezimeU'); 
  $telefonU=filter_input(INPUT_POST,'telefonU'); 
  $emailU=filter_input(INPUT_POST,'emailU'); 
  $datumU=filter_input(INPUT_POST,'datumU'); 
  $kozmeticarU=filter_input(INPUT_POST,'kozmeticarU'); 
  $uslugaU=filter_input(INPUT_POST,'uslugaU'); 
  
  
  $query=mysqli_query($link, "UPDATE zakazani SET imez='$imeU', prezimez='$prezimeU', telefonz='$telefonU',
  emailz='$emailU', datum='$datumU', kozmeticar='$kozmeticarU', usluga='$uslugaU' WHERE id='$id'");
   

  ?>
</body>
</html>