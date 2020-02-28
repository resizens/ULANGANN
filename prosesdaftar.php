<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $query = $db->prepare("SELECT * FROM user WHERE username = ?");
   $query->execute(array($username));
   if($query->rowCount() != 0) {
     echo "<div align='center'>Username sudah terdaftar <a href='daftar.php'>Back</a></div>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Data masih kosong <a href='daftar.php'>Back</a>";
     } else {
       $sql = $db->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
       $simpan = $sql->execute(array($username, $pass));
       if($simpan) {
         echo "<div align='center'>Pendaftaran sukses, Silahkan <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>