<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dynamic extends Model
{
    use HasFactory;

    function getdata($city)
    {
    //    return DB::table('student')->get('name')->all();

       return DB::table('student')->select('city')->where('id', 34)->get()->first();

       
    }
}