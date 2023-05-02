<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agendamento;

use Illuminate\Support\Facades\DB;

use GuzzleHttp\Psr7\Query;

class ControllerAgendamento extends Controller
{
    
    function adicionar(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'origem' => 'required',
            'data_do_contato' => 'required',
            'observacao' => 'required',
        ]);
        $query = DB::table('servicos')->insert([
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone'),
            'origem' => $request->input('origem'),
            'data_do_contato' => $request->input('data_do_contato'),
            'observacao' => $request->input('observacao'),
        ]);
        if ($query) {
            return back()->with('success', 'Dados inseridos com sucesso!');
        } else {
            return back()->with('fail', 'Algo deu errado!');
        }

       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
