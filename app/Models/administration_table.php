<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class administration_table extends Model
{
    use HasFactory;
    protected $fillable =[
'fname',
'lname',
'username',
'password',
'category'

    ];
}
