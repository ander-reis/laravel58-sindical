@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('cadastrar.store') }}" method="POST">
                    @csrf
                    <h3 class="termos-title text-center">AUTORIZAÇÃO DE DESCONTO DA CONTRIBUIÇÃO SINDICAL</h3>
                    <div class="mb-5 text-justify">
                        <p class="termos-primeiro-paragrafo">Eu, NOME, CPF, autorizo, prévia
                            e expressamente, o recolhimento da contribuição sindical feita, exclusivamente, por meio de
                            boleto bancário ou equivalente, para cumprimento do disposto do artigo 579 da Consolidação
                            das Leis do Trabalho combinado com a medida provisória nº 873, publicada em 1º de março de
                            2019, em favor do Sindicato dos Professores de São Paulo, representante da categoria a qual
                            sou participante.</p>
                        <p class="termos-segundo-paragrafo">Nos termos do artigo 582 § 1º da CLT, a contribuição sindical será
                            recolhida de uma só vez, anualmente, e consistirá na importância correspondente à
                            remuneração de um dia de trabalho, para os empregados, qualquer que seja a forma da referida
                            remuneração. Considera-se um dia de trabalho o equivalente a 1/30 (um trinta avos) da
                            quantia percebida no mês anterior.</p>
                        <p>São Paulo,.</p>
                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="checkbox">
                        <label class="custom-control-label" for="checkbox">Aceito os termos.</label>
                        <div class="invalid-feedback">É obrigatório aceitar os termos.</div>
                    </div>


                    {{--<input type="text" class="form-control" id="cpf" name="cpf" value="{{$session['cpf']}}">--}}
                    {{--<input type="text" class="form-control" id="name" name="name" value="{{ $session['name'] }}">--}}
                    {{--<input type="text" class="form-control" id="email" name="email" value="{{ $session['email'] }}">--}}
{{----}}
                    {{--<input type="text" class="form-control" id="ds_escola" name="ds_escola" value="{{ $model['ds_escola'] }}">--}}
                    {{--<input type="text" class="form-control" id="vl_salario" name="vl_salario" value="{{ $model['vl_salario'] }}">--}}
{{----}}
                    @if($errors->any())
                        <ul class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li class="list-group">{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif

                    {{--<input type="hidden" name="ds_escola" value="{{ $model->ds_escola ?? '' }}">--}}
                    {{--<input type="hidden" name="vl_salario" value="{{ $model->vl_salario ?? '' }}">--}}
                    {{--<input type="hidden" name="vl_boleto" value="{{ $model->vl_boleto ?? '' }}">--}}
                    {{--<input type="hidden" name="id_boleto" value="{{ $model->id_boleto ?? '' }}">--}}

                    <button class="btn btn-primary" type="submit">Próximo</button>
                </form>
            </div>
        </div>
    </div>
@endsection
