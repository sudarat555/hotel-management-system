<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomerTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // select * from Account
        $custype = DB::table('CustomerTYPE')->get();
        return view('customertype.index', compact('custype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customertype.create');
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

            'Ctype_No' => 'required',
            'Ctype_Name' => 'required',
            'Ctype_Description' => 'required',
            'Ctype_color' => 'required',
            'Ctype_Discount' => 'required'

        ]);

        DB::table('CustomerTYPE')->insert([

            'Ctype_No' => $request->Ctype_No,
            'Ctype_Name' => $request->Ctype_Name,
            'Ctype_Description' => $request->Ctype_Description,
            'Ctype_color' => $request->Ctype_color,
            'Ctype_Discount' => $request->Ctype_Discount   

        ]);
        return redirect('customertype');
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
        $custype = DB::table('CustomerTYPE')->where('Ctype_No', '=', $id)->get();
        return view('customertype.edit', compact('custype'));
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

            'Ctype_No' => 'required',
            'Ctype_Name' => 'required',
            'Ctype_Description' => 'required',
            'Ctype_color' => 'required',
            'Ctype_Discount' => 'required'

        ]);

        DB::table('CustomerTYPE')->where('Ctype_No', '=', $id)->update([

            'Ctype_No' => $request->Ctype_No,
            'Ctype_Name' => $request->Ctype_Name,
            'Ctype_Description' => $request->Ctype_Description,
            'Ctype_color' => $request->Ctype_color,
            'Ctype_Discount' => $request->Ctype_Discount    

        ]);
        return redirect('customertype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("CustomerTYPE")->where('Ctype_No', '=', $id)->delete();
        return redirect('customertype');
    }
}
