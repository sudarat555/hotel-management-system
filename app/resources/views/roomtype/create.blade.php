@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <br>
                    <H3>
                        Create Room Type
                    </H3>
                    <form action="{{ route('roomtype.store') }}" method="POST">
                        @csrf
                        @method("POST")
                        <table border="1">
                            <tr>
                                <td>NO</td>
                                <td><input type="text" name="Rtype_No"></td>
                            </tr>
                            <tr>
                                <td>ชื่อ</td>
                                <td><input type="text" name="Rtype_Name"></td>
                            </tr>
                            <tr>
                                <td>เตียง</td>
                                <td><input type="text" name="Rtype_Bed"></td>
                            </tr>
                            <tr>
                                <td>คำอธิบาย</td>
                                <td><input type="text" name="Rtype_Description"></td>
                            </tr>
                            <tr>
                                <td>URL รูปภาพ</td>
                                <td><input type="text" name="Rtype_Pic"></td>
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