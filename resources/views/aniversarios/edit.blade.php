@extends('layouts.app')
@section('content')
<style>
    body {
        background: url('/img/parabens_pra_voce.png') no-repeat center center fixed;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .title-container {
        position: absolute;
        top: 10%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
    }
</style>
@if(session('success'))
    <div class="alert alert-success" style="margin-bottom: 20px; background-color: #f8f9fa; color: #155724;">
        {{ session('success') }}
    </div>
@endif
<div class="title-container">
    <h1>Editar Aniversariante</h1>
</div>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card col-md-6"
        style="border: 2px solid #007bff; background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(10px);">
        <div class="card-body">
            <form method="POST" action="{{ route('aniversarios.update', $aniversario->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="mb-4 form-group">
                        <label for="nome_aniversariante" class="form-label" style="color:white;">Nome</label>
                        <input type="text" class="bg-white form-control text-dark" id="nome_aniversariante" name="nome_aniversariante" value="{{ $aniversario->nome_aniversariante }}" required>
                    </div>
                    <div class="mb-4 form-group">
                        <label for="data_nascimento" class="form-label" style="color:white;">Data de Nascimento</label>
                        <input type="date" class="bg-white form-control text-dark" id="data_nascimento" name="data_nascimento" value="{{ $aniversario->data_nascimento }}" required>
                    </div>
                    <div class="mb-4 form-group">
                        <label for="nro_telefone" class="form-label" style="color:white;">Número telefone</label>
                        <input type="text" class="bg-white form-control text-dark" id="nro_telefone" name="nro_telefone" value="{{ $aniversario->nro_telefone }}" required>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary d-flex justify-content-end">Atualizar</button>
                    </div>
                </div>
            </form>
        </div>
</div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function formatPhoneNumber(phoneNumber) {
    const cleaned = phoneNumber.replace(/\D/g, '');
    const part1 = cleaned.slice(0, 2);
    const part2 = cleaned.slice(2, 7);
    const part3 = cleaned.slice(7, 11);
    return `(${part1}) ${part2}-${part3}`;
        }

        document.getElementById('nro_telefone').addEventListener('input', function() {
            this.value = formatPhoneNumber(this.value);
        });
    });
</script>
@endsection
