<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DelCustomerDetailModel extends Model
{
    protected $table="delete_customerDT";
    protected $fillable=[
        'Customer_No', 'Customer_Name', 'Customer_Address', 'Customer_Phone', 'Customer_Email', 'Ctype_No', 'Room_Number', 'Customer_Bill'
    ];
}
