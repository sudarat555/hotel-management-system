<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomTypeModel extends Model
{
    protected $table="RoomTYPE";
    protected $fillable=[
        'Rtype_No', 'Rtype_Name', 'Rtype_Bed', 'Rtype_Description', 'Rtype_Pic'
    ];
}
