<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerTypeModel extends Model
{
    protected $table="CustomerTYPE";
    protected $fillable=[
        'Ctype_No', 'Ctype_Name','Ctype_Description', 'Ctype_color'
    ];
}
