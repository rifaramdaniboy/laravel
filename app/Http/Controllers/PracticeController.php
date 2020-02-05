<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
        $a = "Aku Cinta Bandung Dan Orang Di Dalamnya";
        return view('latihan', compact('a'));
    }

    public function pass1()
    {
        $data = [
            ['nama' => 'Ucup', 'kelas' => 'RPL 1'],
            ['nama' => 'Asep Buraong', 'kelas' => 'RPL 2'],
            ['nama' => 'Ujang', 'kelas' => 'RPL 3'],
        ];
        return view('latihan1', ['siswa' => $data]);
    }

    public function pass2()
    {
        $data = [
            ['nama' => 'Rifa', 'nip' => '053895','agama' => 'islam','jk' => 'laki-laki',
            'jabatan' => 'manager','jam_kerja' => '250'],
            ['nama' => 'Abdul', 'nip' => '48550','agama' => 'kristen','jk' => 'laki-laki',
            'jabatan' => 'sekertaris','jam_kerja' => '200'],
            ['nama' => 'sueb', 'nip' => '053895','agama' => 'islam','jk' => 'laki-laki',
            'jabatan' => 'staff','jam_kerja' => '140'], 
        ];
        return view('latihansoal', ['pegawai' => $data]);
    }
}