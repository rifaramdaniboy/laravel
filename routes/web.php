<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route Basic
Route::get('about',function() {
    return '<h1>Hallo</h1>'
    .'selamat datang di webapp saya <br>'
    .'laravel, emang keren.';

});
// Route basic
Route::get('profil',function()
{
    return view('biodata');
});


// Route::get('nn1',function()
// {
//     return view('keluarga');
// });

// Route::get('nn2',function()
// {
//     return view('teman');
// });

// Route::get('nn3',function()
// {
//     return view('jalan');
// });

// Route::get('nn4',function()
// {
//     return view('kota');
// });

// Route::get('nn5',function()
// {
//     return view('sekolah');
// });


Route::get('pesan/{makan}/{minum}/{harga}',function($mkn,$teh,$harga){
return 'Makanan Yang Saya Pesan Adalah = '.$mkn.'<br>'
.'Minuman yang saya pesan Adalah = '.$teh .'<br>'
.'harga nya adalah = '.$harga;
});


//route optional parameter
Route::get('Hallo/{nama?}',function($nama='Rifa Ramdani'){
    return 'Hallo Nama Saya adalah ' . $nama;
});

Route::get('pesanan/{makan?}/{kopi?}/{harga?}',function($mkn=null,$kp=null,$hrg=null){
    if (isset($mkn)) {
        echo 'anda memesan makanan : '.$mkn.'<br>';
    }
    if (isset($kp)) {
        echo 'dan : '. $kp.'<br>';
    }
    if (isset($hrg)) {
        echo 'dengan harga : '.$hrg;
    }
    if ($mkn == null && $kp == null && $hrg == null) {
        echo 'Anda belum memesan makan ';
    }
});