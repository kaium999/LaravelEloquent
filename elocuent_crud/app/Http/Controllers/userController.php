<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use App\Models\company;
class userController extends Controller
{
    function userinfo(){
        $data=employee::all();
        return view('userView',compact('data'));
    }
    function userinputview(){
       return view('UserInfo');
    }
    function userinputsave(Request $req){
       $employee=new employee(); 
       $employee->ename=$req->name;
       $employee->email=$req->email;
      
       $employee->eaddress=$req->address;
       //$employee->company->cname=$req->companyname;
       $employee->save();
       $com=new company();
       $com->cname=$req->companyname;
       $employee->company()->save($com);

    }
    function editShow($id){
        //return $id;
        $data=employee::find($id);
        //return $data;
        return view('employeEdit',compact('data'));
    }
    function updateEmployee(Request $req){
        $data=employee::find($req->id);
        $data->ename=$req->name;
        $data->email=$req->email;
        $data->eaddress=$req->eaddress;
        $data->company->cname=$req->companyname;
        //echo $data->company->cname;
        $data->push();
        return redirect('userView');
    }
    function deleteemployee($id){
        $data=employee::find($id);
        $data->company->delete();
        return redirect('userView');
        echo"Delete succsssfully";
    }
}
