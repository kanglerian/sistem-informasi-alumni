<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Students;
use App\Models\Models\HistoryAlumni;

class DataMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Students::all();
        $data['judul-page'] = 'Cari Data Mahasiswa';
        return view('pages.mahasiswa.index')->with([
            'items' => $items,
            'data' => $data
        ]);
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
        $student = Students::findOrFail($id);
        $data['judul-page'] = 'Cari Data Mahasiswa';
        $items = HistoryAlumni::with('students')
                ->where('students_id',$id)
                ->get();
        return view('pages.mahasiswa.show')->with([
            'student' => $student,
            'items' => $items,
            'data' => $data
        ]);
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

    public function search(Request $request)
    {   
        $keyword = $request->search;

        $items = Students::where(
            'full_name','like',"%".$keyword."%"
            )->get();
        return view('layouts.dataMahasiswa')->with([
            'items' => $items
        ]);
    }
}
