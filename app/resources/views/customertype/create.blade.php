@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <br>
                    <H3>
                        Create Customer Type
                    </H3>
                    <form action="{{ route('customertype.store') }}" method="POST">
                        @csrf
                        @method("POST")
                        <table border="1">
                            <tr>
                                <td>No</td>
                                <td><input type="text" name="Ctype_No" require></td>
                            </tr>
                            <tr>
                                <td>ชื่อ</td>
                                <td><input type="text" name="Ctype_Name" require></td>
                            </tr>
                            <tr>
                                <td>คำอธิบาย</td>
                                <td><input type="text" name="Ctype_Description" require></td>
                            </tr>
                            <tr>
                                <td>สี</td>
                                <td><input type="text" name="Ctype_color" placeholder="rgb(0,0,0)" require></td>
                            </tr>
                            <tr>
                                <td>ส่วนลด</td>
                                <td><input type="text" name="Ctype_Discount" require></td>
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