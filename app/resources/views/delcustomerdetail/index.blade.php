@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- <div class="col-md-8 col-md-offset-2"> -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <br>
                    <h3>Delete History Customer Detail</h3>
                    <br>                   
                    <div>
                        <a href="{{ route('customerdetail.index') }}" class="btn btn-primary">Customer Detail</a>
                        <a href="http://localhost:8080/" class="btn btn-warning">HOME</a>
                    </div>
                    <br>
                    <table class="table table-bordered">
                        <tr>
                            <td align="center" >ชื่อ</td>
                            <td align="center" >ที่อยู่</td>
                            <td align="center" >เบอร์โทรศัพท์</td>
                            <td align="center" >อีเมล</td>
                            <td align="center" >ระดับสมาชิก</td>
                            <td align="center" >หมายเลขห้องพัก</td>
                            <td align="center" >ราคาห้องพักที่ต้องจ่าย</td>
                            <td align="center" colspan=2>การดำเนินงาน</td>
                        </tr>
                        @foreach($delcustdetail as $delcdt)
                        <tr>
                            <td align="center">{{ $delcdt->Customer_Name }}</td>
                            <td align="center">{{ $delcdt->Customer_Address }}</td>
                            <td align="center">{{ $delcdt->Customer_Phone }}</td>
                            <td align="center">{{ $delcdt->Customer_Email }}</td>
                            <td align="center">{{ $delcdt->Ctype_No }}</td>
                            <td align="center">{{ $delcdt->Room_Number }}</td>
                            <td align="center">{{ $delcdt->Customer_Bill }}</td>
                            <td align="center">
                                <form action="{{ route('delcustomerdetail.destroy',$delcdt->Customer_No) }}" method="POST">                                  
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