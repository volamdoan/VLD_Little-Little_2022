<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $Table = 'Order';
    protected $Fillable = [
        
        'Customer_name',
        'Customer_phone',
        'Customer_email',
        'TotalQty',
        'TotalPrice',
        'Event_id',
        'date'=> 'date:D-m-y',       
    ];

}
