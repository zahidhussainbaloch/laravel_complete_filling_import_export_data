<?php

namespace App\Imports;

use App\Models\User;
use App\Models\students;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //echo "<pre/>";
        //print_r($row);

        session()->flash('message', 'User Imported  SuccessFully Into Database..!');
         //return redirect('/');


        return new students([
            //
                    'name'          => $row[1],
                    'email'         => $row[2], 
                    'phone_number'  => $row[4], 
                    'nic_number'    => $row[5], 
                    'city'          => $row[6], 
                    'full_addres'   => $row[7], 
                    'password'      => \Hash::make($row[3]),
        ]);
    }
}
