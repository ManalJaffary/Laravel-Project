<?php

namespace App\Http\Controllers;

use App\Mail\notification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

use App\Models\healthcare_center;
use App\Models\users;
use App\Models\child;
use App\Models\vaccine;
use App\Models\vaccine_process;
use App\Models\appointment;
use App\Models\child_vaccination;
use Illuminate\Support\Facades\DB;
use PDF;


use Illuminate\Http\Request;

class maincontroller extends Controller
{
    //

    public function index(){
        if(session()->has('user_id')){
            if(session()->get('user_type')=='Admin'){
                $hccCount = healthcare_center::count();
                $vaccinatorCount = users::where('type','Vaccinator')->count();
                $parentCount = users::where('type','Parent')->count();
                $childCount = child::count();
                return view("user.index",compact('hccCount','vaccinatorCount','parentCount','childCount'));
            }
            else if(session()->get('user_type')=='Vaccinator')
            {
                $vaccinator = DB::table('users')->where('id',session()->get('user_id') )->first();
                $parents=users::where('type','Parent')->where('hcc_id',$vaccinator->hcc_id)->count();
                $child=child::where('h_id',$vaccinator->hcc_id)->count();
                return view("user.index",compact('parents','child'));
            }
            else if(session()->get('user_type')=='Parent')
            {
                return view("frontend.index");
            }
       }
        elseif(session()->has('hcc_id')){
            $vaccinatorCount = users::where('type','Vaccinator')->where('hcc_id',session()->get('hcc_id'))->count();
            $parentCount = users::where('type','Parent')->where('hcc_id',session()->get('hcc_id'))->count();
            $childCount = child::where('h_id',session()->get('hcc_id'))->count();
            return view("hcc.index",compact('vaccinatorCount','parentCount','childCount'));
        }
        else{
            return view("user.login");
        }
    }
    public function login(){
        return view('user.login');
    }
    public function error(){
        return view('404_error');
    }
    public function loginUser(Request $request){
        $user=users::where('email',$request->input('email'))->where('password',$request->input('password'))->where('status','Verified')->first();
        $hcc=healthcare_center::where('email',$request->input('email'))->where('password',$request->input('password'))->where('status','Verified')->first();
        if($user){
            session()->put('user_id',$user->id);
            session()->put('user_type',$user->type);
            return redirect('/index');
        }
        elseif($hcc){
            session()->put('hcc_id',$hcc->id);
            return redirect('/index');
        }
        else{
            return redirect()->back()->with('error','Email/Password is incorrect');
        }
    }
    public function logout(){
        if(session()->has('user_id')){
            session()->forget('user_id');
            session()->forget('user_type');
        }
        elseif(session()->has('hcc_id')){
            session()->forget('hcc_id');
        }
        return redirect('/');
    }
    public function register(){
        return view('user.register');
    }
    public function insert(Request $request){
        $hcc=healthcare_center::where('reg_number',$request->input('reg'))->first();
        if($hcc==null){
            $hcc=new healthcare_center();
            $hcc->name=$request->input('name');
            $hcc->email=$request->input('email');
            $hcc->password=$request->input('password');
            $hcc->phone_number=$request->input('phone');
            $hcc->reg_number=$request->input('reg');
            $hcc->address=$request->input('address');
            $hcc->postal_code=$request->input('postal');
            $hcc->area=$request->input('area');
            $hcc->city=$request->input('city');
            $hcc->admin_id=session()->get('user_id');
            $hcc->type='Healthcare_center';
            $hcc->status='Verified';
            $hcc->profile_picture=$request->file('file')->getClientOriginalName();
            if($hcc->save()){
                $request->file('file')->move('uploads/hcc/',$hcc->profile_picture);
                return redirect()->back()->with('success','Healthcare Center Registered Successfully');
            }
        }
        else{
            return redirect()->back()->with('error','Healthcare Center Already Exist');
        }
    }
    public function insertUsers(Request $request){
        $user=users::where('cnic',$request->input('cnic'))->first();
        if($user==null){
            $user=new users();
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
            $user->hcc_id=session()->get('hcc_id');
            $user->type=$request->input('type');
            $user->status=$request->input('status');
            $user->profile_picture=$request->file('file')->getClientOriginalName();
            if($user->save()){
                $request->file('file')->move('uploads/users/',$user->profile_picture);
                return redirect()->back()->with('success','User Registered Successfully');
            }
        }
        else{
            return redirect()->back()->with('error','Healthcare Center Already Exist');
        }
    }
    public function insertChild(Request $request){
            $child=new child();
            $child->firstname=$request->input('fname');
            $child->lastname=$request->input('lname');
            $child->dob=$request->input('dob');
            $child->gender=$request->input('gender');
            // $child->card_id=$child->id;
            $child->p_id=$request->input('p_id');
            $child->h_id=session()->get('hcc_id');
            $child->status=$request->input('status');
            if($child->save()){
                return redirect()->back()->with('success','Child Registered Successfully');
            }
        }
    public function insertVaccine(Request $request){
            $vaccine=new vaccine();
            $vaccine->name=$request->input('name');
            $vaccine->description=$request->input('description');
            $vaccine->quantity=$request->input('quantity');
            $vaccine->hcc_id=session()->get('hcc_id');
            if($vaccine->save()){
                return redirect()->back()->with('success','Vaccine Added Successfully');
            }
            else{
                return redirect()->back()->with('error','Not Added');
            }
    }
    public function insertVaccineprocess(Request $request){
        $vaccineprocess=new vaccine_process();
        $vaccineprocess->v_id=$request->input('id');
        $vaccineprocess->valid_age=$request->input('valid_age');
        $vaccineprocess->dose=$request->input('dose');
        if($vaccineprocess->save()){
            return redirect()->back()->with('success','Vaccine Process Added Successfully');
        }
        else{
            return redirect()->back()->with('error','Not Added');
        }
}
    public function editVaccine(Request $request){
        $vaccine=vaccine::where('id',$request->input('id'))->first();
        if($vaccine){
            $vaccine->name=$request->input('name');
            $vaccine->description=$request->input('description');
            $vaccine->quantity=$request->input('quantity');
            if($vaccine->save()){
                return redirect()->back()->with('success','Vaccine Edited Successfully');
            }
            else{
                return redirect()->back()->with('error','Not Edited');
            }
        }
        else{
            return redirect()->back()->with('error','Vaccine Does Not Exist');
        }
}
    public function editVaccineprocess(Request $request){
        $vaccineprocess=vaccine_process::where('id',$request->input('id'))->first();
        if($vaccineprocess){
            $vaccineprocess->valid_age=$request->input('valid_age');
            $vaccineprocess->dose=$request->input('dose');
            if($vaccineprocess->save()){
                return redirect()->back()->with('success','Vaccine Process Edited Successfully');
            }
            else{
                return redirect()->back()->with('error','Not Edited');
            }
        }
        else{
            return redirect()->back()->with('error','Vaccine Process Does Not Exist');
        }
}
    public function edit_vaccine($id){
        $vaccine=vaccine::where('id',$id)->first();
        return view('vaccine.editvaccine',compact('vaccine'));
    }
    public function edit_vaccineprocess($id){
        $vaccineprocess=vaccine_process::where('id',$id)->first();
        return view('vaccine.editvaccineprocess',compact('vaccineprocess'));
    }
    public function vaccineprocess($id){
        $v_id=$id;
        $vaccineprocess=DB::table('vaccine_process')
        ->join('vaccine','vaccine.id','vaccine_process.v_id')
        ->select('vaccine_process.*','vaccine.name')
        ->where('vaccine_process.v_id',$id)
        ->get();
        return view('vaccine.vaccineprocess',compact('vaccineprocess','v_id'));
    }
    public function profile(){
        if(session()->has('user_id')){
            $user=users::find(session()->get('user_id'));
        return view('user.profile',compact('user'));
        }
        if(session()->has('hcc_id')){
            $hcc=healthcare_center::find(session()->get('hcc_id'));
        return view('hcc.profile',compact('hcc'));
        }
    }
    public function updateUser(Request $request){
        $user=users::find(session()->get('user_id'));
        $hcc=healthcare_center::find(session()->get('hcc_id'));
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
            if($request->file('file')!=null){
                $user->profile_picture=$request->file('file')->getClientOriginalName();
            }
            if($user->save()){
                if($request->file('file')!=null){
                    $request->file('file')->move('uploads/user/',$user->profile_picture);
                }
                return redirect()->back()->with('success','Account Updated Successfully');
            }
        }
        elseif($hcc){
            $hcc->name=$request->input('name');
            $hcc->email=$request->input('email');
            $hcc->password=$request->input('password');
            $hcc->phone_number=$request->input('phone');
            $hcc->reg_number=$request->input('reg');
            $hcc->address=$request->input('address');
            $hcc->postal_code=$request->input('postal');
            $hcc->area=$request->input('area');
            $hcc->city=$request->input('city');
            if($request->file('file')!=null){
                $hcc->profile_picture=$request->file('file')->getClientOriginalName();
            }
            if($hcc->save()){
                if($request->file('file')!=null){
                    $request->file('file')->move('uploads/hcc/',$hcc->profile_picture);
                }
                return redirect()->back()->with('success','Account Updated Successfully');
            }
        }
        else{
            return redirect()->back()->with('error','Account Does Not Exist');
        }
}
    public function updatehcc(Request $request){
        $hcc=healthcare_center::where('id',$request->input('id'))->first();
        if($hcc){
            $hcc->name=$request->input('name');
            $hcc->email=$request->input('email');
            $hcc->password=$request->input('password');
            $hcc->phone_number=$request->input('phone');
            $hcc->reg_number=$request->input('reg');
            $hcc->address=$request->input('address');
            $hcc->postal_code=$request->input('postal');
            $hcc->area=$request->input('area');
            $hcc->city=$request->input('city');
            if($request->file('file')!=null){
                $hcc->profile_picture=$request->file('file')->getClientOriginalName();
            }
            if($hcc->save()){
                if($request->file('file')!=null){
                    $request->file('file')->move('uploads/hcc/',$hcc->profile_picture);
                }
                return redirect()->back()->with('success','Account Updated Successfully');
            }
        }
        else{
            return redirect()->back()->with('error','Account Does Not Exist');
        }
}
    public function updateUsers(Request $request){
        $user=users::where('id',$request->input('id'))->first();
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
            if($request->file('file')!=null){
                $user->profile_picture=$request->file('file')->getClientOriginalName();
            }
            if($user->save()){
                if($request->file('file')!=null){
                    $request->file('file')->move('uploads/users/',$user->profile_picture);
                }
                return redirect()->back()->with('success','Account Updated Successfully');
            }
        }
        else{
            return redirect()->back()->with('error','Account Does Not Exist');
        }
}
public function hccusers(){
    $hccuser=healthcare_center::where('admin_id',session()->get('user_id'))->get();
    return view('user.hcc_users',compact('hccuser'));
}
public function childlist(){
    if(session()->has('user_id')){
        if(session()->get('user_type')=='Admin'){
            $child=child::all();
            return view('child.childlist',compact('child'));
       }
        elseif(session()->get('user_type')=='Vaccinator'){
            $child=DB::table('child')
            ->join('users','users.hcc_id','child.h_id')
            ->select('child.*','users.hcc_id')
            ->where('users.id',session()->get('user_id'))
            ->get();
            // $user=users::find(session()->get('user_id'))->first();
            // $child=child::where('h_id',$user['hcc_id'])->get();
            return view('child.specificchildlist',compact('child'));
        }
    }
    if(session()->has('hcc_id')){
        $child=child::where('h_id',session()->get('hcc_id'))->get();
        return view('child.childlist',compact('child'));
    }
}
public function registerchild(){
    return view('child.registerchild');
}
public function add_vaccine(){
    return view('vaccine.add_vaccine');
}
public function vaccinator_users(){
    $vaccinator=users::where('type','Vaccinator')->where('hcc_id',session()->get('hcc_id'))->get();
    return view('hcc.vaccinator_users',compact('vaccinator'));
}
public function parent_users(){
    $parent=users::where('type','Parent')->get();
    return view('hcc.parent_users',compact('parent'));
}
public function a_parent_users($id){
    $parent=users::where('type','Parent')->where('hcc_id',$id)->get();
    return view('user.a_parent_users',compact('parent'));
}
public function a_vaccinator_users($id){
    $vaccinator=users::where('type','Vaccinator')->where('hcc_id',$id)->get();
    return view('user.a_vaccinator_users',compact('vaccinator'));
}
public function verify($id){
    $hcc=healthcare_center::where('id',$id)->first();
    $hcc->status="Verified";
    $hcc->save();
    return redirect()->back();
}
public function verifyUsers($id){
    $user=users::where('id',$id)->first();
    $user->status="Verified";
    $user->save();
    return redirect()->back();
}
public function block($id){
    $hcc=healthcare_center::where('id',$id)->first();
    $hcc->status="Blocked";
    $hcc->save();
    return redirect()->back();
}
public function blockUsers($id){
    $user=users::where('id',$id)->first();
    $user->status="Blocked";
    $user->save();
    return redirect()->back();
}
public function unblock($id){
    $hcc=healthcare_center::where('id',$id)->first();
    $hcc->status="Verified";
    $hcc->save();
    return redirect()->back();
}
public function unblockUsers($id){
    $user=users::where('id',$id)->first();
    $user->status="Verified";
    $user->save();
    return redirect()->back();
}
public function remove($id){
    $hcc=healthcare_center::where('id',$id)->first();
    $hcc->status="Deleted";
    $hcc->save();
    return redirect()->back();
}
public function removeUsers($id){
    $user=users::where('id',$id)->first();
    $user->status="Deleted";
    $user->save();
    return redirect()->back();
}
public function viewdetails($id){
    $hcc=healthcare_center::where('id',$id)->first();
    return view('user.viewdetails',compact('hcc'));
}
public function viewdetailsUsers($id){
    $user=users::where('id',$id)->first();
    $child=DB::table('child')
    ->join('users','users.id','child.p_id')
    ->select('child.*','users.firstname as fname','users.lastname as lname')
    ->where('child.p_id',$id)
    ->get();
    return view('hcc.viewdetails',compact('user','child'));
}
public function viewdetailschild($id){
    //$child=child::where('id',$id)->first();
    $child=DB::table('child')
    ->join('users','users.id','child.p_id')
    ->select('child.*','users.firstname as fname','users.lastname as lname','users.cnic','users.phone_number')
    ->where('child.id',$id)
    ->first();
    return view('child.viewdetailschild',compact('child'));
}
public function viewdetailsAllusers($id){
    $user=users::where('id',$id)->first();
    $child=DB::table('child')
    ->join('users','users.id','child.p_id')
    ->select('child.*','users.firstname as fname','users.lastname as lname')
    ->where('child.p_id',$id)
    ->get();
    return view('user.viewdetailsAllusers',compact('user','child'));
}
public function a_vaccine_record(){
    if(session()->get('user_type')=='Admin'){
        $vaccine=DB::table('vaccine')
        ->join('healthcare_center','healthcare_center.id','vaccine.hcc_id')
        ->select('vaccine.*','healthcare_center.name as hcc_name')
        ->get();
        return view('vaccine.a_vaccine_record',compact('vaccine'));
    }
    if(session()->get('user_type')=='Vaccinator'){
        $user = DB::table('users')->where('id',session()->get('user_id') )->first();
        $vaccine=vaccine::where('hcc_id',$user->hcc_id)->get();
        return view('vaccine.vaccine_record',compact('vaccine'));
    }
}
public function vaccine_record(){
    $vaccine=vaccine::where('hcc_id',session()->get('hcc_id'))->get();
    return view('vaccine.vaccine_record',compact('vaccine'));
}
public function vaccinerecord($id){
    $vaccine=vaccine::where('hcc_id',$id)->get();
    return view('vaccine.vaccine_record',compact('vaccine'));
}
public function editprofile(){
    if(session()->has('user_id')){
        $user=users::find(session()->get('user_id'));
    return view('user.editprofile',compact('user'));
    }
    if(session()->has('hcc_id')){
        $hcc=healthcare_center::find(session()->get('hcc_id'));
    return view('hcc.editprofile',compact('hcc'));
    }
}
public function editprofilehcc($id){
    $hcc=healthcare_center::where('id',$id)->first();
    return view('user.editprofilehcc',compact('hcc'));
}
public function editprofileUsers($id){
    $user=users::where('id',$id)->first();
    return view('hcc.editprofileUsers',compact('user'));
}
public function editprofileAllusers($id){
    $user=users::where('id',$id)->first();
    return view('user.editprofileAllusers',compact('user'));
}
public function appointments(){
    date_default_timezone_set("Asia/Karachi");
    $c_date=Carbon::now()->toDateString();
    if(session()->has('user_id')){
    $user=users::find(session()->get('user_id'));
    $appointments=DB::table('appointment')
    ->join('users','users.id','appointment.pid')
    ->select('appointment.*','users.firstname','users.lastname','users.email','users.cnic','users.phone_number','users.postal_code')
    ->where('date',$c_date)
    ->where('appointment.hccid',$user->hcc_id)
    ->get();
    }
    if(session()->has('hcc_id')){
        $appointments=DB::table('appointment')
        ->join('users','users.id','appointment.pid')
        ->select('appointment.*','users.firstname','users.lastname','users.email','users.cnic','users.phone_number','users.postal_code')
        ->where('date',$c_date)
        ->where('appointment.hccid',session()->get('hcc_id'))
        ->get();
    }
    // $appointments=appointment::where('date',$c_date)->get();
    return view('hcc.appointments',compact('appointments'));
}
public function removeappointment($id){
    $appointment=appointment::where('id',$id);
    if($appointment->delete()){
        return redirect()->back()->with('success',"Appointment Completed!");
     }
}
public function updatevaccination($id){
    $user=users::find(session()->get('user_id'));
    $child=child::find($id);
    date_default_timezone_set("Asia/Karachi");
    $c_date=Carbon::now()->toDateString();
    if($child['age']==0){
        $newDate = Carbon::now()->addMonths(2)->toDateString();
        $vaccinations=DB::table('vaccine_process')
        ->join('vaccine','vaccine.id','vaccine_process.v_id')
        ->select('vaccine.name','vaccine.id as v_id','vaccine_process.valid_age','vaccine_process.v_id','vaccine_process.id')
        ->where('vaccine.hcc_id',$user['hcc_id'])
        ->where('vaccine_process.valid_age',$child['age'])
        ->get();
        $parent=users::find($child->p_id);
        $details=[
            'msg'=>'Dear '.$parent->firstname.", "."Your child's Next Vaccination Date is: ".$newDate
        ];
        Mail::to($parent->email)->send(new notification($details));
        foreach($vaccinations as $vaccination){
            $vacc=new child_vaccination();
            $vacc->vaccine_id=$vaccination->v_id;
            $vacc->child_id=$id;
            $vacc->vaccinator_id=session()->get('user_id');
            $vacc->vaccine_date=$c_date;
            $vacc->vp_id=$vaccination->id;
            $vacc->age=$child->age;
            $vacc->next_date=$newDate;
            $vacc->save();
            $vaccinedetails=vaccine::find($vaccination->v_id);
            $vaccinedetails['quantity']-=1;
            $vaccinedetails->save();
        }
        $child->age+=2;
        $child->save();
    }
    else if($child['age']==2){
        $vaccinations=DB::table('vaccine_process')
        ->join('vaccine','vaccine.id','vaccine_process.v_id')
        ->select('vaccine.name','vaccine.id as v_id','vaccine.quantity','vaccine_process.valid_age','vaccine_process.v_id','vaccine_process.id')
        ->where('vaccine.hcc_id',$user['hcc_id'])
        ->where('vaccine_process.valid_age',$child['age'])
        ->get();
        $ch =child_vaccination::where('child_id',$id)->where('age',$child['age']==0)->first();
        $newDate=$ch['next_date'];
        if($c_date>=$newDate){
            $parent=users::find($child->p_id);
            $details=[
                'msg'=>'Dear '.$parent->firstname.", "."Your child's Next Vaccination Date is: ".$newDate
            ];
            Mail::to($parent->email)->send(new notification($details));
            foreach($vaccinations as $vaccination){
                $vacc=new child_vaccination();
                $vacc->vaccine_id=$vaccination->v_id;
                $vacc->child_id=$id;
                $vacc->vaccinator_id=session()->get('user_id');
                $vacc->vaccine_date=$c_date;
                $vacc->vp_id=$vaccination->id;
                $vacc->age=$child->age;
                $vacc->next_date=$newDate;
                $vacc->save();
                $vaccinedetails=vaccine::find($vaccination->v_id);
                $vaccinedetails['quantity']-=1;
                $vaccinedetails->save();
            }
            $child->age+=2;
            $child->save();
        }
        else{
            return redirect()->back()->with('error',"Error: Under Age!");
        }

    }
    else if($child['age']==4){
        $vaccinations=DB::table('vaccine_process')
        ->join('vaccine','vaccine.id','vaccine_process.v_id')
        ->select('vaccine.name','vaccine.id as v_id','vaccine.quantity','vaccine_process.valid_age','vaccine_process.v_id','vaccine_process.id')
        ->where('vaccine.hcc_id',$user['hcc_id'])
        ->where('vaccine_process.valid_age',$child['age'])
        ->get();
        $ch =child_vaccination::where('child_id',$id)->where('age',$child['age']==2)->first();
        $newDate=$ch['next_date'];
        if($c_date>=$newDate){
        $parent=users::find($child->p_id);$details=[
            'msg'=>'Dear '.$parent->firstname.", "."Your child's Next Vaccination Date is: ".$newDate
        ];
        Mail::to($parent->email)->send(new notification($details));
        foreach($vaccinations as $vaccination){
            $vacc=new child_vaccination();
            $vacc->vaccine_id=$vaccination->v_id;
            $vacc->child_id=$id;
            $vacc->vaccinator_id=session()->get('user_id');
            $vacc->vaccine_date=$c_date;
            $vacc->vp_id=$vaccination->id;
            $vacc->age=$child->age;
            $vacc->next_date=$newDate;
            $vacc->save();
            $vaccinedetails=vaccine::find($vaccination->v_id);
            $vaccinedetails['quantity']-=1;
            $vaccinedetails->save();
        }
        $child->age+=2;
        $child->save();
    }
    else{
        return redirect()->back()->with('error',"Error: Under Age!");
    }
    }
    else if($child['age']==6){
        $vaccinations=DB::table('vaccine_process')
        ->join('vaccine','vaccine.id','vaccine_process.v_id')
        ->select('vaccine.name','vaccine.id as v_id','vaccine.quantity','vaccine_process.valid_age','vaccine_process.v_id','vaccine_process.id')
        ->where('vaccine.hcc_id',$user['hcc_id'])
        ->where('vaccine_process.valid_age',$child['age'])
        ->get();
        $ch =child_vaccination::where('child_id',$id)->where('age',$child['age']==4)->first();
        $newDate=$ch['next_date'];
        if($c_date>=$newDate){
        $parent=users::find($child->p_id);
        $details=[
            'msg'=>'Dear '.$parent->firstname.", "."Your child's Next Vaccination Date is: ".$newDate
        ];
        Mail::to($parent->email)->send(new notification($details));
        foreach($vaccinations as $vaccination){
            $vacc=new child_vaccination();
            $vacc->vaccine_id=$vaccination->v_id;
            $vacc->child_id=$id;
            $vacc->vaccinator_id=session()->get('user_id');
            $vacc->vaccine_date=$c_date;
            $vacc->vp_id=$vaccination->id;
            $vacc->age=$child->age;
            $vacc->next_date=$newDate;
            $vacc->save();
            $vaccinedetails=vaccine::find($vaccination->v_id);
            $vaccinedetails['quantity']-=1;
            $vaccinedetails->save();
        }
        $child->age+=3;
        $child->save();
    }
    else{
        return redirect()->back()->with('error',"Error: Under Age!");
    }
    }
   else if($child['age']==9){
        $vaccinations=DB::table('vaccine_process')
        ->join('vaccine','vaccine.id','vaccine_process.v_id')
        ->select('vaccine.name','vaccine.id as v_id','vaccine.quantity','vaccine_process.valid_age','vaccine_process.v_id','vaccine_process.id')
        ->where('vaccine.hcc_id',$user['hcc_id'])
        ->where('vaccine_process.valid_age',$child['age'])
        ->get();
        $ch =child_vaccination::where('child_id',$id)->where('age',$child['age']==6)->first();
        $newDate=$ch['next_date'];
        if($c_date>=$newDate){
        $parent=users::find($child->p_id);
        $details=[
            'msg'=>'Dear '.$parent->firstname.", "."Your child's Next Vaccination Date is: ".$newDate
        ];
        Mail::to($parent->email)->send(new notification($details));
        foreach($vaccinations as $vaccination){
            $vacc=new child_vaccination();
            $vacc->vaccine_id=$vaccination->v_id;
            $vacc->child_id=$id;
            $vacc->vaccinator_id=session()->get('user_id');
            $vacc->vaccine_date=$c_date;
            $vacc->vp_id=$vaccination->id;
            $vacc->age=$child->age;
            $vacc->next_date=$newDate;
            $vacc->save();
            $vaccinedetails=vaccine::find($vaccination->v_id);
            $vaccinedetails['quantity']-=1;
            $vaccinedetails->save();
        }
        $child->age+=6;
        $child->save();
    }
    else{
        return redirect()->back()->with('error',"Error: Under Age!");
    }
    }
   else if($child['age']==15){
        $vaccinations=DB::table('vaccine_process')
        ->join('vaccine','vaccine.id','vaccine_process.v_id')
        ->select('vaccine.name','vaccine.id as v_id','vaccine.quantity','vaccine_process.valid_age','vaccine_process.v_id','vaccine_process.id')
        ->where('vaccine.hcc_id',$user['hcc_id'])
        ->where('vaccine_process.valid_age',$child['age'])
        ->get();
        $parent=users::find($child->p_id);
        $details=[
            'msg'=>'Dear '.$parent->firstname.", "."Your child is fully vaccinated now!"
        ];
        Mail::to($parent->email)->send(new notification($details));
        foreach($vaccinations as $vaccination){
            $vacc=new child_vaccination();
            $vacc->vaccine_id=$vaccination->v_id;
            $vacc->child_id=$id;
            $vacc->vaccinator_id=session()->get('user_id');
            $vacc->vaccine_date=$c_date;
            $vacc->vp_id=$vaccination->id;
            $vacc->age=$child->age;
            $vacc->next_date="completed";
            $vacc->save();
            $vaccinedetails=vaccine::find($vaccination->v_id);
            $vaccinedetails['quantity']-=1;
            $vaccinedetails->save();
        }
        $child->status="Vaccinated";
        $child->age+=1;
        $child->save();
    }
        return redirect()->back();
}


