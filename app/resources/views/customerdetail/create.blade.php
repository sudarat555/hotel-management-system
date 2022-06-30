@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <br>
                    <H3>
                        Create Customer
                    </H3>
                    <form action="{{ route('customerdetail.store') }}" method="POST">
                        @csrf
                        @method("POST")
                        <table border="1">
                            <tr>
                                <td>No</td>
                                <td><input type="text" name="Customer_No" require></td>
                            </tr>
                            <tr>
                                <td>ชื่อ</td>
                                <td><input type="text" name="Customer_Name" require></td>
                            </tr>
                            <tr>
                                <td>ที่อยู่</td>
                                <td><input type="text" name="Customer_Address" require></td>
                            </tr>
                            <tr>
                                <td>เบอร์โทรศัพท์</td>
                                <td><input type="text" name="Customer_Phone" require></td>
                            </tr>
                            <tr>
                                <td>อีเมล</td>
                                <td><input type="text" name="Customer_Email" require></td>
                            </tr>
                            <tr>
                                <td>ระดับสมาชิก</td>
                                <td><input type="text" name="Ctype_No" require></td>
                            </tr>
                            <tr>
                                <td>หมายเลขห้องพัก</td>
                                <td><input type="text" name="Room_Number" require></td>
                            </tr>
                            <tr>
                                <td>ราคาห้องพักที่ต้องจ่าย</td>
                                <td><input type="text" name="Customer_Bill" value="0" readonly ></td>
                            </tr>           
                            <tr>
                                <td colspan=2>
                                <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
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