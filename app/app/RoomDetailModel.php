<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomDetailModel extends Model
{
    protected $table="RoomDT";
    protected $fillable=[
        'Room_Number', 'Room_Floor', 'Rtype_No', 'Room_Size', 'Room_Cost', 'Room_Description', 'Room_Status'
    ];
}
