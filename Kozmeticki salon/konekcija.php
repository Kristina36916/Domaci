<?php
$mysql_server = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_db = "kozmeticki salon";

// povezivanje sa bazom "kozmeticki salon"

$link = mysqli_connect($mysql_server, $mysql_user, $mysql_password, $mysql_db);
if ($link === false) {
    printf("Konekcija sa bazom nije uspostavljena: %s\n", $mysql_connect_error());
    exit();
}
$link->set_charset("utf8");
?>
