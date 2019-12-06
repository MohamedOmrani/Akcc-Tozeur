<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Agenda;
use BD;

class AgendsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //$posts= Post::all(); 
         $agendas= Agenda::orderBy('titre','asc')->paginate(20);
         return view('agendas.index')->with('agendas',$agendas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agendas.create');
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
            'datetimepicker' => 'required',
            'lieu' => 'required',
            'cover_image'=>'image|nullable|max:1999'
            
        ]);

       if ($request->hasFile('cover_image')) {
            $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }else{
           $fileNameToStore='noimage.jpg';
        }
    
        //create post
        $agenda = new AGENDA;
        $agenda->titre = $request->input('titre');
        $agenda->body = $request->input('body');
        $agenda->datepicker = $request->input('datepicker');
        $agenda->datetimepicker = $request->input('datetimepicker');
        $agenda->lieu = $request->input('lieu');
        $agenda->cover_image=$fileNameToStore;
        $agenda->save();
        return redirect('/agendas'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agenda= AGENDA::find($id);
     
        return view ('agendas.show')->with('agenda',$agenda);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agenda= AGENDA::find($id);
        return view ('agendas.edit')->with('agenda',$agenda);
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
            'datetimepicker' => 'required',
            'lieu' => 'required',
            'cover_image'=>'image|nullable|max:1999'         
            
        ]);
        
        if ($request->hasFile('cover_image')) {
            $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }else{
        $fileNameToStore='noimage.jpg';
        }
        
        $agenda= AGENDA::find($id);
        $agenda->titre = $request->input('titre');
        $agenda->body = $request->input('body');   
        $agenda->datepicker = $request->input('datepicker');
        $agenda->datetimepicker = $request->input('datetimepicker');
        $agenda->lieu = $request->input('lieu');
        $agenda->cover_image=$fileNameToStore;   
        $agenda->save();
        return redirect('/agendas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda= AGENDA::find($id);
        $agenda->delete();
        return redirect('/agendas');
    }
}
