<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    protected $fillable = [
        'titulo',
        'descricao',
        'ingredientes',
        'instrucoes',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