public function add_vaccination($id){
    $user=users::find(session()->get('user_id'));
    $child=child::find($id);
    $cid=$id;
    if($child['age']==0){
        $vaccinations=DB::table('vaccine_process')
        ->join('vaccine','vaccine.id','vaccine_process.v_id')
        ->select('vaccine.name','vaccine.quantity','vaccine_process.valid_age','vaccine_process.v_id')
        ->where('vaccine.hcc_id',$user['hcc_id'])
        ->where('vaccine_process.valid_age',$child['age'])
        ->get();
        return view('user.add_vaccination',compact('vaccinations','cid'));
    }
    else if($child['age']==2){
        $vaccinations=DB::table('vaccine_process')
        ->join('vaccine','vaccine.id','vaccine_process.v_id')
        ->select('vaccine.name','vaccine.quantity','vaccine_process.valid_age','vaccine_process.v_id')
        ->where('vaccine.hcc_id',$user['hcc_id'])
        ->where('vaccine_process.valid_age',$child['age'])
        ->get();
        return view('user.add_vaccination',compact('vaccinations','cid'));
    }
    else if($child['age']==4){
        $vaccinations=DB::table('vaccine_process')
        ->join('vaccine','vaccine.id','vaccine_process.v_id')
        ->select('vaccine.name','vaccine.quantity','vaccine_process.valid_age','vaccine_process.v_id')
        ->where('vaccine.hcc_id',$user['hcc_id'])
        ->where('vaccine_process.valid_age',$child['age'])
        ->get();
        return view('user.add_vaccination',compact('vaccinations','cid'));
    }
    else if($child['age']==6){
        $vaccinations=DB::table('vaccine_process')
        ->join('vaccine','vaccine.id','vaccine_process.v_id')
        ->select('vaccine.name','vaccine.quantity','vaccine_process.valid_age','vaccine_process.v_id')
        ->where('vaccine.hcc_id',$user['hcc_id'])
        ->where('vaccine_process.valid_age',$child['age'])
        ->get();
        return view('user.add_vaccination',compact('vaccinations','cid'));
    }
    else if($child['age']==9){
        $vaccinations=DB::table('vaccine_process')
        ->join('vaccine','vaccine.id','vaccine_process.v_id')
        ->select('vaccine.name','vaccine.quantity','vaccine_process.valid_age','vaccine_process.v_id')
        ->where('vaccine.hcc_id',$user['hcc_id'])
        ->where('vaccine_process.valid_age',$child['age'])
        ->get();
        return view('user.add_vaccination',compact('vaccinations','cid'));
    }
    else if($child['age']==15){
        $vaccinations=DB::table('vaccine_process')
        ->join('vaccine','vaccine.id','vaccine_process.v_id')
        ->select('vaccine.name','vaccine.quantity','vaccine_process.valid_age','vaccine_process.v_id')
        ->where('vaccine.hcc_id',$user['hcc_id'])
        ->where('vaccine_process.valid_age',$child['age'])
        ->get();
        return view('user.add_vaccination',compact('vaccinations','cid'));
    }
    else{
        return view('user.add_vaccination');
    }
}
public function viewvaccinationprocess($id){
    // $process=child_vaccination::where('child_id',$id)->get();
    $child=child::find($id);
    $process=DB::table('child_vaccination')
    ->join('users', 'users.id', '=', 'child_vaccination.vaccinator_id')
    ->join('vaccine', 'vaccine.id', '=', 'child_vaccination.vaccine_id')
    ->where('child_vaccination.child_id',$id)
    ->select('child_vaccination.vaccine_date','child_vaccination.next_date','child_vaccination.age','vaccine.name','users.firstname','users.lastname')
    ->get();
    // dd($process);
    if($process){
        return view('hcc.viewvaccinationprocess',compact('process'));
    }
}
public function viewhistory($id){
    $history=DB::table('child_vaccination')
    ->join('vaccine', 'vaccine.id', '=', 'child_vaccination.vaccine_id')
    ->join('child', 'child.id', '=', 'child_vaccination.child_id')
    ->where('child_vaccination.vaccinator_id',$id)
    ->select('child.firstname','child.lastname','child.id','child_vaccination.vaccine_date','child_vaccination.age','vaccine.name')
    ->get();
    // dd($process);
    if($history){
        return view('hcc.history',compact('history'));
    }
}
}
