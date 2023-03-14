<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view(('profile'))
        ->with('nama', 'Tarista Dwi Silvia')
        ->with('jurusan', 'Teknik Informatika')
        ->with('nim', '2141720014')
        ->with('kelas', 'TI - 2H')
        ->with('absen', '28');
    }
}
