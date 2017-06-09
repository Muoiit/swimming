<?php

namespace App\Http\Controllers;
use App\Introcenter;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    

        $centers = Introcenter::all();
        return view('admin.centers.index',compact('centers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.centers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if ($file=$request->file('image')) {
             $name = time().$file->getClientOriginalName();
             $file->move('images',$name);
             $input['image'] = $name;
         }        

         Introcenter::create($input);

         Session::flash('create_center','Tạo thành công !!!!');

        return redirect('/admin/centers');

        
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
       $center = Introcenter::findOrFail($id);
       return view('admin.centers.edit',compact('center'));
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
        $center = Introcenter::findOrFail($id);
        $input = $request->all();
        $file  = $request->file('image');

        if($file){

               unlink(public_path().$center->image);        

                 $name = time().$file->getClientOriginalName();
                 $file->move('images',$name);
                 $input['image'] = $name;                 
 
        }

          $center->update($input);

          Session::flash('update_center','Cập nhật thành công !!!!');

          return redirect('/admin/centers');
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
