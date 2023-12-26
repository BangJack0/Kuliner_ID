<?php
function tgl_ind($date)
{
    //array hari dan bulan
    $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jummat","Sabtu");
    $Bulan = array("Januari","Februari","Maret","April","Mei","Juni",
                   "Juli","Agustus","September","Oktober","November","Desember");
    // pemisahan tahun, bulan, hari, dan waktu
    $tahun = substr($date,0,4);
    $bulan = substr($date,5,2);
    $tgl = substr($date,8,2);
    $waktu = substr($date,11,5);
    $hari = date("w", strtotime($date));
    $result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ".$waktu." "."wib";
    return $result;
}
?>