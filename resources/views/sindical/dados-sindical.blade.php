@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <form class="needs-validation" novalidate action="{{ route('termos-de-autorizacao.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="instituicao">Instituição de Ensino</label>
                            <input type="text" class="form-control text-uppercase" id="ds_escola" name="ds_escola"
                                   placeholder="Instituição" maxlength="200" value="" required>
                        </div>
                        <div class="form-row col-12">
                            <div class="col-md-6 mb-3">
                                <label for="valor_salario">Valor do Salário</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">R$</div>
                                    </div>
                                    <input type="text" class="form-control" id="vl_salario"
                                           name="vl_salario" value="" required>
                                    <div class="invalid-feedback">
                                        Campo obrigatório
                                    </div>
                                    <div id="validate" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Próximo</button>
                </form>
            </div>
        </div>
    </div>
@endsection
