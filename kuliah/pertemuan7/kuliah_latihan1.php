<?php
//   $nama = "Azka"

//   function cetak nama() {
//       $nama = "Azka"
//       return "Halo $nama";
//   }

//   echo $nama;



//    $nama = "Azka";

//     function cetakNama($nama) {
//         return "Halo $nama";
//     }

//    echo cetakNama($nama );






// SUPERGLOBALS
// VARIABEL PHP yang bisa kita pakai dimanapun
// Bentuknya adalah Array Associative
// $_GET
// $_POST
// $REQUEST
// $SERVER
// var_dump($_SERVER["SERVER_NAME"]);
// $_GET = [
//     "nama" => "Shandika"
// ];
$_GET["nama"] = "Shandika";
$_GET["email"] = "shandika@gmail.com";
// echo $_GET["nama"];
var_dump($_GET);
  ?>