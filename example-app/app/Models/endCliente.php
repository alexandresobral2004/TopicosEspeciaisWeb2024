<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class endCliente extends Model
{
    //

    use HasFactory;

    protected $enderecos = [
        'rua',
        'bairro',
        'cidade',
        'cep',
        'uf',
        'complemento',
        'numero',
        'cliente_id'
    ];

    public function cliente():BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }
}
