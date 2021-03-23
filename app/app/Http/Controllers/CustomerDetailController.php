<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomerDetailController extends Controller
{
    public function calbill()
    {
        $custdetail = DB::table('CustomerDT')->get();
        foreach ($custdetail as $custdetail)
        {
            DB::select('call CallBilling(?)',array($custdetail->Customer_No));
        }
        return redirect('customerdetail');       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // select * from Account
        $custdetail = DB::table('CustomerDT')->get();
        return view('customerdetail.index', compact('custdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customerdetail.create');
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

            'Customer_No' => 'required',
            'Customer_Name' => 'required',
            'Customer_Address' => 'required',
            'Customer_Phone' => 'required',
            'Customer_Email' => 'required',
            'Ctype_No' => 'required',
            'Room_Number' => 'required',
            'Customer_Bill' => 'required'

        ]);

        DB::table('CustomerDT')->insert([

            'Customer_No' => $request->Customer_No,
            'Customer_Name' => $request->Customer_Name,
            'Customer_Address' => $request->Customer_Address,
            'Customer_Phone' => $request->Customer_Phone,
            'Customer_Email' => $request->Customer_Email,
            'Ctype_No' => $request->Ctype_No,
            'Room_Number' => $request->Room_Number,           
            'Customer_Bill' => $request->Customer_Bill

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
        $custdetail = DB::table('CustomerDT')->where('Customer_No', '=', $id)->get();
        return view('customerdetail.edit', compact('custdetail'));
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

            'Customer_No' => 'required',
            'Customer_Name' => 'required',
            'Customer_Address' => 'required',
            'Customer_Phone' => 'required',
            'Customer_Email' => 'required',
            'Ctype_No' => 'required',
            'Room_Number' => 'required',
            'Customer_Bill' => 'required'

        ]);

        DB::table('CustomerDT')->where('Customer_No', '=', $id)->update([

            'Customer_No' => $request->Customer_No,
            'Customer_Name' => $request->Customer_Name,
            'Customer_Address' => $request->Customer_Address,
            'Customer_Phone' => $request->Customer_Phone,
            'Customer_Email' => $request->Customer_Email,
            'Ctype_No' => $request->Ctype_No,
            'Room_Number' => $request->Room_Number,
            'Customer_Bill' => $request->Customer_Bill         

        ]);
        return redirect('customerdetail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("CustomerDT")->where('Customer_No', '=', $id)->delete();
        return redirect('customerdetail');
    }
}
