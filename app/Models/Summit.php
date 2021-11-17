<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summit extends Model
{
    use HasFactory;
    protected $fillable = [
        'gname', 'name1', 'name2', 'name3', 'phone', 'gmail', 'varsity', 'trid'
    ];
}
