<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResult extends Model
{
    use HasFactory;

    protected $table = 'user_results';
    protected $fillable = ['question_id', 'user_id', 'answered'];
}
