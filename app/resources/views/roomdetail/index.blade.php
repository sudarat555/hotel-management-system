@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- <div class="col-md-8 col-md-offset-2"> -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <br>
                    <h3>Room Detail</h3>
                    <br>                   
                    <div>
                        <a class="btn btn-primary" href="{{ route('roomdetail.create') }}">Create Room</a>
                    </div>
                    <br>
                    <table border=1>
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
                        @foreach($roomdetail as $rdt)
                        <tr>
                            <td align="center" style="color:blue">{{ $rdt->Room_Number }}</td>
                            <td align="center">{{ $rdt->Room_Floor }}</td>
                            <td align="center">{{ $rdt->Rtype_No }}</td>
                            <td align="center">{{ $rdt->Room_Size }}</td>
                            <td align="center">{{ $rdt->Room_Cost }}</td>
                            <td align="center">{{ $rdt->Room_Description }}</td>
                            <td align="center">{{ $rdt->Room_Status }}</td>
                            <td align="center">
                                <form action="{{ route('roomdetail.destroy',$rdt->Room_Number) }}" method="POST">                                  
                                    <a class="btn btn-success" href="{{ route('roomdetail.edit',$rdt->Room_Number) }}">Edit</a>
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