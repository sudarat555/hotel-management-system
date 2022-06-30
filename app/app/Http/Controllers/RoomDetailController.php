<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RoomDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // select * from Account
        $roomdetail = DB::table('RoomDT')->get();
        return view('roomdetail.index', compact('roomdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roomdetail.create');
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

            'Room_Number' => 'required',
            'Room_Floor' => 'required',
            'Rtype_No' => 'required',
            'Room_Size' => 'required',
            'Room_Cost' => 'required',
            'Room_Description' => 'required',
            'Room_Status' => 'required'

        ]);

        DB::table('RoomDT')->insert([

            'Room_Number' => $request->Room_Number,
            'Room_Floor' => $request->Room_Floor,
            'Rtype_No' => $request->Rtype_No,
            'Room_Size' => $request->Room_Size,
            'Room_Cost' => $request->Room_Cost,
            'Room_Description' => $request->Room_Description,
            'Room_Status' => $request->Room_Status             

        ]);
        return redirect('roomdetail');
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
        $roomdetail = DB::table('RoomDT')->where('Room_Number', '=', $id)->get();
        return view('roomdetail.edit', compact('roomdetail'));
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

            'Room_Number' => 'required',
            'Room_Floor' => 'required',
            'Rtype_No' => 'required',
            'Room_Size' => 'required',
            'Room_Cost' => 'required',
            'Room_Description' => 'required',
            'Room_Status' => 'required'

        ]);

        DB::table('RoomDT')->where('Room_Number', '=', $id)->update([

            'Room_Number' => $request->Room_Number,
            'Room_Floor' => $request->Room_Floor,
            'Rtype_No' => $request->Rtype_No,
            'Room_Size' => $request->Room_Size,
            'Room_Cost' => $request->Room_Cost,
            'Room_Description' => $request->Room_Description,
            'Room_Status' => $request->Room_Status     

        ]);
        return redirect('roomdetail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("RoomDT")->where('Room_Number', '=', $id)->delete();
        return redirect('roomdetail');
    }
}
