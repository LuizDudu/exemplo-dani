<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarefa extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'descricao',
        'finalizada',
    ];

    protected $casts = [
        'finalizada' => 'boolean',
    ];
}
