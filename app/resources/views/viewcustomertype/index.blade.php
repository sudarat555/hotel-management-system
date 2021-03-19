@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- <div class="col-md-8 col-md-offset-2"> -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <br>
                    <h3>Customer Type Detail</h3>
                    <br>
                    <table border=1>
                        <tr>
                            <td align="center" >No</td>
                            <td align="center" >ชื่อ</td>
                            <td align="center" >คำอธิบายเพิ่มเติม</td>
                        </tr>
                        @foreach($custype as $custype)
                        <tr>
                            <td align="center" style="color: blue">{{ $custype->Ctype_No }}</td>
                            <td align="center" style="color:{{$custype->Ctype_color}}">{{ $custype->Ctype_Name }}</td>
                            <td align="center">{{ $custype->Ctype_Description }}</td>                           
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        <!-- </div> -->
    </div>
</div>
@endsection