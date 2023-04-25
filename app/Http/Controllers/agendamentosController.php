<?php
namespace App\Http\Controllers;

use App\Models\agendamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class agendamentosController
{
    public function index()
    {
        return view('index');
    }

    public function consultar()
    {
        $agendamentos = agendamentos::all();
        return view('consultar')->with('agendamentos', $agendamentos);
    }

    public function store(Request $request)
    {
        $agendamentos = new agendamentos();
        $agendamentos-> nome =$request-> txtNome;
        $agendamentos-> telefone =$request-> txtTelefone;
        $agendamentos-> origem =$request-> txtOrigem;
        $agendamentos-> Data_Contato =$request-> txtDataContato;
        $agendamentos-> observacao =$request-> txtObservacao;
        $agendamentos->save();

        return redirect ('/consultar');
    }
}

?>
