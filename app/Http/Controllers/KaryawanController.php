<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $karyawan = Karyawan::all();
        // return response()->json([
        //     'data' => $karyawan
        // ]);

        $karyawan = Karyawan::all();

        // sum lama_cuti for each cuti that the karyawan had
        foreach ($karyawan as $k) {
            $k->sisa_cuti_tahun_ini = 12 - $k->cuti->whereBetween('tanggal_cuti', [date('Y') . '-01-01', date('Y') . '-12-31'])->sum('lama_cuti');
        }

        return response()->json([
            'data' => $karyawan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $karyawan = Karyawan::create([
            'nomor_induk' => $request->nomor_induk,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tanggal_bergabung' => $request->tanggal_bergabung,
        ]);

        return response()->json([
            'data' => $karyawan
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        return response()->json([
            'data' => $karyawan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $karyawan->nomor_induk = $request->nomor_induk;
        $karyawan->nama = $request->nama;
        $karyawan->alamat = $request->alamat;
        $karyawan->tanggal_lahir = $request->tanggal_lahir;
        $karyawan->tanggal_bergabung = $request->tanggal_bergabung;

        return response()->json([
            'data' => $karyawan
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        //
        $karyawan->delete();

        return response()->json([
            'message' => 'Data berhasil dihapus'
        ], 204);
    }

    // tambilkan tiga karyawan terbaru yang bergabung
    public function latest()
    {
        $karyawan = Karyawan::orderBy('tanggal_bergabung', 'desc')->take(3)->get();
        return response()->json([
            'data' => $karyawan
        ]);
    }

    // karyawan yang pernah cuti
    public function karyawanWithCuti()
    {
        $karyawan = Karyawan::has('cuti')->with('cuti')->get();
        return response()->json([
            'data' => $karyawan
        ]);
    }

    // karyawan dengan sisa cuti
    public function karyawanWithRemainingCuti()
    {
        $karyawan = Karyawan::all();

        // sum lama_cuti for each cuti that the karyawan had
        foreach ($karyawan as $k) {
            $k->sisa_cuti_tahun_ini = 12 - $k->cuti->whereBetween('tanggal_cuti', [date('Y') . '-01-01', date('Y') . '-12-31'])->sum('lama_cuti');
        }

        return response()->json([
            'data' => $karyawan
        ]);
    }
}
