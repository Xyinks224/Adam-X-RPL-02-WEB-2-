<?php
   session_start();
   require_once("Koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['password'];   
   $sql = "SELECT *from login where username = '$username'";
   $query = $connect->query($sql);
   $hasil = $query->fetch_assoc();
   

   if($query->num_rows == 0) {
     header('location: Login_Gagal.php');
   } 

   else {
     $_SESSION['username'] = $hasil['username'];
     header('location:Login_Sukses.php');
   }
?>