<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Cliente extends Model
{
    //
    protected $table = 'clientes';
    public function enderecos()
    {
        return $this->hasMany(Endereco::class);
    }
}
