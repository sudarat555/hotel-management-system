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
                    <form action="{{ route('roomdetail.store') }}" method="POST">
                        @csrf
                        @method("POST")
                        <table border="1">
                            <tr>
                                <td>Room Number</td>
                                <td><input type="text" name="Room_Number" require></td>
                            </tr>
                            <tr>
                                <td>Floor</td>
                                <td><input type="text" name="Room_Floor" require></td>
                            </tr>
                            <tr>
                                <td>Room Type</td>
                                <td><input type="text" name="Rtype_No" placeholder="input 1 or 2" require></td>
                            </tr>
                            <tr>
                                <td>Size</td>
                                <td><input type="text" name="Room_Size" require></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td><input type="text" name="Room_Cost" require></td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td><input type="text" name="Room_Description"></td>
                            </tr> 
                            <tr>
                                <td>Status</td>
                                <td>
                                    <select name="Room_Status">
                                        <option value="ว่าง">ว่าง</option>
                                        <option value="ไม่ว่าง">ไม่ว่าง</option>
                                    </select>
                                </td>
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