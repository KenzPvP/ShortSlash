<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class links extends Model
{
    use HasFactory;
    protected $table = 'links';
    protected $fillable = [
        'original_link',
        'link_token'
    ];
}


