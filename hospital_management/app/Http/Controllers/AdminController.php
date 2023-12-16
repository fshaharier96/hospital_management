<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PhpParser\Comment\Doc;

class AdminController extends Controller
{
    public function addView(){
        return view('admin.add_doctor');
    }
    public function upload(Request $request){

        $doctor=new Doctor();
        $image=$request->file('file');
        $imagename=time().".".$image->getClientOriginalExtension();
        $request->file('file')->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;
        $doctor->save();
        return redirect()->back()->with('message','Doctor is added successfully !');

    }

public function showappointment(){
        $data=Appointment::all();
 return view('admin.showappointment',compact('data'));

}
public function approved($id){
  $data=Appointment::find($id);
  $data->status='approved';
  $data->save();
  return redirect()->back();
}
public function cancelled($id){
    $data=Appointment::find($id);
    $data->status='cancelled';
    $data->save();
    return redirect()->back();
}
public function showdoctor()
{
    $data=Doctor::all();
    return view("admin.showdoctor",compact('data'));
}
public function delete_doctor($id){
  $data=Doctor::find($id);
  $data->delete();
  return redirect()->back();
}
public function update_doctor($id){

    $data=Doctor::find($id);
    return view('admin.update_doctor',compact('data'));
}
public function edit_doctor(Request $request,$id){
        $data=Doctor::find($id);
        $data->name=$request->name;
        $data->phone=$request->phone;
    $data->speciality=$request->speciality;
    $data->room=$request->room;
    $image=$request->file('file');
    if($image){
    $imagename=time().".".$image->getClientOriginalExtension();
    $request->file('file')->move('doctorimage',$imagename);
    $data->image=$imagename;
    }
    $data->save();
    return redirect('/showdoctor');

}

}
