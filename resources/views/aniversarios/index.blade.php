@extends('layouts.app')

@section('content')

<h2>Lista de Aniversariantes</h2>
<br>
<br>

<div class="row">

    <div class="col-md-12">
        <a type="button" class="btn btn-outline-secondary" href="javascript:history.back()">Voltar</a>
        <a href="{{ route('aniversarios.create') }}" id="novo_registro" name="novo_registro" class=" btn btn-outline-primary">
        Novo Cadastro</a>
    </div>
    <br>
    <br>
    <br>
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: 20px; background-color: #f8f9fa; color: #155724;">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<table id="aniversariosTable" name="aniversariosTable" class="stripe hover compact order-column row-border">
    <thead>
        <tr>
            <th>Nome do Aniversariante</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($aniversarios as $aniversario)
        <tr>
            <td>{{ $aniversario->nome_aniversariante }}</td>
            <td>{{ $aniversario->data_nascimento }}</td>
            <td>
                <a href="{{ route('aniversarios.edit', $aniversario->id) }}" class="btn btn-primary">Editar</a>
                <form method="POST" action="{{ route('aniversarios.destroy', $aniversario->id) }}"
                    style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
