<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use Carbon\Carbon;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index')->with(['alunos' => $alunos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = [
            'cpf' => $request->input('cpf'),
            'rg' => $request->input('rg'),
            'data_nascimento' => implode("-",array_reverse(explode("/",$request->input('data_nascimento')))),
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone')
        ];
        Aluno::create($dados);
        //Aluno::create($request->all());

        return redirect()->route('alunos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno = Aluno::find($id);
        return view('alunos.show')->with(['aluno' => $aluno]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = Aluno::find($id);
        $aluno->data_nascimento = date('d/m/Y', strtotime($aluno->data_nascimento));
        return view('alunos.edit')->with(['aluno' => $aluno]);
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
        $dados = [
            'cpf' => $request->input('cpf'),
            'rg' => $request->input('rg'),
            'data_nascimento' => implode("-",array_reverse(explode("/",$request->input('data_nascimento')))),
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone')
        ];

        $aluno = Aluno::find($id)->update($dados);
        //$aluno = Aluno::find($id)->update($request->all());

        return redirect()->route('alunos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aluno = Aluno::find($id)->delete();

        return redirect()->route('alunos.index');
    }
}
