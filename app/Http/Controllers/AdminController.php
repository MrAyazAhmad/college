<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\StudentRecord;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StudentRecordExport1;
use App\Exports\LibraryRecordExport;


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
        // dd($users);
        // die();
       /* $users = User::orderBy('id')->get();*/
        return view('admin.user.index',compact('users'));
       /* return view('admin.user.index',compact('users'));*/
    }
    public function adduser()
    {
        /*$users = User::all();
        // dd($users);
        // die();*/
        return view('admin.user.adduser');
    }

     public function deleteUser($id)
    {
        $contact = User::find($id);
        $contact->delete();
        return response()->json(['success'=>'Record has been deleted']);
    }

     public function createuser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);
        $input = $request->all();
        User::create($input);
        return redirect('admin/allusers')->with('success','User created successfully.');
    }
       public function allstudents()
    {
        $students = StudentRecord::all();
        return view('admin.student.index',compact('students'));
    }
     public function destroy( $id)
    {
         $user = User::find($id);
        $user->delete();
        return redirect('admin/allusers')->with('success','user delete successfully.');
    }
      public function getUserById($id)
    {
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
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
        $user->status_id = $request->status_id;
        $user->save();
        return redirect('admin/allusers')->with('success','user update successfully.');
    }
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
