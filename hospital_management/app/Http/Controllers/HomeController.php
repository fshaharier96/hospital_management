<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){

                $doctor=Doctor::all();
                return view('user.home',compact('doctor'));
            }else{
                return view('admin.home');
            }


        }else{
            return redirect()->back();
        }
    }

    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
        else{
        $doctor=Doctor::all();
        return view('user.home',compact('doctor'));
        }
    }

  public function myappointment(){
        if(Auth::id()){
            $userId=Auth::id();
            $appoint=Appointment::where('user_id',$userId)->get();
            return view('user.my_appointment',compact('appoint'));
        }else{
            return redirect()->back();
        }

  }

  public function cancel_appoint($id){
    $data=Appointment::find($id);
    $data->delete();
    return redirect()->back();
  }

    public function appointment(Request $request){
        $appointData=new Appointment();
        $appointData->name=$request->name;
        $appointData->email=$request->email;
        $appointData->date=$request->date;
        $appointData->phone=$request->phone;
        $appointData->message=$request->message;
        $appointData->doctor=$request->doctor;
        $appointData->status='In progress';
        if(Auth::id()){
            $appointData->user_id=Auth::id();
        }
        $appointData->save();
        return redirect()->back()->with('message','Appointment request successful. We will contact you soon');

    }
}
