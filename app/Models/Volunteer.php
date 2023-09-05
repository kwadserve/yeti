<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'volunteer_event';
    protected $fillable = ['fullname', 'age', 'event_id', 'email', 'age', 'mobile'];
}
