<?php

function OpenCon()
{
    // $dbhost = "localhost";
    // $dbuser = "root";
    // $dbpass = "";
    // $db = "deimos";

    $dbhost = "localhost";
    $dbuser = "u151991570_root";
    $dbpass = "hHixftdsG9^";
    $db = "u151991570_sudvezi";

    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

    return $conn;
}

function CloseCon($conn)
{
    $conn -> close();
}

?>