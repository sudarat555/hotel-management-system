@extends('layouts.app')

@section('content')
@foreach($roomtype as $rtype)
@endforeach

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                        Edit Room Type
                    </h3>
                    <form action="{{ route('roomtype.update',$rtype->Rtype_No) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <table border="1">
                            <tr>
                                <td>NO</td>
                                <td><input type="text" name="Rtype_No" value="{{ $rtype->Rtype_No }}" readonly></td>
                            </tr>
                            <tr>
                                <td>ชื่อ</td>
                                <td><input type="text" name="Rtype_Name" value="{{ $rtype->Rtype_Name }}" ></td>
                            </tr>
                            <tr>
                                <td>เตียง</td>
                                <td><input type="text" name="Rtype_Bed" value="{{ $rtype->Rtype_Bed }}" ></td>
                            </tr>
                            <tr>
                                <td>คำอธิบาย</td>
                                <td><input type="text" name="Rtype_Description" value="{{ $rtype->Rtype_Description }}" ></td>
                            </tr>
                            <tr>
                                <td>URL รูป</td>
                                <td><input type="text" name="Rtype_Pic" value="{{ $rtype->Rtype_Pic }}" ></td>
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
