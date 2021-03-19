@extends('layouts.app')

@section('content')
@foreach($custype as $custype)
@endforeach

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                        Edit Customer Type
                    </h3>
                    <form action="{{ route('customertype.update',$custype->Ctype_No) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <table border="1">
                            <tr>
                                <td>No</td>
                                <td><input type="text" name="Ctype_No" value="{{ $custype->Ctype_No }}" readonly></td>
                            </tr>
                            <tr>
                                <td>ชื่อ</td>
                                <td><input type="text" name="Ctype_Name" value="{{ $custype->Ctype_Name }}" ></td>
                            </tr>
                            <tr>
                                <td>คำอธิบาย</td>
                                <td><input type="text" name="Ctype_Description" value="{{ $custype->Ctype_Description }}" ></td>
                            </tr>
                            <tr>
                                <td>สี</td>
                                <td><input type="text" name="Ctype_color" value="{{ $custype->Ctype_color }}" ></td>
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
