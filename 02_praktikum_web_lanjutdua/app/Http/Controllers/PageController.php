<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
}

public function about() {
    return "2141720014,Tarista Dwi Silvia";
}

public function articles($id) {
    return "Halaman Artikel dengan id " .$id;
}
}



