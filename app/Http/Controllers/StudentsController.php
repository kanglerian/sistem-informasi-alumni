<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Students;
use App\Models\Models\HistoryAlumni;
use App\Http\Requests\StudentsRequest;


class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $items = Students::all();

        return view('pages.students.index')->with([
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

        return view('pages.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentsRequest $request)
    {
        $data = $request->all();
        if($request->photo){
            $data['photo'] = $request->file('photo')->store(
                'img/photo','public'
            );
        
        }
        

        Students::create($data);
        return redirect()->route('students.index');
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
        $items = HistoryAlumni::with('students')
                ->where('students_id',$id)
                ->get();


        return view('pages.students.show')->with([
            'student' => $student,
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
        $item = Students::findOrFail($id);

        return view('pages.students.edit')->with([
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
    public function update(StudentsRequest $request, $id)
    {
        $data = $request->all();

        $item = Students::findOrFail($id);
        $item->update($data);

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Students::findOrFail($id);
        $item->delete();

        HistoryAlumni::where('students_id',$id)->delete();

        return redirect()->route('students.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;

        $items = Students::where(
            'full_name','like',"%".$keyword."%"
        )->get();

        return view('pages.students.index')->with([
            'items' => $items
        ]);
    }

    
}
