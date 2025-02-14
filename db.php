<?php
include "index.html";
$initials=parse_ini_file(".ht.access.ini");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try{
    $yhteys=mysqli_connect($initials["databaseserver"], $initials["username"], $initials["password"], $initials["database"]);
}
catch(Exception $e){
    print "Virhe";
    exit;
}


?>