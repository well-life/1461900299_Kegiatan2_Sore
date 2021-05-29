<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tbl_jadwal')
            ->join('data_guru','tbl_jadwal.id_guru','=','data_guru.id_guru')
            ->join('setup_pelajaran','tbl_jadwal.id_pelajaran','=','setup_pelajaran.id_pelajaran')
            ->join('setup_kelas','tbl_jadwal.id_kelas','=','setup_kelas.id_kelas')
            ->select('tbl_jadwal.id_jadwal','data_guru.nama_guru','setup_pelajaran.nama_pelajaran','setup_kelas.nama_kelas')
            ->get();
        return view('Tampil_Jadwal', ['data' => $data]);
    }

    public function search(Request $request)
    {
        $nama = $request->nama;

        $data = DB::table('tbl_jadwal')
            ->where('setup_kelas.nama_kelas','like',"%".$nama."%")
            ->join('data_guru','tbl_jadwal.id_guru','=','data_guru.id_guru')
            ->join('setup_pelajaran','tbl_jadwal.id_pelajaran','=','setup_pelajaran.id_pelajaran')
            ->join('setup_kelas','tbl_jadwal.id_kelas','=','setup_kelas.id_kelas')
            ->select('tbl_jadwal.id_jadwal','data_guru.nama_guru','setup_pelajaran.nama_pelajaran','setup_kelas.nama_kelas')
            ->get();
        return view('Tampil_Jadwal', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
