<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DelRoomDetailModel extends Model
{
    protected $table="delete_RoomDT";
    protected $fillable=[
        'Room_Number', 'Room_Floor', 'Rtype_No', 'Room_Size', 'Room_Cost', 'Room_Description', 'Room_Status'
    ];
}
