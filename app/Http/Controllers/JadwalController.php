<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal=Jadwal::all();
        return view ('jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'tgl' => 'required',
            'hadir' => 'required',
            'izin' => 'required',
            'sakit' => 'required',
        ]);

        $jadwal= new Jadwal;
        $jadwal->nama_siswa = $request->nama_siswa;
        $jadwal->kelas = $request->kelas;
        $jadwal->tgl = $request->tgl;
        $jadwal->hadir = $request->hadir;
        $jadwal->izin = $request->izin;
        $jadwal->sakit = $request->sakit;
        $jadwal->save();
        return redirect()->route('jadwal.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jadwal=Jadwal::findOrFail($id);
        return view('jadwal.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'tgl' => 'required',
            'hadir' => 'required',
            'izin' => 'required',
            'sakit' => 'required',
        ]);

        $jadwal= Jadwal::findOrFail($id);
        $jadwal->nama_siswa = $request->nama_siswa;
        $jadwal->kelas = $request->kelas;
        $jadwal->tgl = $request->tgl;
        $jadwal->hadir = $request->hadir;
        $jadwal->izin = $request->izin;
        $jadwal->sakit = $request->sakit;
        $jadwal->save();
        return redirect()->route('jadwal.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jadwal=Jadwal::findOrFail($id);
        $jadwal->delete();
        return redirect()->route('jadwal.index');
    }

    public function cari(Request $request)
    {
        $keyword = $request->input('cari');

        // mengambil data dari table pegawai sesuai pencarian data
        $jadwal = Jadwal::where('nama_siswa', 'like', "%" . $keyword . "%")->paginate(10);

        // mengirim data pegawai ke view index
        return view('jadwal.index', compact('jadwal'));
    }

}
