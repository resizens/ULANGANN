<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "latihan";
   $db = new PDO('mysql:dbname='.$dbname.';host='.$hostname, $username, $password);
?>