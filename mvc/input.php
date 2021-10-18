<?php
include("model.php");
session_start();
$model = new model();
if(isset($_POST['kirim']))
        {
            $keg=$_POST['kegiatan'];
            $tang=$_POST['tanggal'];
            $waktu=$_POST['jam'];
            if(strlen($tang)!=10 && strlen($waktu)!=5){
                $_SESSION['error']="cek kembali format tanggal dan waktu contoh 08-12-1988 dan 08:00";
            }
            else {$_SESSION['suc']="jadwal berhasil ditambahkan !";
            $model->setJadwal($_POST['kegiatan'],$_POST['tanggal'],$_POST['jam']);}
        } 
        header('location: index.php');
