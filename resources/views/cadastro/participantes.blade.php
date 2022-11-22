@extends('layout.template')
@section('main')

<h1 class="mb-5">Cadastro de Participantes</h1>

<div class="container">
    <div colass = "row mt-5">

        </div>

        @if ($errors->any())
            <div class="alert alert-danger">PREENCHAS OS CAMPOS</div>
        @endif

        <form method="post" action="">

            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="Text" class="form-control" name="nome" id="nome" placeholder="">
            </div>
            <div class="mb-3">
                <label for="sobrenome" class="form-label">Sobrenome</label>
                <input type="Text" class="form-control" name="sobrenome" id="sobrenome" placeholder="">
            </div>
            <div class="mb-3">
                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" name="data_de_nascimento" id="data_de_nascimento" placeholder="">
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="Text" class="form-control" name="endereco" id="endereco" placeholder="">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="Text" class="form-control" name="email" id="email" placeholder="teste@exemplo.com">
            </div>

            <div class="mb-3">
                <button type="submit" class ="btn btn-success">CADASTRAR</button>
            </div>
        </form>
    </div>
</div>
@endsection
