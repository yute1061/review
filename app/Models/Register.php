<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    //　以下追記
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'password' => 'required',
        'gender' => 'required',
        'age' => 'required',
        'career' => 'required',
        'ridestyle' => 'required',
    );
    
}
