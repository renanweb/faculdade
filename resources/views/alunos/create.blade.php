@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <form method="POST" action="{{ route('alunos.store') }}" class="form-horizontal">
                @csrf
                <div class="row">
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" name="cpf" class="form-control" maxlength="11" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>RG</label>
                        <input type="text" name="rg" class="form-control" maxlength="10">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>Data de nascimento</label>
                        <input type="text" name="data_nascimento" class="form-control" maxlength="10">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" maxlength="80">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="text" name="telefone" class="form-control" maxlength="15">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                        <a class="btn btn-primary" href="{{ route('alunos.index') }}">Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection