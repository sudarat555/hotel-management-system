<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // select * from Account
        $roomtype = DB::table('RoomTYPE')->get();
        return view('roomtype.index', compact('roomtype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roomtype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'Rtype_No' => 'required',
            'Rtype_Name' => 'required',
            'Rtype_Bed' => 'required',
            'Rtype_Description' => 'required',
            'Rtype_Pic' => 'required'

        ]);

        DB::table('RoomTYPE')->insert([

            'Rtype_No' => $request->Rtype_No,
            'Rtype_Name' => $request->Rtype_Name,
            'Rtype_Bed' => $request->Rtype_Bed,
            'Rtype_Description' => $request->Rtype_Description,
            'Rtype_Pic' => $request->Rtype_Pic

        ]);
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
        $roomtype = DB::table('RoomTYPE')->where('Rtype_No', '=', $id)->get();
        return view('roomtype.edit', compact('roomtype'));
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
        $request->validate([

            'Rtype_No' => 'required',
            'Rtype_Name' => 'required',
            'Rtype_Bed' => 'required',
            'Rtype_Description' => 'required',
            'Rtype_Pic' => 'required'

        ]);

        DB::table('RoomTYPE')->where('Rtype_No', '=', $id)->update([

            'Rtype_No' => $request->Rtype_No,
            'Rtype_Name' => $request->Rtype_Name,
            'Rtype_Bed' => $request->Rtype_Bed,
            'Rtype_Description' => $request->Rtype_Description,
            'Rtype_Pic' => $request->Rtype_Pic

        ]);
        return redirect('roomtype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("RoomTYPE")->where('Rtype_No', '=', $id)->delete();
        return redirect('roomtype');
    }
}
