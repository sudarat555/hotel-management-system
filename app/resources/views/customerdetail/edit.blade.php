@extends('layouts.app')

@section('content')
@foreach($custdetail as $custdt)
@endforeach

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                        Edit Customer
                    </h3>
                    <form action="{{ route('customerdetail.update',$custdt->Customer_No) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <table border="1">
                            <tr>
                                <td>หมายเลขสมาชิก</td>
                                <td><input type="text" name="Customer_No" value="{{ $custdt->Customer_No }}" readonly></td>
                            </tr>
                            <tr>
                                <td>ชื่อ</td>
                                <td><input type="text" name="Customer_Name" value="{{ $custdt->Customer_Name }}" ></td>
                            </tr>
                            <tr>
                                <td>ที่อยู่</td>
                                <td><input type="text" name="Customer_Address" value="{{ $custdt->Customer_Address }}" ></td>
                            </tr>
                            <tr>
                                <td>เบอร์โทรศัพท์</td>
                                <td><input type="text" name="Customer_Phone" value="{{ $custdt->Customer_Phone }}" ></td>
                            </tr>
                            <tr>
                                <td>อีเมล</td>
                                <td><input type="text" name="Customer_Email" value="{{ $custdt->Customer_Email }}" ></td>
                            </tr>
                            <tr>
                                <td>ระดับสมาชิก</td>
                                <td><input type="text" name="Ctype_No" value="{{ $custdt->Ctype_No }}" ></td>
                            </tr>
                            <tr>
                                <td>หมายเลขห้องพัก</td>
                                <td><input type="text" name="Room_Number" value="{{ $custdt->Room_Number }}" ></td>
                            </tr>
                            <tr>
                                <td>ราคาห้องพักที่ต้องจ่าย</td>
                                <td><input type="text" name="Customer_Bill" value="{{ $custdt->Customer_Bill }}" ></td>
                            </tr>
                            <tr>
                                <td colspan=2>
                                    <button type="submit" class="btn btn-success">แก้ไขข้อมูล</button>
                                    <button type="reset" class="btn btn-warning">รีเซ็ท</button>
                                </td>
                            </tr>

                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection