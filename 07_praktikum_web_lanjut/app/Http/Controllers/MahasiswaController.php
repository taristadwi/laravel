<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Http\Response; 
use Illuminate\Contracts\View\Factory; 
use Illuminate\Contracts\View\View;




class MahasiswaController extends Controller
{
    public function search(Request $request){
        $keyword = $request->search;
        $mahasiswas = Mahasiswa::where('Nama', 'like', "%" . $keyword . "%")->paginate(1);
        return view('mahasiswas.index', compact('mahasiswas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */  
    public function index()                
    {
        $mahasiswas = Mahasiswa::all();
        // Mengambil semua isi tabel 
        $posts = Mahasiswa::orderBy('Nim', 'desc')->paginate(6);
        return view('mahasiswas.index', compact('mahasiswas'));
        with('i', (request()->input('page', 1) - 1) * 5);
        $mahasiswas = Mahasiswa::paginate(5);
        return view('mahasiswas.index', compact('mahasiswas'));
    }
    public function create()
    {
        return view('mahasiswas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nim' => 'required', 
            'Nama' => 'required', 
            'Kelas' => 'required', 
            'Jurusan' => 'required', 
            'No_Handphone' => 'required',
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswas.index')
        ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }
    public function show($Nim)
    {
        $Mahasiswas = Mahasiswa::find($Nim);
        return view('mahasiswas.detail', compact('Mahasiswas'));
    }
    public function edit($Nim)
    {
    //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
    $Mahasiswa = Mahasiswa::find($Nim);
    return view('mahasiswas.edit', compact('Mahasiswa'));
    }
    public function update(Request $request, $Nim)
    {
        $request->validate([ 
            'Nim' => 'required', 
            'Nama' => 'required', 
            'Kelas' => 'required', 
            'Jurusan' => 'required', 
            'No_Handphone' => 'required',
            'Email' => 'required',
            'Tanggal_Lahir' => 'required',
        ]);
        Mahasiswa::find($Nim)->update($request->all());
        return redirect()->route('mahasiswas.index') 
        ->with('success', 'Mahasiswa Berhasil Diupdate');
    }
    public function destroy($Nim)
    {
        Mahasiswa::find($Nim)->delete(); 
        return redirect()->route('mahasiswas.index') 
        -> with('success', 'Mahasiswa Berhasil Dihapus');
    }
};
