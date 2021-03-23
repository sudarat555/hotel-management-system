<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerDetailModel extends Model
{
    protected $table="CustomerDT";
    protected $fillable=[
        'Customer_No', 'Customer_Name', 'Customer_Address', 'Customer_Phone', 'Customer_Email', 'Ctype_No', 'Room_Number', 'Customer_Bill'
    ];
}
