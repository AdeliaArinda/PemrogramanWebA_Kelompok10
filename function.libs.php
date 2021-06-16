<?php

function tanggal($tgl){

    $bulan = array('','','Jan','Feb','Mar','Apr','Jun','Jul','Agu','Sep','Okt','Nov','Des');

    //2021-06-02
    //012345678
    $tg = substr($tgl,8,2);
    $bl = substr($tgl,5,2);
    $th = substr($tgl,0,4);

    return $tg.' '.$bulan[(int)$bl].' '.$th;

}