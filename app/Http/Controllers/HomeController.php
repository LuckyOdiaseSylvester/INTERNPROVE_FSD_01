<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\validator;
use Auth;
use Illuminate\Http\Request;
use App\Models\Employee;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $employees= Employee::all();

        return view('home', compact('employees'));
    }

    public function edit_employee_page(Request $request, $id)
    {
        $employee = Employee::where('id', $id)->first();
        return view('edit-employee',compact('employee'));
    }

    public function add_employee()
    {
        return view('add-employee');
    }

    public function add(Request $request){
        $validator=validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'position'=>'required',
            ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $employee=new Employee();
        $employee->name=$request->name;
        $employee->email=$request->email;
        $employee->position=$request->position;
        $employee->save();
       return redirect()->route('home', compact('employee'));
    }

    public function update(Request $request, $id){
        $validator=validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'position'=>'required',
            ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $employee = Employee::where('id', $id)->first();
        $employee->name=$request->name;
        $employee->email=$request->email;
        $employee->position=$request->position;
        $employee->save();
       return redirect()->route('home', compact('employee'));
    }
    public function delete(Request $request, $id){
       Employee::where('id', $id)->delete();
       return redirect()->route('home');
    }
    public function view(Request $request, $id)
    {
        $employee = Employee::where('id', $id)->first();
        return view('view',compact('employee'));
    }

}
