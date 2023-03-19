<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    protected $guarded = array('id');
    
    public static $rules = array(
        'category' => 'required',
        'item' => 'required',
        //makerはなくてもいい
        'product' => 'required',
        'body' => 'required',
        //imageもなくてもいい
        'cost' => 'required',
        'evaluation' => 'required',
    );
}
