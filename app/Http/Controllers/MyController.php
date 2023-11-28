<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\UsersExport;

use App\Imports\UsersImport;

use Maatwebsite\Excel\Facades\Excel;



class MyController extends Controller
{
    
     public function importExportView()

    {

       return view('import');

    }
    
        public function export() 

    {

        return Excel::download(new UsersExport, 'Students.xlsx');

    }

        public function import() 

    {

        Excel::import(new UsersImport,request()->file('file'));

             

        return back();

    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }

}
