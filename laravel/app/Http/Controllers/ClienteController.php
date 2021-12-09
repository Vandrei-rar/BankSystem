<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    public function create()
    {
        return view('abrasuaconta');
    }

    public function store(Request $request)
    {
        

        Conta::create([
            "INSERT INTO `contas`(`conta_tipo, conta_id_agencia, conta_agencia, conta_saldo`) VALUES (`F, 1, 1, 0`)"
        ]);

        User::create([
            'cliente_nome_completo' => $request->cliente_nome_completo,
            'password' => Hash::make($request->password),
            'cliente_rg' => $request->cliente_rg,
            'cliente_endereco' => $request->cliente_endereco,
            'cliente_cpf' => $request->cliente_cpf,
            'email' => $request->cliente_email,
            'data_nasc' => $request->data_nasc
        ]);

        DB::statement('call updateidconta()');
        

        return redirect()->route('form_login');
    }
}
