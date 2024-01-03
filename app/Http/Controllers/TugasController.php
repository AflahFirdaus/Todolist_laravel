<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TugasModel; // Assuming your model is named TugasModel

class TugasController extends Controller
{
    //Method untuk menampilkan data buku
    public function tugastampil()
    {
        $datatask = TugasModel::orderby('nama_tugas', 'ASC')
        ->paginate(5);

        return view('halaman/view_tugas', ['task'=>$datatask]);
    }

    // method untuk tambah buku
    public function tugastambah(Request $request)
    {
        $this->validate($request, [
            'nama_tugas' => 'required',
            'tanggal' => 'required',
            'aktivitas' => 'required'
        ]);
        
        TugasModel::create([
            'nama_tugas' => $request->nama_tugas,
            'tanggal' => $request->tanggal,
            'aktivitas' => $request->aktivitas
        ]);

        return redirect('/task');
    }

    // method untuk menghapus data buku
    public function tugashapus($idu)
    {
        $datatask=TugasModel::find($idu);
        $datatask->delete();

        return redirect()->back();
    }

    // method untuk edit data buku
    public function tugasedit($id, Request $request)
    {
        $this->validate($request, [
            'nama_tugas' => 'required',
            'tanggal' => 'required',
            'aktivitas' => 'required'
        ]);

        $id = TugasModel::find($id);
        $id->nama_tugas = $request->nama_tugas;
        $id->tanggal = $request->tanggal;
        $id->aktivitas = $request->aktivitas;

        $id->save();

        return redirect()->back();
    }
}
