<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'objet',
        'message',
        'type',
        'status',
        'user_id',
        'target_user_id',
    ];
}
