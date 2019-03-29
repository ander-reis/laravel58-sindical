@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dados Pessoal Controller</h1>
        <form class="needs-validation" action="{{ route('dados-sindical.store') }}" method="POST" novalidate>
            @csrf
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" value="{{ $cpf }}" name="cpf">
            </div>
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
