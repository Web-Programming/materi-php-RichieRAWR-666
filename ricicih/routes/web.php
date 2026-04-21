<?php

use Illuminate\Support\Facades\Route;


// route ke halaman utama (home)
Route::get('/', function () {
    echo "hello, nama saya rici";
    //return view('welcome');
});

route::get('/alamat', function () {
    echo "jalan rajawali 32 palembang";
});

Route::get("/path1/path2/path3", function () {
    echo 'RT 23 RW 44';
    echo 'alang-alang lebar';
    echo 'provinsi Sumatera Selatan';
});

Route::get('/user1/{name}', function ($name) {
    echo 'User Name'. $name;
});

Route::get('/user2/{name?}', function ($name = 'tamu') {
    echo 'User Name'. $name;
});

Route::get('/user3/{id}/{name?}', function ($id, $name ) {
    echo 'User ID : ' . $id;
    echo '<br>';
    echo 'User Name'. $name;
});

Route::get('/simpan', function () {
    echo 'data berhasil disimpan';
});

Route::get('/update/{id}', function ($id) {
    echo 'data berhasil diperbarui dgn id' . $id;
});

Route::get('/update2/', function ($id) {
    echo 'data berhasil di perbarui dengan id'. $id;
});

Route::get('/hapus/{id}', function ($id) {
    echo 'data berhasil dihapus dgn id'. $id;
});

Route::get('?test-method/', function (){
    return view ('test_method');
});





