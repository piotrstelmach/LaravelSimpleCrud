<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $employees=DB::table('employees')->paginate(15);

        return view('home')->with('employees',$employees);
    }

    public function  addEmployee(){
        return view('newEmployee');
    }

    public function storeNewEmployee(Request $request){
        $employee=new Employee();

        $employee->name=$request->get('newName');
        $employee->last_name=$request->get('newLastName');
        $employee->date_of_birth=$request->get('newDateBirth');
        $employee->salary=$request->get('newSalary');
        $employee->if_employed=$request->get('newIfEmployed');
        $employee->date_of_employ=$request->get('newDateEmploy');
        $employee->country=$request->get('newCountry');

        $employee->save();

        return redirect()->route('home');
    }

    public function updateEmployee($id){
        $employee=Employee::find($id);

        return view('updateEmployee')->with('employee',$employee);
    }

    public function storeUpdatedEmployee(Request $request,$id){
        $employee=Employee::find($id);

        $employee->name=$request->get('newName');
        $employee->last_name=$request->get('newLastName');
        $employee->date_of_birth=$request->get('newDateBirth');
        $employee->salary=$request->get('newSalary');
        $employee->if_employed=$request->get('newIfEmployed');
        $employee->date_of_employ=$request->get('newDateEmploy');
        $employee->country=$request->get('newCountry');

        $employee->save();

        return redirect()->route('home');
    }

    public function deleteEmployee($id){
        $employee=Employee::find($id);
        $employee->delete();
        return redirect()->route('home');
    }
}
