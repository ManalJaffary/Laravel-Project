<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use App\Models\appointment;
use App\Models\users;
use App\Models\child;
use App\Models\healthcare_center;
use App\Models\child_vaccination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Support\Facades\View;

class parentController extends Controller
{
    //
    public function landingpage(){
        return view('frontend.index');
        }
    public function parent_profile(){
        if(session()->has('user_id')){
            $user=users::find(session()->get('user_id'));
        return view('frontend.myprofile',compact('user'));
        }
}
    public function mychild(){
        $child=child::where('p_id',session()->get('user_id'))->get();
        return view('frontend.familydetails',compact('child'));
}
public function updateparent(Request $request){
    $user=users::find(session()->get('user_id'));
    if($user){
        $user->firstname=$request->input('fname');
        $user->lastname=$request->input('lname');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->gender=$request->input('gender');
        $user->phone_number=$request->input('phone');
        $user->cnic=$request->input('cnic');
        $user->address=$request->input('address');
        $user->postal_code=$request->input('postal');
        $user->area=$request->input('area');
        $user->city=$request->input('city');
        if($user->save()){
            return redirect()->back()->with('success','Account Updated Successfully');
        }
    }
    else{
        return redirect()->back()->with('error','Account Does Not Exist');
    }
}
public function services(){
    return view('frontend.services');
    }
public function child_details($id){
    $child=child::where('id',$id)->first();
    return view('frontend.child_details',compact('child'));
    }
public function nearesthcc(){
        $myuser=users::find(session()->get('user_id'));
        $myhcc=healthcare_center::where('id',$myuser['hcc_id'])->first();
        return view('frontend.nearesthcc',compact('myhcc'));
        }
public function search(Request $request){
        $myuser=users::find(session()->get('user_id'));
        $myhcc=healthcare_center::where('id',$myuser['hcc_id'])->first();
        if($request->input('type')=='Postal Code'){
            $nearesthcc=healthcare_center::where('postal_code','like','%'.$request->input('search').'%')->get();
        }
        if($request->input('type')=='Area'){
            $nearesthcc=healthcare_center::where('area','like','%'.$request->input('search').'%')->get();
        }
        if($request->input('type')=='City'){
            $nearesthcc=healthcare_center::where('city','like','%'.$request->input('search').'%')->get();
        }
        $search=$request->input('search');
        $type=$request->input('type');
        return view('frontend.nearesthcc',compact('nearesthcc','myhcc','search','type'));
        }
public function hccdetails($id){
    $hcc=healthcare_center::where('id',$id)->first();
    return view('frontend.hccdetails',compact('hcc'));
}
public function makeappointment(Request $request){
    date_default_timezone_set("Asia/Karachi");
    $c_date=Carbon::now()->toDateString();
    $a_date=$request->input('date');
    $a_date=str_replace('/','-', $a_date);
    // dd($c_date);
    if($a_date>$c_date){
        $appointment=new appointment();
        $appointment->pid=session()->get('user_id');
        $appointment->hccid=$request->input('hcc_id');
        $appointment->date=$request->input('date');
        $appointment->save();
        if($appointment->save()){
            return redirect('/nearesthcc')->with('success','Appointment Booked Successfully');
        }
        else{
            return redirect('/nearesthcc')->with('error','Error');
        }
    }
    else{
        return redirect('/nearesthcc')->with('error','Appointment Should Be Booked Foremost');
    }


}
public function vaccinationprocess($id){
    // $process=child_vaccination::where('child_id',$id)->get();
    $child=child::find($id);
    $process=DB::table('child_vaccination')
    ->join('users', 'users.id', '=', 'child_vaccination.vaccinator_id')
    ->join('vaccine', 'vaccine.id', '=', 'child_vaccination.vaccine_id')
    ->where('child_vaccination.child_id',$id)
    ->select('child_vaccination.vaccine_date','child_vaccination.next_date','child_vaccination.age','vaccine.name','users.firstname','users.lastname')
    ->get();
    $cid=$id;
    // dd($process);
    if($process){
        return view('frontend.vaccinationprocess',compact('process','cid','child'));
    }
}
public function downloadPDF($id){
    $child=child::where('id',$id)->first();
    $parent=users::find(session()->get('user_id'));
    $data= DB::table('child_vaccination')
    ->join('users', 'users.id', '=', 'child_vaccination.vaccinator_id')
    ->join('vaccine', 'vaccine.id', '=', 'child_vaccination.vaccine_id')
    ->where('child_vaccination.child_id',$id)
    ->select('child_vaccination.vaccine_date','child_vaccination.next_date','child_vaccination.age','vaccine.name','users.firstname','users.lastname')
    ->get()->toArray();
    View::share('data', $data);
    View::share('child', $child);
    View::share('parent', $parent);

    // dd($data);
    $pdf = PDF::loadView('pdf-file');

    return $pdf->download('vacccard.pdf');
}
public function generatecard($id) {
    $child=child::where('id',$id)->first();
    $parent=users::find(session()->get('user_id'));
    $process=DB::table('child_vaccination')
    ->join('users', 'users.id', '=', 'child_vaccination.vaccinator_id')
    ->join('vaccine', 'vaccine.id', '=', 'child_vaccination.vaccine_id')
    ->where('child_vaccination.child_id',$id)
    ->select('child_vaccination.vaccine_date','child_vaccination.next_date','child_vaccination.age','vaccine.name','users.firstname','users.lastname')
    ->get();
    $cid=$id;
    // dd($process);
    if($process){
        return view('frontend.card',compact('process','cid','child','parent'));
    }
  }
  public function insertpChild(Request $request){
    $parent=users::find(session()->get('user_id'));
    $child=new child();
    $child->firstname=$request->input('fname');
    $child->lastname=$request->input('lname');
    $child->dob=$request->input('dob');
    $child->gender=$request->input('gender');
    // $child->card_id=$child->id;
    $child->p_id=$parent->id;
    $child->h_id=$parent->hcc_id;
    $child->status=$request->input('status');
    if($child->save()){
        return redirect()->back()->with('success','Child Registered Successfully');
    }
}
public function removechild($id){
    $child=child::where('id',$id);
    if($child->delete()){
        return redirect()->back();
     }
}
public function editchild($id){
    $child=child::where('id',$id)->first();
    return view('frontend.editchild',compact('child'));
}
public function updatechild(Request $request){
    $child=child::where('id',$request->input('id'))->first();
    if($child){
    $child->firstname=$request->input('fname');
    $child->lastname=$request->input('lname');
    $child->dob=$request->input('dob');
    $child->gender=$request->input('gender');
    if($child->save()){
        return redirect()->back();
    }
}
}

}
