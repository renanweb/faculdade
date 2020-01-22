@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <h2>Cadastro de aluno <strong>#{{ $aluno->id }}</strong></h2>
            <br>
            <h6>CPF: {{ $aluno->cpf }}</h6>
            <br>
            <h6>RG: {{ $aluno->rg }}</h6>
            <br>
            <h6>Data de nascimento: {{ date('d/m/Y', strtotime($aluno->data_nascimento)) }}</h6>
            <br>
            <h6>Nome: {{ $aluno->nome }}</h6>
            <br>
            <h6>Telefone: {{ $aluno->telefone }}</h6>
            <br>
            <h6>Criado em: {{ date('d/m/Y', strtotime($aluno->created_at)) }}</h6>
            <br>
            <h6>Última atualização: {{ date('d/m/Y', strtotime($aluno->updated_at)) }}</h6>
        </div>
    </div>
@endsection