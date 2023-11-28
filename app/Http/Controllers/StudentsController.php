<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;
use DataTables; 

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        /* echo "<pre>";   
        $data = students::latest()->get();
            print_r($data);
             die();*/

            if ($request->ajax()) { 

            $data = students::latest()->get(); 
            return Datatables::of($data) 

                    ->addIndexColumn() 

                    ->addColumn('action', function($row){ 



                        $btn = '<a href="/delete_data/'.$row->id.'"  class="edit btn btn-danger btn-lg">Delete</a>||<a href="/edite_data/'.$row->id.'" class="edit btn btn-warning btn-lg">Edite</a>'; 

                        return $btn; 

                    })->rawColumns(['action'])->make(true); 

        } 

 

        return view('dashboard'); 



 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("add_form");
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

        // echo "<pre>";

        // print_r($request->input());

        // die();

        $result                 = new students;
        $result->name           = $request->input('name');
        $result->email          = $request->input('email');
        $result->password       = $request->input('pwd');
        $result->phone_number   = $request->input('phone_number');
        $result->nic_number     = $request->input('nic');
        $result->city           = $request->input('city');
        $result->full_addres    = $request->input('address');
        $result->save();


        session()->flash('message', 'User Added SuccessFully');
         return redirect('/');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(students $students,$id)
    {
        //
        //echo $id;

        $result=students::find(['id'=>$id])->all();

        //echo "<pre>";
        //print_r($result);

        return view('edit_form',['data'=>$result]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, students $students,$id)
    {
        //

        // echo "<pre>";
        // print_r($id);
        // die();

        $result                 = students::find($id);
        $result->name           = $request->input('name');
        $result->email          = $request->input('email');
        $result->password       = $request->input('pwd');
        $result->phone_number   = $request->input('phone_number');
        $result->nic_number     = $request->input('nic');
        $result->city           = $request->input('city');
        $result->full_addres    = $request->input('address');
        $result->save();


        session()->flash('message', 'User Updated SuccessFully');
         return redirect('/');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(students $students,$id)
    {
        /*
           echo "<pre>";
           print_r($id);
        echo "destroy";*/

        $result = $res=students::destroy(['id',$id]);

        session()->flash('message', 'User Deleted SuccessFully');
         return redirect('/');
    
    }
}
