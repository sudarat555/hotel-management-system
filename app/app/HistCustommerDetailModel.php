<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistCustomerDetailModel extends Model
{
    protected $table="history_customerDT";
    protected $fillable=[
        'Customer_No', 'Customer_Name', 'Customer_Address', 'Customer_Phone', 'Customer_Email', 'Ctype_No', 'Room_Number', 'Customer_Bill'
    ];
}
