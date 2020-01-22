@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <form method="POST" action="{{ route('alunos.update', ['aluno' => $aluno->id]) }}" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" name="cpf" class="form-control" value="{{ old('aluno', $aluno->cpf) }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>RG</label>
                        <input type="text" name="rg" class="form-control" value="{{ old('aluno', $aluno->rg) }}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>Data de nascimento</label>
                        <input type="text" name="data_nascimento" class="form-control" value="{{ old('aluno', $aluno->data_nascimento) }}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" value="{{ old('aluno', $aluno->nome) }}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="text" name="telefone" class="form-control" value="{{ old('aluno', $aluno->telefone) }}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Atualizar</button>
                        <a class="btn btn-primary" href="{{ route('alunos.index') }}">Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection