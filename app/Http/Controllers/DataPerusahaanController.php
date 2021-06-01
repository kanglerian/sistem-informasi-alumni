<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Company;
use App\Models\Models\HistoryAlumni;

class DataPerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Company::all();
        $data['judul-page'] = 'Cari Data Perusahaan';
        return view('pages.perusahaan.index')->with([
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

        $company = Company::findOrFail($id);
        $data['judul-page'] = 'Cari Data Perusahaan';
        $items = HistoryAlumni::with('company')
                ->where('company_id',$id)
                ->get();
        $count = HistoryAlumni::with('company')->where('company_id',$id )->count();
        return view('pages.perusahaan.show')->with([
            'company' => $company,
            'items' => $items,
            'count' => $count,
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

        $items = Company::where(
            'company_name','like',"%".$keyword."%"
            )->get();
        return view('layouts.dataPerusahaan')->with([
            'items' => $items
        ]);
    }
}
