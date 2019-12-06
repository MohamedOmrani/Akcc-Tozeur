<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presse;
use App\Communique_de_presse;
use App\Medias;
use BD;


class PressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $presses= Presse::orderBy('titre','asc')->paginate(20);
        return view('presses.index')->with('presses',$presses);
    }
    public function indexcommunique_de_presse()
    {
        $communique_de_presses= Communique_de_presse::orderBy('titre','asc')->paginate(20);
        return view('presses.indexcommunique_de_presse')->with('communique_de_presses',$communique_de_presses);
    }
    public function indexmedias()
    {
        $mediass= Medias::orderBy('titre','asc')->paginate(20);
        return view('presses.indexmedias')->with('mediass',$mediass);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('presses.create');
    }
    public function createcommunique_de_presse ()
    {
        return view('presses.createcommunique_de_presse');
    }

    public function createmedias ()
    {
        return view('presses.createmedias');
    }
    public function getTab1()
    {   
        $presses= Presse::orderBy('titre','asc')->paginate(20);
        return view('Tabs.Tab1')->with('presses',$presses);
    }
    public function getTab2()
    {
        $communique_de_presses= Communique_de_presse::orderBy('titre','asc')->paginate(20);
        return view('Tabs.Tab2')->with('communique_de_presses',$communique_de_presses);
    }
    
    public function getTab3()
    {
        $mediass= Medias::orderBy('titre','asc')->paginate(20);
        return view('Tabs.Tab3')->with('mediass',$mediass);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'titre' => 'required',
            'body' => 'required',
            'datepicker' => 'required',
        ]);
        
        
        $presse = new PRESSE;
        $presse->titre = $request->input('titre');
        $presse->body = $request->input('body');      
        $presse->datepicker = $request->input('datepicker');      
        $presse->save();
        return redirect('/presses'); 
    }

    public function storecommunique_de_presse(Request $request)
    {
        $this->validate($request,[
            'titre' => 'required',

        ]);
        
        $communique_de_presse = new communique_de_presse;
        $communique_de_presse->titre = $request->input('titre'); 
        // $communique_de_presse->body = $request->input('body');      
        // $communique_de_presse->datepicker = $request->input('datepicker');       
        $communique_de_presse->save();
        return redirect('/communique_de_presse');
    }

    
    public function storemedias(Request $request)
    {
        $this->validate($request,[
            'titre' => 'required',

        ]);
        
        $medias = new medias;
        $medias->titre = $request->input('titre');   
        $medias->body = $request->input('body');      
        $medias->datepicker = $request->input('datepicker');    
        $medias->save();
        return redirect('/medias');
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
        $presse= PRESSE::find($id);
        return view ('presses.edit')->with('presse',$presse);
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
        $this->validate($request,[
            'titre' => 'required',
            'body' => 'required',         
            'datepicker' => 'required',         
            
        ]);
        
        $presse= PRESSE::find($id);
        $presse->titre = $request->input('titre');
        $presse->body = $request->input('body');      
        $presse->datepicker = $request->input('datepicker');      
        $presse->save();
        return redirect('/presses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $presse= PRESSE::find($id);
        $presse->delete();
        return redirect('/presses');
    }
}
