<?php

namespace App\Http\Controllers;


use App\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class AdminOwnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $owners = Owner::all();
        return view('admin.owner.index',compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.owner.create');
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
        $file = $request->file('logo');

         if ($file) {
             $name = $file->getClientOriginalName();
             $file->move('images',$name);
             $input['logo'] = $name;
         }

         Owner::create($input);

         Session::flash('create_owner','Tạo thành công !!!!');

         return redirect('/admin/owners');
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
        $owner = Owner::findOrFail($id);
        return view('admin.owner.edit',compact('owner'));
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
        $owner = Owner::findOrFail($id);
        $input = $request->all();
        $file  = $request->file('logo');

        if($file){
               unlink(public_path().$owner->logo);        

                 $name = $file->getClientOriginalName();
                 $file->move('images',$name);
                 $input['logo'] = $name;        

                 
 
        }else {

            $input['logo']  = $owner->logo;
        }

          $owner->update($input);

          Session::flash('update_owner','Cập nhật thành công !!!!');

          return redirect('/admin/owners');       



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $owner = Owner::findOrFail($id);


        unlink(public_path().$owner->logo); 


        $owner->delete();


        Session::flash('deleted_owner','Xóa Owner Thành công');


        return redirect('/admin/owners');
       
        


    }
}
