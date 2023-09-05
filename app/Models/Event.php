<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'vf_events';
    protected $fillable = ['name', 'start_date', 'end_date', 'description', 'banner', 'person_contact', 'website','venue','city','state', 'event_type'];
}
