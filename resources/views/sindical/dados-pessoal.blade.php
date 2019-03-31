@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dados Pessoal Controller</h1>
        <form class="needs-validation" action="{{ route('dados-sindical.post') }}" method="POST" novalidate>
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li class="list-group">{{$error}}</li>
                    @endforeach
                </ul>
            @endif

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>


@endsection
