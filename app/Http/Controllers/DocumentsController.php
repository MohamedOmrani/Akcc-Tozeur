<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Document;
use BD;
use DB;


class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents= Document::orderBy('titre','asc')->paginate(20);
        return view('documents.index')->with('documents',$documents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documents.create');
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
            'file' => 'required|mimes:doc,pdf,docx,jpg,png,zip'
            
        ]);

        if ($request->hasFile('file')) {
            $filenameWithExt=$request->file('file')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('file')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('file')->storeAs('public/files',$fileNameToStore);
        }else{
           $fileNameToStore='noimage.jpg';
        }
        
        
    
        //create post 
        $document = new DOCUMENT;
        $document->titre = $request->input('titre');
        $document->file=$fileNameToStore;
        $document->save();
        return redirect('/documents');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $document= DOCUMENT::find($id);
        $downloads= DB::table('documents')->get();
        return view ('documents.show')->with('downloads',$downloads);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $document= DOCUMENT::find($id);
        return view ('documents.edit')->with('document',$document);
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
            
        ]);

        if ($request->hasFile('file')) {
            $filenameWithExt=$request->file('file')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('file')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('file')->storeAs('public/files',$fileNameToStore);
        }
        
        $document= DOCUMENT::find($id);
        $document->titre = $request->input('titre'); 
        if ($request->hasFile('file')) {
            $document->file=$fileNameToStore;

        }  
        $document->save();
        return redirect('/documents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document= DOCUMENT::find($id);
        $document->delete();
        return redirect('/documents');
    }
}
