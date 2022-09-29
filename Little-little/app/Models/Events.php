<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Events extends Model
{
    use HasFactory;

    protected $Table = 'Events';
    protected $Fillable = [
        
        'Img',
        'Img1',
        'Img2',
        'Title',
        'Short_intro',
        'Description',
        'End_intro',
        'Price',
        'Address',
        'Start_date',
        'End_date',
        
    ];


}
