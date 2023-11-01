<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModuleController extends Controller
{
    //
    function index(){
        $db =  DB::table("tbmodule")->get();               
        return view('module.index',['modules'=>$db]);        
    }
    function create(){
        return view('module.create');
    }

    public function postCreate(Request $request){
        $sname = $request->sname;
        $lname = $request->lname;
        $hours = $request->hours;
        $fee = $request->fee;


        DB::table('tbmodule')->insert([
            'sname'=> $sname,
            'lname'=> $lname,
            'hours'=> $hours,
            'fee'=> $fee
        ]);        
        return redirect()->action([ModuleController::class,'index']);
    }

    function update($id){
        $rs = DB::table('tbmodule')->find($id);        
        return view('module.update',['module'=> $rs]);
    }

    function delete($id){
       DB::table('tbmodule')->where('id',$id)->delete();
       return redirect()->action([ModuleController::class,'index']);
    }

    function postUpdate(Request $request){
        $id = $request->id;
        $sname = $request->sname;
        $lname = $request->lname;
        $hours = $request->hours;
        $fee =  $request->fee;        
        $rs = DB::table('tbmodule')->where('id',$id)->update([
            'sname' => $sname,
            'lname' => $lname,
            'hours' => $hours,
            'fee' => $fee
        ]);

        return redirect()->action([ModuleController::class,'index']);

        
    }




}
