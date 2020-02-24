<?php
   require_once("Koneksi.php");

   $username  = $_POST['username'];
   $Nama      = $_POST['Nama'];
   $Umur      = $_POST['Umur'];
   $Alamat    = $_POST['Alamat'];
   $password  = $_POST['password'];
   $password2 = $_POST['password2'];
   $sql       = "SELECT *from login where username = '$username'";
   $query     = $connect->query($sql);

  if($query->num_rows < 0) {
     header('location:Register_Gagal.php');
   } 

  else {
     if(!$username || !$Nama || !$Umur || !$Alamat || !$password || !$password2 ) {
       header('location:Register_Gagal.php');
     } 

  else {
       $data = "INSERT into login values (null, '$username', '$Nama', '$Umur', '$Alamat', '$password', '$password2')";
       $save = $connect->query($data);

       if($save) {
         header('location:Register_Sukses.php');
       } 

       else {
         header('location:Register_Gagal.php');
       }
     }
   }
?>