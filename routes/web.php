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


Route::get('nn1',function()
{
    return view('keluarga');
});

Route::get('nn2',function()
{
    return view('teman');
});

Route::get('nn3',function()
{
    return view('jalan');
});

Route::get('nn4',function()
{
    return view('kota');
});

Route::get('nn5',function()
{
    return view('sekolah');
});


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

    Route::get('testmodel/',function(){
        $query = App\Post::all() ;
        return $query;
    });
    
    Route::get('testmodel2/',function(){
        $query = App\Post::find(1) ;
        return $query;
    });

    Route::get('testmodel3/',function(){
        $query = App\Post::where('title','like','%teman teman saya pada bucin%')->get();
        return $query;
    });
    Route::get('testmodel4/',function(){
        $post = App\Post::find(3);
        $post->title = "Tips mencari teman";
        $post->save();
        return $post;
    });

    Route::get('testmodel5/',function(){
        $post = App\Post::find(4);
        $post->delete();
    });
    
    Route::get('testmodel6/',function(){
        $post = new App\Post;
        $post->title = "7 amalam pembuka jodoh";
        $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
        $post->save();
        return $post;
    });

    Route::get('/penggajian', function() {
        $query = App\Penggajian::all();
        return $query;
        });

        Route::get('data-gaji-1', function() {
            $data = App\Penggajian::where('agama','=','islam')->get();
            return $data;
            });   
        
        Route::get('data-gaji-2', function() {
        $query = App\Penggajian::select('id','nama','agama')
        ->where('agama','=','kristen')->get();
        return $query;
        });
        
        Route::get('data-gaji/{id}', function($id) {
            $query = App\Penggajian::find($id);
            return $query;
            });
        
        Route::get('tambah-data-gaji',function(){
            $gaji = new App\Penggajian();
            $gaji->nama='Supratman';
            $gaji->jabatan='Sekretaris';
            $gaji->jenis_kelamin='laki-laki';
            $gaji->alamat='paris';
            $gaji->total_gaji=500000;
            $gaji->agama='Islam';
            $gaji->save();
            return $gaji;
        });
        
        Route::get('tambah-data',function(){
            $gaji =new App\Penggajian();
            $gaji->nama='Mila Cantik';
            $gaji->jabatan='sekertaris';
            $gaji->jenis_kelamin='Perempuan';
            $gaji->alamat='jln citerep';
            $gaji->total_gaji=600000;
            $gaji->agama='Islam';
            $gaji->save();
            return $gaji;
        });

        // controller
        Route::get('controller-1','Sekolahcontroller@hallo');
        Route::get('controller-2','Sekolahcontroller@dunia');
        Route::get('controller-3','Sekolahcontroller@kk');
        Route::get('controller-4','Sekolahcontroller@teman');
        Route::get('controller-5','Sekolahcontroller@alam');
        Route::get('controller-6/{warna?}','Sekolahcontroller@kucing');
        Route::get('controller-7/{jenis?}/{harga?}','Sekolahcontroller@pembelian');
        
        // controller BOOK
        Route::get('book','bookscontroller@index');
        Route::get('book-create/{jdl}','bookscontroller@create');
        Route::get('book-show/{id}','bookscontroller@show');
        Route::get('book-edit/{id}/{jdl}','bookscontroller@edit');
        Route::get('book-delete/{id}','bookscontroller@delete');
        Route::get('book-select','bookscontroller@select');
        Route::get('book-record','bookscontroller@record');

        //artikel RESORCE
        Route::get('artikel','CrudController@index');
        Route::get('artikel/create','CrudController@create');
        Route::POST('artikel/create','CrudController@store');
        Route::get('artikel/{id}','CrudController@show');
        Route::get('artikel/{id}/edit','CrudController@edit');
        Route::PUT('artikel/create','CrudController@update');
        Route::DELETE('artikel/{id}','CrudController@destroy');
        Route::resource('artikel','CrudController');

        // Passing Data
        Route::get('passing','PracticeController@pass');
        Route::get('passing1','PracticeController@pass1');
        Route::get('passing2','PracticeController@pass2');
        Route::get('passing3','BarangController@index');

        // BOOK ROUTE
        Route::resource('book','BookController');
        //BARANG ROUTE
        Route::resource('barang','BarangController');

        Route::get('about',function(){
             return view('about');
        });

        //
        Route::get('home',function(){
            return view('home');
        });
        Route::get('barang','LatihanController@barang');
            return view('barang');
        Route::get('buku','LatihanController@buku');
            return view('buku');


