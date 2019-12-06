<?php

namespace App\Http\Controllers;

use App\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use BD;

class ImageUploadController extends Controller

{ 
    public function index() 
    {
      //$posts= Post::all(); 
      $image_uploads= ImageUpload::orderBy('filename','asc')->paginate(20);
      return view('uploads.index')->with('image_uploads',$image_uploads);
    } 

    // public function upload()
    // {
    //     return view('uploads.image_upload');
    // }
    public function create()
    {
        return view('uploads.create');
    }

    public function store(Request $request)
    {
         if ($request->hasFile('file')) {

            $image = $request->file('file');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('/storage/cover_images'), $imageName);

            $imageUpload = new ImageUpload();
            $imageUpload->filename = $imageName;
            $imageUpload->save();

      
    }
        return redirect('/uploads');   
        
    }

    public function delete(Request $request)
    {
        $filename = $request->get('filename');
        ImageUpload::where('filename', $filename)->delete();
        $path = public_path() . '/storage/cover_images' . $filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }
}