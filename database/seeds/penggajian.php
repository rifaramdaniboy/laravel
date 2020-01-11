<?php

use Illuminate\Database\Seeder;

class penggajian extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
           ['nama'=>'Rifa Ramdani','jabatan'=>'Bos','jenis_kelamin'=>'laki-laki',
           'alamat'=>'jln moch toha','agama'=>'Islam','total_gaji'=>20000],
           ['nama'=>'Asep Saepuloh','jabatan'=>'Karyawan','jenis_kelamin'=>'laki-laki',
           'alamat'=>'surabaya','agama'=>'Ateis','total_gaji'=>20000],
           ['nama'=>'Abdul Somad','jabatan'=>'sekertaris','jenis_kelamin'=>'laki-laki',
           'alamat'=>'jakarta','agama'=>'Islam','total_gaji'=>30000],
           ['nama'=>'ewok','jabatan'=>'tukag dagang','jenis_kelamin'=>'laki-laki',
           'alamat'=>'sumatra','agama'=>'kristen','total_gaji'=>6999],
           ['nama'=>'candra','jabatan'=>'tukang baso','jenis_kelamin'=>'laki-laki',
           'alamat'=>'cibiuk','agama'=>'Islam','total_gaji'=>89647]
        ];
        DB::table('penggajians')->insert($data);
    }
}
