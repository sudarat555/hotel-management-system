@extends('layouts.app')

@section('content')
@foreach($roomdetail as $roomdt)
@endforeach

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>
                        Edit Room
                    </h3>
                    <form action="{{ route('roomdetail.update',$roomdt->Room_Number) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <table border="1">
                            <tr>
                                <td>Room Number</td>
                                <td><input type="text" name="Room_Number" value="{{ $roomdt->Room_Number }}" readonly></td>
                            </tr>
                            <tr>
                                <td>Floor</td>
                                <td><input type="text" name="Room_Floor" value="{{ $roomdt->Room_Floor }}" ></td>
                            </tr>
                            <tr>
                                <td>Room Type</td>
                                <td><input type="text" name="Rtype_No" value="{{ $roomdt->Rtype_No }}" ></td>
                            </tr>
                            <tr>
                                <td>Size</td>
                                <td><input type="text" name="Room_Size" value="{{ $roomdt->Room_Size }}" ></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td><input type="text" name="Room_Cost" value="{{ $roomdt->Room_Cost }}" ></td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td><input type="text" name="Room_Description" value="{{ $roomdt->Room_Description }}" ></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    <select name="Room_Status">
                                        <option value="Available">Available</option>
                                        <option value="UnAvailable">UnAvailable</option>
                                    </select>
                                </td>
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