<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastrarRequest;
use App\Http\Requests\DadosSindicalRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Validator;

class CadastrarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CadastrarRequest $request)
    {
        dd($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CadastrarRequest $request)
    {
        $validated = $request->validated();

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'name' => 'required',
            'cpf' => 'required'
        ]);

        if ($validator->fails()) {
            dd('invalido');
//            \Session::flash('error', $validator->messages()->first());
//            return redirect('home')->withErrors($validator, 'error');
//            return redirect()->route('home');
        }

        return view('sindical.cadastrar');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CadastrarRequest $request, $id)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
