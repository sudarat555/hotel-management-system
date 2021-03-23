@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- <div class="col-md-8 col-md-offset-2"> -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <br>
                    <h3>Customer Detail</h3>
                    <br>                   
                    <div>
                        <a class="btn btn-primary" href="{{ route('customerdetail.create') }}">Create Customer </a>
                        <a class="btn btn-primary" href="{{ route('customerdetail.calbill') }}">Billing </a>
                    </div>
                    <br>
                    <table border=1>
                        <tr>
                            <td align="center" >หมายเลขสมาชิก</td>
                            <td align="center" >ชื่อ</td>
                            <td align="center" >ที่อยู่</td>
                            <td align="center" >เบอร์โทรศัพท์</td>
                            <td align="center" >อีเมล</td>
                            <td align="center" >ประเภทสมาชิก</td>
                            <td align="center" >หมายเลขห้องพัก</td>
                            <td align="center" >ราคาห้องพักที่ต้องจ่าย</td>
                            <td align="center" colspan=2>การดำเนินงาน</td>
                        </tr>
                        @foreach($custdetail as $cdt)
                        <tr>
                            <td align="center" style="color:blue">{{ $cdt->Customer_No }}</td>
                            <td align="center">{{ $cdt->Customer_Name }}</td>
                            <td align="center">{{ $cdt->Customer_Address }}</td>
                            <td align="center">{{ $cdt->Customer_Phone }}</td>
                            <td align="center">{{ $cdt->Customer_Email }}</td>
                            <td align="center">{{ $cdt->Ctype_No }}</td>
                            <td align="center">{{ $cdt->Room_Number }}</td>
                            <td align="center">{{ $cdt->Customer_Bill }}</td>
                            <td align="center">
                                <form action="{{ route('customerdetail.destroy',$cdt->Customer_No) }}" method="POST">                                  
                                    <a class="btn btn-success" href="{{ route('customerdetail.edit',$cdt->Customer_No) }}">Edit</a>
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>                                
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        <!-- </div> -->
    </div>
</div>
@endsection