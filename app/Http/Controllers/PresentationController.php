<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Présentation_de_notre_Association()
    {
        return view('presentation.Présentation_de_notre_Association');
    }

    public function Les_actions_de_notre_Association()
    {
        return view('presentation.Les_actions_de_notre_Association');
    }

    public function Le_conseil_d_administration()
    {
        return view('presentation.Le_conseil_d_administration');
    }

    public function Où_sommes_nous()
    {
        return view('presentation.Où_sommes_nous');
    }

    public function Nous_rejoindre()
    {
        return view('presentation.Nous_rejoindre');
    }

    public function équipe()
    {
        return view('presentation.équipe');
    }

    public function accueil()
    {
        return view('accueil');
    }
    public function aaa()
    {
        return view('presentation.aaa');
    }









    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
