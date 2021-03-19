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
                    <table border=1>
                        <tr>
                            <td align="center">NO</td>
                            <td align="center">ประเภทห้อง</td>
                            <td align="center">เตียง</td>
                            <td align="center">คำอธิบาย</td>
                            <td align="center">รูปภาพ</td>
                        </tr>
                        @foreach($vrttype as $vrt)
                        <tr>
                            <td align="center" style="color:blue">{{ $vrt->Rtype_No }}</td>
                            <td align="center">{{ $vrt->Rtype_Name }}</td>
                            <td align="center">{{ $vrt->Rtype_Bed }}</td>
                            <td align="center">{{ $vrt->Rtype_Description }}</td>
                            <td align="center"><img src="{{ $vrt->Rtype_Pic }}" style="width:200px;height:200px;"></td>                         
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        <!-- </div> -->
    </div>
</div>
@endsection