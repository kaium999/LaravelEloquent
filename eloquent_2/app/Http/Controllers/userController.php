<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\department;
class userController extends Controller
{
    function userview(){
        $data=student::all();
        //return $data;
        return view('UserView',compact('data'));
    }
    function userinput(){
        return view('UserInput');
    }
    function userinsert(Request $req){
        $student=New student();
        $student->sname=$req->name;
        $student->semail=$req->email;
        $student->saddress=$req->address;

        $student->save();
       $depart=new department();
       $depart->dname=$req->departmentname;
       $student->department()->save($depart);

        return redirect('userview');
    }
    function userdelete($id){
        $data=student::find($id);
        $data->delete();
        return redirect('userview');
    }

    function editShow($id){
        //return $id;
        $data=student::find($id);
        //return $data;
        return view('studentEdit',compact('data'));
    }
    function updateEmployee(Request $req){
        $data=student::find($req->id);
        $data->sname=$req->name;
        $data->semail=$req->email;
        $data->saddress=$req->eaddress;
        $data->department->dname=$req->departmentname;
        //echo $data->company->cname;
        $data->push();
        return redirect('userview');
    }
}
