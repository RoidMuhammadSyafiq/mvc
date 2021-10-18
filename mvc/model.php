<?php

include ('konek.php');

class model
{
    private $kegiatan;
    private $tanggal;
    private $jam;
    public $hasil = [];

    public function __construct($kegiatan = null, $tanggal = null, $jam = null)
    {
        $this->kegiatan = $kegiatan;
        $this->namaProgram = $tanggal;
        $this->jam = $jam;
    }

    public function setJadwal($kegiatan, $tanggal, $jam)
    {
        global $mysqli;
        $this->kegiatan = $kegiatan;
        $this->tanggal = $tanggal;
        $this->jam = $jam;
        mysqli_query($mysqli,"INSERT INTO jadwal VALUES ('$kegiatan', '$tanggal', '$jam')");
    }


    public function getJadwal()
    {
        global $mysqli;
        $rs = $mysqli->query("SELECT * FROM jadwal");

        foreach($rs as $row){
            array_push($this->hasil, $row);
        }

        return $this->hasil;
    }
}