<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laundry;

class LaundryController extends Controller
{
     public function index(Request $request)
    {
        $laundry = Laundry::all();
       
        
        if($request->ajax()){
            return datatables()->of($laundry)
                        ->addColumn('action', function($data){

                            $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';     
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }

        return view('laundry.index',['laundry' => $laundry]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $id = $request->id;
        
        $post   =   Laundry::updateOrCreate(['id' => $id],
                    [
                       'nama' => $request->nama,
                       'harga' => $request->harga,
                        
                    ]); 

        return response()->json($post);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
     public function edit($id)
    {
        $where = array('id' => $id);
        $post  = Laundry::where($where)->first();
     
        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Laundry::where('id',$id)->delete();
     
        return response()->json($post);
    }
   public function create (){
      $laundry = Laundry::all();
  
     return view('laundry.create',['laundry' => $laundry])->with('success','data berhasil disimpan');
   }
   public function stores(Request $request)
   {
    

       
         $this->validate($request, [
                        'nama' => 'required',
                        'harga' => 'required',
                        
        ]);

       
       
       

        $laundry = Laundry::create([
                         'nama' => $request->nama,
                        'harga' => $request->harga,
                        
                       
        ]);

        return redirect('/laundry')->with('success','Data berhasil tersimpan'); 
   }
   public function daftarlaundry()
   {
       return view('laundry.daftarlaundry');
   }
}
