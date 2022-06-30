@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- <div class="col-md-8 col-md-offset-2"> -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <br>
                    <h3>Delete History Room Detail</h3>
                    <br>                   
                    <div>
                        <a class="btn btn-primary" href="{{ route('roomdetail.index') }}">Room Detail</a>
                        <a href="http://localhost:8080/" class="btn btn-warning">HOME</a>
                    </div>
                    <br>
                    <table class="table table-bordered">
                        <tr>
                            <td align="center" >หมายเลขห้องพัก</td>
                            <td align="center" >ชั้น</td>
                            <td align="center" >ชนิดห้องพัก</td>
                            <td align="center" >ขนาด</td>
                            <td align="center" >ราคา</td>
                            <td align="center" >คำอธิบายเพิ่มเติม</td>
                            <td align="center" >สถานะ</td>
                            <td align="center" colspan=2>การดำเนินงาน</td>
                        </tr>
                        @foreach($histroomdetail as $histrdt)
                        <tr>
                            <td align="center" style="color:blue">{{ $histrdt->Room_Number }}</td>
                            <td align="center">{{ $histrdt->Room_Floor }}</td>
                            <td align="center">{{ $histrdt->Rtype_No }}</td>
                            <td align="center">{{ $histrdt->Room_Size }}</td>
                            <td align="center">{{ $histrdt->Room_Cost }}</td>
                            <td align="center">{{ $histrdt->Room_Description }}</td>
                            <td align="center">{{ $histrdt->Room_Status }}</td>
                            <td align="center">
                                <form action="{{ route('histroomdetail.destroy',$histrdt->Room_Number) }}" method="POST">                                  
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