<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Class_session;
use App\Models\FeeStructer;
use App\Models\StudentRecord;
use App\Models\StudentTRoll;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StudentRecordExport1;
use App\Exports\LibraryRecordExport;
use App\Exports\StudentListExport;
use Hash;
use App\Models\Bachelor_Academic;
use App\Models\Inter_Academic;
use App\Models\Matric_Academic;
use File;
use Auth;


class AdminController extends Controller
{
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalstudents =StudentRecord::all()->count();
        $challanupload =StudentRecord::orWhereNull('challan_file')->count();
        $admissionconfirm =StudentTRoll::all()->count();
    
        return view('admin',compact('totalstudents','admissionconfirm','challanupload'));
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
       public function deletsudent($id)
    {
        $student = StudentRecord::find($id);
         $image_path = 'public/image/canidatephoto/'.$student->image_name;
              if (File::exists($image_path)) {
                //File::delete($image_path);
                    unlink($image_path);
                }
        $student->delete();
        return redirect()->back()->with('success','Student record delete successfully.....');
    } 
    public function DeleteFeestructure($id)
    {
         $feestructer = FeeStructer::find($id);
        $feestructer->delete();
        return redirect()->back()->with('success','FeeStructer Is Deleted Successfully');
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
        public function EditStudent(Request $request)
    {
        $user = StudentRecord::find($request->id);
        $class_section = Class_session::all();
        $bacholer=Bachelor_Academic::where('stu_id',$user->id)->first();
        $inter=  Inter_Academic::where('stu_id',$user->id)->first();
        $matric= Matric_Academic::where('stu_id',$user->id)->first();

        // dd($user);
        return view('admin.student.edit',compact('user','class_section','bacholer','inter','matric'));
    }  
      public function UpdateForm(Request $request)
    {
        $user = StudentRecord::find($request->id);
        // dd($user);
         $user->section_id = $request->section_id;
        $feestructer = FeeStructer::where('section_id', $request->section_id)->first();
        $classsession = Class_session::where('id', $request->section_id)->first();
          $request->validate([
            'CNIC' => 'required',
            'canidate_name' => 'required',
            'dob' => 'required',
            'covid' => 'required',
            'f_name' => 'required',
            'm_name' => 'required',
            'f_cnic' => 'required',
            'contact_number' => 'required',
            'address' => 'required',
            'religion' => 'required',
            'nationality' => 'required',
            'specialty' => 'required',
            'group' => 'required',
            'optional_subject_one' => 'required',
            'optional_subject_two' => 'required',
            'optional_subject_three' => 'required',
            'Applied' =>'required',
            'section_name' =>'required',
            'class_year' =>'required',
            'section_id' =>'required',
             'roll_no' => 'required',
            'Passing_Year' => 'required',
            'exam_Type' => 'required',
            'Marks_Obt' => 'required',
            'totall_marks' => 'required',
            'percentage' => 'required',
            'insitute_name' => 'required',
            'grade' => 'required',
        ]); 
        $user->fee_id =$feestructer->id;
        $user->CNIC = $request->CNIC;
        $user->Applied = $request->Applied;
        $user->class_year = $request->class_year;
        $user->canidate_name = $request->canidate_name;
        $user->dob = $request->dob;
        $user->f_name = $request->f_name;
        $user->m_name = $request->m_name;
        $user->f_cnic = $request->f_cnic;
        $user->contact_number = $request->contact_number;
        $user->address = $request->address;
        $user->religion = $request->religion;
        $user->nationality = $request->nationality;
        $user->specialty = $request->specialty;
        $user->covid = $request->covid;
        $user->bgroup = $request->bgroup;
        $user->group = $request->group;
        $user->previous_roll_no = $request->previous_roll_no;
        $user->previous_year = $request->previous_year;
        $user->previous_session = $request->previous_session;
        $user->previous_board = $request->previous_board;
        $user->reg_no = $request->reg_no;
        $user->optional_subject_one = $request->optional_subject_one;
        $user->optional_subject_two = $request->optional_subject_two;
        $user->optional_subject_three = $request->optional_subject_three;
            if ($image_name = $request->file('image_name')) {
               
            $destinationPath = 'public/image/canidatephoto/';
            $image_path = 'public/image/canidatephoto/'.$user->image_name;
              if (File::exists($image_path)) {
                //File::delete($image_path);
                    unlink($image_path);
                }
            $canidateImage = date('YmdHis') . $request->canidate_name ."." . $image_name->getClientOriginalExtension();
            $image_name->move($destinationPath, $canidateImage);
            $input['image_name'] = 
        $user->image_name = "$canidateImage";

        }else{
           $user->image_name="avatar.jpg"; 
        }
        $user->save();
        $class_section = Class_session::all();
        if($request->roll_no & $request->insitute_name){
        //      $request->validate([
        //     'roll_no' => 'required',
        //     'Passing_Year' => 'required',
        //     'exam_Type' => 'required',
        //     'Marks_Obt' => 'required',
        //     'totall_marks' => 'required',
        //     'percentage' => 'required',
        //     'insitute_name' => 'required',
        // ]);
        $matric_academic= Matric_Academic::where('stu_id',$user->id)->first();
        $matric_academic->stu_id =$user->id;
        $matric_academic->roll_no =$request->roll_no;
        $matric_academic->passing_year = $request->Passing_Year;
        $matric_academic->exam_Type = $request->exam_Type;
        $matric_academic->marks_obtian = $request->Marks_Obt;
        $matric_academic->total_marks = $request->totall_marks;
        $matric_academic->percentage = $request->percentage;
        $matric_academic->insitute_name = $request->insitute_name;
        $matric_academic->grade = $request->grade;
        $matric_academic->save();
        // die();
        


        }
        if($request->Inter_Roll_No & $request->Inter_insitute_name){
        //      $request->validate([
        //     'Inter_Roll_No' => 'required',
        //     'Inter_Year' => 'required',
        //     'Inter_Exam_Type' => 'required',
        //     'class_year' => 'required',
        //     'Inter_Marks_Obt' => 'required',
        //     'Inter_totall_marks' => 'required',
        //     'Inter_percentage' => 'required',
        //     'Inter_insitute_name' => 'required',
        $Inter_academic=  Inter_Academic::where('stu_id',$user->id)->first();     
        $Inter_academic->stu_id =$user->id;
        $Inter_academic->roll_no =$request->Inter_Roll_No;
        $Inter_academic->passing_year = $request->Inter_Year;
        $Inter_academic->exam_type = $request->Inter_Exam_Type;
        $Inter_academic->marks_obtian = $request->Inter_Marks_Obt;
        $Inter_academic->total_marks = $request->Inter_totall_marks;
        $Inter_academic->percentage = $request->Inter_percentage;
        $Inter_academic->insitute_name = $request->Inter_insitute_name;
        $Inter_academic->grade = $request->Inter_grade;
        $Inter_academic->subject_marks = $request->Inter_subject_marks;
        // dd($matric_academic);       
        $Inter_academic->save();
        // die();

        }
        if($request->Bachelor_Roll_No & $request->Bachelor_insitute_name){
        //     $request->validate([
        //     'Bachelor_Roll_No' => 'required',
        //     'Bachelor_Year' => 'required',
        //     'Bachelor_Exam_Type' => 'required',
        //     'class_year' => 'required',
        //     'Bachelor_Marks_Obt' => 'required',
        //     'Bachelor_totall_marks' => 'required',
        //     'Bachelor_percentage' => 'required',
        //     'Bachelor_insitute_name' => 'required',
        // ]); 
        $Bachelor_academic=Bachelor_Academic::where('stu_id',$user->id)->first();

        $Bachelor_academic->stu_id =$user->id;
        $Bachelor_academic->roll_no =$request->Bachelor_Roll_No;
        $Bachelor_academic->Passing_Year = $request->Bachelor_Year;
        $Bachelor_academic->exam_type = $request->Bachelor_Exam_Type;
        $Bachelor_academic->marks_obtian = $request->Bachelor_Marks_Obt;
        $Bachelor_academic->total_marks = $request->Bachelor_totall_marks;
        $Bachelor_academic->percentage = $request->Bachelor_percentage;
        $Bachelor_academic->insitute_name = $request->Bachelor_insitute_name;
        $matric_academic->grade = $request->Bachelor_grade;
        $Bachelor_academic->save();
   

        }
        return redirect()->route('generate-pdf', [$user->id]);

        // dd($user);
       
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
        $classsession->category = $request->category;
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
       public function bsstudents()
    {
        $students = StudentRecord::Where('Applied','BS(hons)')->get();
        // dd($students);
        // return view('admin.student.confirm',compact('students'));

        return view('admin.student.bs',compact('students'));
    }  
          public function confirmstudents()
    {
        $students = StudentTRoll::all();
        // dd($students);
        return view('admin.student.confirm',compact('students'));
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
        $classsession->category = $request->category;
        
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
        public function studentexport() 
    {
        $name='StudentRecords'.date('M-d-Y_hia').'.xlsx';  
        return Excel::download(new StudentListExport, $name);
    }
       public function libraryexport() 
    {
        $name='library'.'_'.date('M-d-Y_hia').'.xlsx';  
        return Excel::download(new LibraryRecordExport, $name);
    }


}
