<?php

namespace App\Http\Controllers;

use App\Models\PulauIndonesia;
use Illuminate\Http\Request;
use App\Http\Requests\PulauIndonesiaRequest;

class PulauIndonesiaController extends Controller
{
    public function index(){
        $PulauIndonesia = PulauIndonesia::get();
        return view('index', compact('PulauIndonesia'));
    }

    public function tambah(){
        return view('tambah');
    }

    public function edit($id){
        $PulauIndonesia = PulauIndonesia::where('id', $id)->first();
        return view('edit', compact('PulauIndonesia'));
    }

    public function lihat($id){
        $PulauIndonesia = PulauIndonesia::where('id', $id)->first();
        return view('lihat', compact('PulauIndonesia'));

    }    
    public function store(PulauIndonesiaRequest $request) 
    { 
        $PulauIndonesia = new PulauIndonesia(); 
 
        $PulauIndonesia->nama_pulau = $request->nama_pulau; 
        $PulauIndonesia->letak_geografis = $request->letak_geografis; 
 
        $PulauIndonesia->save(); 
 
        return redirect('/'); 
    }

    public function update(PulauIndonesiaRequest $request, $id) 
    { 
        $PulauIndonesia = PulauIndonesia::where('id', $id)->first(); 
 
        $PulauIndonesia->nama_pulau = $request->nama_pulau; 
        $PulauIndonesia->letak_geografis = $request->letak_geografis; 

        $PulauIndonesia->update(); 
 
        return redirect('/'); 
    }

    public function hapus($id) 
    { 
        $PulauIndonesia = PulauIndonesia::where('id', $id)->first(); 
 
        $PulauIndonesia->delete(); 
 
        return redirect('/'); 
    }
}
