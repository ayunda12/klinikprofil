<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekan extends Model
{
    use HasFactory;
    protected $table = 'tb_rekan';
    protected $fillable = [
        'url',
        'foto',
    ];
}
