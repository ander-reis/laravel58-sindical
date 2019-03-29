@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Cadastrar</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li class="list-group">{{$error}}</li>
                @endforeach
            </ul>
        @endif

    </div>
@endsection
