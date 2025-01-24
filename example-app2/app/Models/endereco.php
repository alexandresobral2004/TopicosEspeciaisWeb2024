<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class endereco extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'logradouro',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'complemento',
        'cliente_id',
    ];

    public function cliente()
    {
        return $this->belongsTo(cliente::class);
    }

}
