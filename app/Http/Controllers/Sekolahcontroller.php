<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sekolahcontroller extends Controller
{
    public function hallo()
    {
        return 'Hallo selamat datang di laravel';
    }

    public function dunia()
    {
        return 'dunia hari ini sedang tergoncang';
    }
    public function kk()
    {
        return 'saya berkelurga sangat bahagia';
    }
    public function teman()
    {
        return 'teman teman saya pada bucin';
    }
    public function alam()
    {
        return 'bahwa alam sangat indah';
    }
    public function kucing($warna=null)
    {
       if (!$warna) {
        return "warna belum di pilih";
       }else {
           return "warna kucing kamu : " . $warna;
       }
    }

    public function pembelian($jenis=null,$harga=null)
    {  
        if (isset($jenis)) {
            echo "Anda Beli : " . $jenis;
        }if (Isset($harga)) {
        if ($harga >= 15000) {
            echo "dengan ukuran JUMBO";
        }elseif ($harga < 15000 && $harga >= 7500) {
            echo "dengan ukuran MEDIUM";
        }elseif ($harga <= 7500) {
            echo "dengan ukuran SMALL";
        }else {
            echo "maaf yang anda masukan salah";
        }
        }    
        if ($jenis == null && $harga == null) {
            echo "Silahkan masukan item terlebih dahulu";
        }
    }
}
