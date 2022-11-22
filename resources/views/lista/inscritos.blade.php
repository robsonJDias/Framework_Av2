@extends('layout.template')
@section('main')

<h1 class="mb-5">Listagem de Participantes</h1>
<div class="col-md-12">
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{session::get('success')}}
        </div>

</div>

@endif


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Endereço</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($participantes as $participante)

        <tr>
            <td>{{ $participante->id }}</td>
            <td>{{ $participante->nome }}</td>
            <td>{{ $participante->sobrenome }}</td>
            <td>{{ $participante->data_de_nascimento }}</td>
            <td>{{ $participante->endereco }}</td>
            <td>{{ $participante->email }}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@endsection
