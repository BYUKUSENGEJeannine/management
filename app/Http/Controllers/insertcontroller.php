<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\administration_table;


class insertcontroller extends Controller
{
    public function Adduser()
    {
        return view("userform");

    }
    public function storeUser(Request $request){
    
$object=new administration_table();
$object->fname=$request->fname;
$object->lname=$request->lname ;
$object->username=$request->username ;
$object->password=$request->password ;
$object->category=$request->category ;
$object->save();

//return redirect()->view('adduser')

//->with('success','Product created successfully.');

    }
}
