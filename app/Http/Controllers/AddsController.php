<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Add;
use BD;

class AddsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$adds= Add::all(); 
      $adds= Add::orderBy('lastname','desc')->paginate(10);
     
       return view('adds.index')->with('adds',$adds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adds.create');
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
            'lastname' => 'required',
            'firstname' => 'required',
            'mailinput' => 'required',
            'Tel' => 'required',
            'city' => 'required',
            'Job' => 'required',
            
            
        ]);
        //create post
        $add = new ADD;
        $add->lastname = $request->input('lastname');
        $add->firstname = $request->input('firstname');
        $add->mailinput = $request->input('mailinput');
        $add->Tel = $request->input('Tel');
        $add->city = $request->input('city');
        $add->Job = $request->input('Job');
      
        $add->save();
        return redirect('/adds');
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
    public function showDate()
    {
        return response()->json(date("Y"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $add= ADD::find($id);

        return view ('adds.edit')->with('add',$add);
    }

  


    // public function search(Request $request){
    //     $q = $request->input('search');
    //     $adds= Add::where('lastname', 'LIKE', '%'.$q.'%')->paginate(1);
    //     return view('adds.search')->with('adds',$adds);
        
    // }



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
            'lastname' => 'required',
            'firstname' => 'required',
            'mailinput' => 'required',
            'Tel' => 'required',
            'city' => 'required',
            'Job' => 'required',
            
            
        ]);
        
        $add= ADD::find($id);
        $add->lastname = $request->input('lastname');
        $add->firstname = $request->input('firstname');
        $add->mailinput = $request->input('mailinput');
        $add->Tel = $request->input('Tel');
        $add->city = $request->input('city');
        $add->Job = $request->input('Job');
      
        $add->save();
        return redirect('/adds');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $add= ADD::find($id);
        $add->delete();
        return redirect('/adds');
    }


    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $adds = DB::table('adds')
         ->where('lastname', 'like', '%'.$query.'%')
         ->orWhere('firstname', 'like', '%'.$query.'%')
         ->orWhere('mailinput', 'like', '%'.$query.'%')
         ->orWhere('Tel', 'like', '%'.$query.'%')
         ->orWhere('city', 'like', '%'.$query.'%')
        //  ->orderBy('CustomerID', 'desc')
         ->get();
         
      }
      else
      {
       $adds = DB::table('adds')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $adds->count();
      if($total_row > 0)
      {
       foreach($data as $add)
       {
        $output .= '
        <tr>
         <td>'.$add->CustomerName.'</td>
         <td>'.$add->Address.'</td>
         <td>'.$add->City.'</td>
         <td>'.$add->PostalCode.'</td>
         <td>'.$add->Country.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $adds = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($adds);
     }
    }
}


