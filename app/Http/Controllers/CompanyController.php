<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Company;
use App\Models\Models\HistoryAlumni;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Company::all();

        return view('pages.company.index')->with([
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
        return view('pages.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $data = $request->all();
        if($request->logo){
            $data['logo'] = $request->file('logo')->store(
                'img/logo','public'
            );
        
        }

        Company::create($data);
        return redirect()->route('company.index');
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
        $items = HistoryAlumni::with('company')
                ->where('company_id',$id)
                ->get();


        return view('pages.company.show')->with([
            'company' => $company,
            'items' => $items,
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
        $item = Company::findOrFail($id);

        return view('pages.company.edit')->with([
            'item' => $item,
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

        $item = Company::findOrFail($id);
        $item->update($data);

        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Company::findOrFail($id);
        $item->delete();

        HistoryAlumni::where('company_id',$id)->delete();

        return redirect()->route('company.index');
    }

    public function search(Request $request)
    {   
        $keyword = $request->search;

        $items = Company::where(
            'company_name','like',"%".$keyword."%"
            )->get();
        return view('pages.company.index')->with([
            'items' => $items
        ]);
    }
}
