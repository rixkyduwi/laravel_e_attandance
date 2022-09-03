<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/data_admin', function () {
    $admin = [
    ];
    return view('data_admin',[
        "admin"=> $admin
    ]);
});
Route::get('/data_hrd', function () {
    return view('data_hrd');
});
Route::get('/data_karu', function () {
    return view('data_karu');
});
Route::get('/data_karyawan', function () {
    return view('data_karyawan');
});
Route::get('/laporan_absen', function () {
    return view('laporan_absen');
});
Route::get('/laporan_pulang', function () {
    return view('laporan_pulang');
});
Route::get('/cetak_laporan', function () {
    return view('charts');
});
Route::get('/cetak_data', function () {
    return view('tables');
});
Route::get('/jadwal', function () {
    return view('jadwal');
});
Route::get('/shift', function () {
    return view('shift');
});
$blog_post = [
    [
        "title" => "judul 1",
        "author" => "rizky",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni quo impedit doloribus cupiditate ad soluta sit, dignissimos vero rerum, eius enim reiciendis cum ex veritatis dolore consectetur quibusdam doloremque nulla quae id laudantium aperiam? Nisi similique dolor voluptatem optio beatae unde illum nam perspiciatis reiciendis laboriosam itaque dicta mollitia ipsa est, possimus debitis magnam repudiandae. Adipisci, quae repellendus? Nam quidem autem ad omnis? Aliquid aliquam ea architecto fugit possimus in inventore ex atque repellat accusamus magni, minima eaque laboriosam at animi asperiores sapiente ipsa eligendi optio expedita iste quam minus! Voluptatum maxime reiciendis excepturi cumque dolor odio distinctio aspernatur veritatis.",
    ],
    [
        "title" => "judul 2",
        "author" => "dwi",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni quo impedit doloribus cupiditate ad soluta sit, dignissimos vero rerum, eius enim reiciendis cum ex veritatis dolore consectetur quibusdam doloremque nulla quae id laudantium aperiam? Nisi similique dolor voluptatem optio beatae unde illum nam perspiciatis reiciendis laboriosam itaque dicta mollitia ipsa est, possimus debitis magnam repudiandae. Adipisci, quae repellendus? Nam quidem autem ad omnis? Aliquid aliquam ea architecto fugit possimus in inventore ex atque repellat accusamus magni, minima eaque laboriosam at animi asperiores sapiente ipsa eligendi optio expedita iste quam minus! Voluptatum maxime reiciendis excepturi cumque dolor odio distinctio aspernatur veritatis.",
    ]
];
Route::get('/coba', function () {
    return view('welcome',[
        "name" => "rizky",
        "email" => "blabla@gmail.com",
    ]);
});
Route::get('/post', function () {
    $blog_post = [
        [
            "title" => "judul 1",
            "author" => "rizky",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni quo impedit doloribus cupiditate ad soluta sit, dignissimos vero rerum, eius enim reiciendis cum ex veritatis dolore consectetur quibusdam doloremque nulla quae id laudantium aperiam? Nisi similique dolor voluptatem optio beatae unde illum nam perspiciatis reiciendis laboriosam itaque dicta mollitia ipsa est, possimus debitis magnam repudiandae. Adipisci, quae repellendus? Nam quidem autem ad omnis? Aliquid aliquam ea architecto fugit possimus in inventore ex atque repellat accusamus magni, minima eaque laboriosam at animi asperiores sapiente ipsa eligendi optio expedita iste quam minus! Voluptatum maxime reiciendis excepturi cumque dolor odio distinctio aspernatur veritatis.",
        ],
        [
            "title" => "judul 2",
            "author" => "dwi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni quo impedit doloribus cupiditate ad soluta sit, dignissimos vero rerum, eius enim reiciendis cum ex veritatis dolore consectetur quibusdam doloremque nulla quae id laudantium aperiam? Nisi similique dolor voluptatem optio beatae unde illum nam perspiciatis reiciendis laboriosam itaque dicta mollitia ipsa est, possimus debitis magnam repudiandae. Adipisci, quae repellendus? Nam quidem autem ad omnis? Aliquid aliquam ea architecto fugit possimus in inventore ex atque repellat accusamus magni, minima eaque laboriosam at animi asperiores sapiente ipsa eligendi optio expedita iste quam minus! Voluptatum maxime reiciendis excepturi cumque dolor odio distinctio aspernatur veritatis.",
        ]
    ];
    return view('post',[
        "name" => "rizky",
        "email" => "blabla@gmail.com",
        "posts" => $blog_post,
    ]);
});

Route::post('/add', function () {
    return view('add');
});
Route::delete('/delete', function () {
    return view('add');
});
Route::put('/edit', function () {
    return view('edit');
});

