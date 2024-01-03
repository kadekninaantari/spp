<?php

$server ='localhost';
$user ='root';
$passw ='';
$db ='dbspp';

$koneksi=mysqli_connect($server,$user,$passw,$db); // Koneksi Secara Prosuderal
$mysqli= new mysqli($server,$user,$passw,$db);
$mysqli->select_db($db);
$mysqli->query("SET NAMES 'utf8'");
$database=$db;

if($koneksi){
   // echo "koneksi Sukses";
} else {
    echo "koneksi Gagal";
    echo "<br>".mysqli_connect_error();
}