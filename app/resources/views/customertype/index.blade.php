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
                    <div>
                        <a class="btn btn-primary" href="{{ route('customertype.create') }}">Create Customer Type</a>
                        <a href="http://localhost:8080/" class="btn btn-warning">HOME</a>
                    </div>
                    <br>
                    <table border=1>
                        <tr>
                            <td align="center" >No</td>
                            <td align="center" >ชื่อ</td>
                            <td align="center" >คำอธิบายเพิ่มเติม</td>
                            <td align="center" colspan=2>การดำเนินงาน</td>
                        </tr>
                        @foreach($custype as $custype)
                        <tr>
                            <td align="center" style="color: blue">{{ $custype->Ctype_No }}</td>
                            <td align="center" style="color:{{$custype->Ctype_color}}">{{ $custype->Ctype_Name }}</td>
                            <td align="center">{{ $custype->Ctype_Description }}</td>
                            <td align="center">
                                <form action="{{ route('customertype.destroy',$custype->Ctype_No) }}" method="POST">                                  
                                    <a class="btn btn-success" href="{{ route('customertype.edit',$custype->Ctype_No) }}">Edit</a>
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