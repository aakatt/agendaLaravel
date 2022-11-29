<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    static $rules=[
        'user'=>'required',
        'title'=>'required',
        'description'=>'required',
        'start'=>'required',
        'end'=>'required',  
    ];

    protected $fillable=['user','title','description','start','end'];
}
