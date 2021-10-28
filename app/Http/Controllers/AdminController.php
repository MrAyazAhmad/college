<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Class_session;
use App\Models\FeeStructer;
use App\Models\StudentRecord;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StudentRecordExport1;
use App\Exports\LibraryRecordExport;
use Hash;


class AdminController extends Controller
{
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
        return view('admin');
    }   
    public function allusera()
    {
        $users = User::all();
        return view('admin.user.index',compact('users'));
      
    }

     public function viewfeestructure()
    {
        $feestructures = FeeStructer::all();
        // $classsection = Class_session::all();
        // dd($feestructures);
        return view('admin.feestructure.index',compact('feestructures'));
      
    }

     public function viewsessions()
    {
        $sessions = Class_session::orderBy('id', 'ASC')->get();
       
        return view('admin.sessions.index',compact('sessions'));
      
    }
     public function EditSession($id)
    {
        $session = Class_session::find($id);
        // dd($sessions);
        return view('admin.sessions.edit',compact('session'));
      
    }
    public function adduser()
    {
       
        return view('admin.user.adduser');
    }

     public function deleteUser($id)
    {
        $contact = User::find($id);
        $contact->delete();
        return redirect()->back()->with('Deleted','your record successfully.....');
    } 
    public function DeleteFeestructure($id)
    {
         $feestructer = FeeStructer::find($id);
        $feestructer->delete();
        return redirect()->back()->with('Deleted','your record successfully.....');
    } 
     public function DeleteSession($id)
    {
       
         $class_session = Class_session::find($id);
        // dd($class_session);
        $class_session->delete();
        return redirect()->back()->with('Deleted','your record successfully.....');
    }


    

     public function createuser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);
        $input = $request->all();
        $user= New User();
        $user->name =$request->name;
        $user->email =$request->email;
        $user->password =Hash::make($request['password']);
        $user->position= $request->position;
        $user->role =$request->role_id;
        $user->state =$request->status;
        $user->created_at =$request->s_date;
        $user->save();

        return redirect('admin/allusers')->with('success','User created successfully.');
    }

       public function EditUser(Request $request)
    {
        $user = User::find($request->id);
        // dd($user);
        return view('admin.user.edit',compact('user'));
    }  
       public function EditFeestructure($id)
    {
        $feestructure = FeeStructer::find($id);
        $class_section  = Class_session::all();
        // dd($feestructures);
        return view('admin.feestructure.edit',compact('feestructure','class_section'));
    } 

     public function UpdateFeestructure(Request $request, $id)
    {
        $feeStructer = FeeStructer::find($id);

         $feeStructer->section_id = $request->section_id;
        $feeStructer->admission_fee = $request->admission_fee;
        $feeStructer->tution_fee = $request->tution_fee;
        $feeStructer->genral_fund = $request->genral_fund;
        $feeStructer->medical_fund = $request->medical_fund;
        $feeStructer->red_cross_fund = $request->red_cross_fund;
        $feeStructer->welfare_fund = $request->welfare_fund;
        $feeStructer->magazine_fund = $request->magazine_fund;
        $feeStructer->library_security = $request->library_security;
        $feeStructer->affiliation_fund = $request->affiliation_fund;
        $feeStructer->board_universty_registration_fee = $request->board_universty_registration_fee;
        $feeStructer->secience_fund = $request->secience_fund;
        $feeStructer->masjjid_fund=$request->masjjid_fund;
        $feeStructer->fine_fund = $request->fine_fund;
        $feeStructer->parking_fee = $request->parking_fee;
        $feeStructer->sports_fund = $request->sports_fund;
        $feeStructer->id_card_fee = $request->id_card_fee;
        $feeStructer->computer_fee = $request->computer_fee;
        $feeStructer->exam_fund = $request->exam_fund;
        $feeStructer->total_fee = $request->total_fee;
        $feeStructer->bank_name = $request->bank_name;
        $feeStructer->account_title = $request->account_title;
        $feeStructer->account_number = $request->account_number;
        $feeStructer->due_date = $request->due_date;
        // dd($feeStructer);
        // die();
        $feeStructer->save();
        
        return redirect('view-feestructure')->with('success','Record Update successfully.');
    }


       public function updateuser(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'email' => 'required',
            'role' => 'required',
            'status_id' => 'required',
        ]);
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->position = $request->position;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request['password']);
        $user->status_id = $request->status_id;
        $user->save();
        return redirect('admin/allusers')->with('success','user update successfully.');
    }
         public function SessionUpdate(Request $request ,$id)
    {

        // $request->validate([
        //     'name' => 'required',
        //     'position' => 'required',
        //     'email' => 'required',
        //     'role' => 'required',
        //     'status_id' => 'required',
        // ]);
         $classsession =  Class_session::find($id);
        $classsession->class_name = $request->class_name;
        $classsession->session_name = $request->session_name;
        $classsession->start_year = $request->start_year;
        $classsession->end_year = $request->end_year;
        $classsession->status_id = $request->status_id;
        // dd($classsession);
        // die();
        
        $classsession->save();
        return redirect('view-session')->with('success','Record Update successfully.');
        
    }


       public function allstudents()
    {
        $students = StudentRecord::all();
        return view('admin.student.index',compact('students'));
    }    
     public function CreateSession()
    {
        return view('admin.sessions.create');
    }
       public function StoreSession(Request $request)
    {
        // echo "string";
        // die();
        //   $request->validate([
        //     'class_name' => 'required',
        //     'session_name' => 'required',
        //     'des' => 'required',
        //     'start_year' => 'required',
        //     'end_year' => 'required',
        //     'status_id' => 'required',
        //     'sudes4' => 'required',
        //     'des2' => 'required',
        // ]);
        $classsession = New Class_session();
        $classsession->class_name = $request->class_name;
        $classsession->session_name = $request->session_name;
        $classsession->start_year = $request->start_year;
        $classsession->end_year = $request->end_year;
        $classsession->status_id = $request->status_id;
        // dd($classsession);
        // die();
        
        $classsession->save();
         return redirect('view-session')->with('success','Record update successfully.');
    }
     public function destroy( $id)
    {
         $user = User::find($id);
        $user->delete();
        return redirect('admin/allusers')->with('success','user delete successfully.');
    }
   
/*         public function updateuser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);
        $input = $request->all();
        User::create($input);
        return redirect('admin/allusers')->with('success','User updated successfully.');
    }*/
 
    // public function export(){
    // $name='Cashbook'.date('M-d-Y_hia').'.xlsx';  
    // return Excel::download(new UsersExport, $name);
    // }
       public function export() 
    {
        $name='Cashbook'.date('M-d-Y_hia').'.xlsx';  
        return Excel::download(new StudentRecordExport1, $name);
    }
       public function libraryexport() 
    {
        $name='library'.'_'.date('M-d-Y_hia').'.xlsx';  
        return Excel::download(new LibraryRecordExport, $name);
    }


}
