<?php
// conectarea la baza de date
// $serverName este numele serverului ce contine baza de date
// "Gestiune Laptopuri Robolap" este numele bazei de date
// este inclus la inceputul fiecuri php acolo unde este nevoie
    $serverName = "DESKTOP-VUJ092R\SQLEXPRESS";
    $connectionInfo = array( "Database"=>"Gestiune Laptopuri Robolap");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn ) {
        //echo "Connection established.<br />";  //necesara la inceput
   } else{
        echo "Connection could not be established.<br />";
        die( print_r( sqlsrv_errors(), true));
   }
?>