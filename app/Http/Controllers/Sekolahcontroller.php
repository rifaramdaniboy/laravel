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
        if ($jenis == null && $harga == null) {
            return "Silahkan masukan item terlebih dahulu";
        }else {
            return "anda memesan : " . $jenis;
        }

    }
}
