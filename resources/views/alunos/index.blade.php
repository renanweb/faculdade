@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <a class="btn btn-primary" href="{{ route('alunos.create') }}">Cadastrar Aluno</a>
            </div>
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Data de nascimento</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alunos as $aluno)
                            <tr>
                            <th scope="row">{{ $aluno->id }}</th>
                                <td>{{ $aluno->nome }}</td>
                                <td>{{ date('d/m/Y', strtotime($aluno->data_nascimento)) }}</td>
                                <td>
                                    <a href="{{ route('alunos.show', ['aluno' => $aluno->id]) }}" class="btn btn-success">Visualizar</a>
                                    <a href="{{ route('alunos.edit', ['aluno' => $aluno->id]) }}" class="btn btn-primary">Editar</a>
                                    <a href="{{ route('alunos.destroy', ['aluno' => $aluno->id]) }}" class="btn btn-danger">Apagar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection