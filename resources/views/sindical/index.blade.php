@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center index-top">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-danger text-white">Digite seu CPF</div>
                    <div class="card-body">

                        <form class="needs-validation" action="{{ route('dados-pessoal.post') }}" method="POST" novalidate>
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                                <div class="invalid-feedback">
                                    CPF Obrigatório
                                </div>
                            </div>
                            @if($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <li class="list-group">{{$error}}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <button type="submit" class="btn btn-primary">Próximo</button>
                        </form>
                    </div>
                </div>

                {{--<form id="contactForm" class="form-horizontal">--}}
                    {{--<div class="form-group">--}}
                        {{--<label class="col-xs-3 control-label">Full name</label>--}}
                        {{--<div class="col-xs-4">--}}
                            {{--<input type="text" class="form-control" name="firstName" placeholder="First name">--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<div class="col-xs-9 col-xs-offset-3">--}}
                            {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}
            </div>
        </div>
    </div>
@endsection
