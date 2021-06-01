<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\HistoryAlumni;
use App\Models\Models\Students;
use App\Models\Models\Company;
use App\Http\Requests\HistoryAlumnisRequest;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = HistoryAlumni::all();

        return view('pages.history.index')->with([
            'items' => $items 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumni = Students::all();
        $company = Company::all();
        return view('pages.history.create')->with([
            'alumni' => $alumni,
            'company' => $company
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HistoryAlumnisRequest $request)
    {
        $data = $request->all();

        HistoryAlumni::create($data);

        return redirect()->route('history.index');

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
        $item = HistoryAlumni::findOrFail($id);
        $alumni = Students::all();
        $company = Company::all();

        return view('pages.history.edit')->with([
            'item' => $item,
            'alumni' => $alumni,
            'company' => $company
        ]);
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
        $data = $request->all();

        $item = HistoryAlumni::findOrFail($id);
        $item->update($data);

        return redirect()->route('history.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = HistoryAlumni::findOrFail($id);
        $item->delete();

        return redirect()->route('history.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;

        $items = HistoryAlumni::where(
            'status','like',"%".$keyword."%"
        )->get();

        return view('pages.history.index')->with([
            'items' => $items
        ]);
    }
}