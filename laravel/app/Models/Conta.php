<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $fillable = [
        'id_numero_conta',
        'conta_tipo',
        'conta_id_agencia',
        'conta_agencia',
        'conta_saldo',

    ];

    protected $table = 'contas';
}
