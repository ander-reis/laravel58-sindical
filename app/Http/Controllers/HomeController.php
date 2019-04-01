<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastrarRequest;
use App\Http\Requests\DadosPessoalRequest;
use App\Http\Requests\DadosSindicalRequest;
use App\Http\Requests\HomeRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('sindical.index');
    }

    /**
     * Show the step 1 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDadosPessoal(Request $request)
    {
        //$cpf = $request->session()->get('cpf');
        return view('sindical.dados-pessoal');
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateDadosPessoal(HomeRequest $request)
    {
//        $validatedData = $request->validate([
//            'name' => 'required|unique:products',
//            'amount' => 'required|numeric',
//            'company' => 'required',
//            'available' => 'required',
//            'description' => 'required',
//        ]);

//        if(empty($request->session()->get('product'))){
//            $product = new Product();
//            $product->fill($validatedData);
//            $request->session()->put('product', $product);
//        }else{
//            $product = $request->session()->get('product');
//            $product->fill($validatedData);
//            $request->session()->put('product', $product);
//        }

        //$request->session()->put('cpf', $request->all());

        return redirect('/dados-pessoal');
    }

    /**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDadosSindical(Request $request)
    {
        return view('sindical.dados-sindical');
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateDadosSindical(DadosPessoalRequest $request)
    {
        //$cpf = $request->session()->get('cpf');

//        $validatedData = $request->validate([
//            'name' => 'required|unique:products',
//            'amount' => 'required|numeric',
//            'company' => 'required',
//            'available' => 'required',
//            'description' => 'required',
//        ]);
//
//        if(empty($request->session()->get('product'))){
//            $product = new Product();
//            $product->fill($validatedData);
//            $request->session()->put('product', $product);
//        }else{
//            $product = $request->session()->get('product');
//            $product->fill($validatedData);
//            $request->session()->put('product', $product);
//        }

        return redirect('/dados-sindical');
    }

    /**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDadosTermos(Request $request)
    {
        //$cpf = $request->session()->get('cpf');
        return view('sindical.termos-de-autorizacao');
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateDadosTermos(DadosSindicalRequest $request)
    {
        //$cpf = $request->session()->get('cpf');

//        $validatedData = $request->validate([
//            'name' => 'required|unique:products',
//            'amount' => 'required|numeric',
//            'company' => 'required',
//            'available' => 'required',
//            'description' => 'required',
//        ]);
//
//        if(empty($request->session()->get('product'))){
//            $product = new Product();
//            $product->fill($validatedData);
//            $request->session()->put('product', $product);
//        }else{
//            $product = $request->session()->get('product');
//            $product->fill($validatedData);
//            $request->session()->put('product', $product);
//        }


        return redirect('/dados-termos');
    }

    public function store(CadastrarRequest $request)
    {

    }


}
