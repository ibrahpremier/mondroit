<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'phone',
        'email',
        'logo',
        'domaine',
        'domaine_id',
        'description',
        'short_description',
        'lib_doc_1',
        'val_doc_1',
        'lib_doc_2',
        'val_doc_2',
        'approuved_by',
        'approuved_at',
        'user_id',
    ];
}
