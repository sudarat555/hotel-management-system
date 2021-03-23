@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- <div class="col-md-8 col-md-offset-2"> -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <br>
                    <h3>Room Type</h3>
                    <br>                   
                    <div>
                        <a class="btn btn-primary" href="{{ route('roomtype.create') }}">Create Room Type</a>
                        <a href="http://localhost:8080/" class="btn btn-warning">HOME</a>
                    </div>
                    <br>
                    <table border=1>
                        <tr>
                            <td align="center">NO</td>
                            <td align="center">ประเภทห้อง</td>
                            <td align="center">เตียง</td>
                            <td align="center">คำอธิบาย</td>
                            <td align="center">รูปภาพ</td>
                            <td align="center" colspan=2>การดำเนินงาน</td>
                        </tr>
                        @foreach($roomtype as $rtype)
                        <tr>
                            <td align="center" style="color:blue">{{ $rtype->Rtype_No }}</td>
                            <td align="center">{{ $rtype->Rtype_Name }}</td>
                            <td align="center">{{ $rtype->Rtype_Bed }}</td>
                            <td align="center">{{ $rtype->Rtype_Description }}</td>
                            <td align="center"><img src="{{ $rtype->Rtype_Pic }}" style="width:200px;height:200px;" ></td> 
                            <td align="center">
                                <form action="{{ route('roomtype.destroy',$rtype->Rtype_No) }}" method="POST">                                  
                                    <a class="btn btn-success" href="{{ route('roomtype.edit',$rtype->Rtype_No) }}">Edit</a>
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