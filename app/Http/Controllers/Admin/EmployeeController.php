<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use App\Models\State;
use App\Models\Lga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="employees";
        $designations = Designation::get();
        $departments = Department::get();
        $states = State::get();
        $lgas = Lga::get();
        $employees = Employee::with('department','designation','state','lga')->get();
        return view('backend.employees',
        compact('title','designations','departments','states', 'lgas' ,'employees'));
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function list()
   {
       $title="employees";
       $designations = Designation::get();
       $departments = Department::get();
       $employees = Employee::with('department','designation')->get();
       return view('backend.employees-list',
       compact('title','designations','departments','employees'));
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'phone'=>'nullable|max:15',
            'dob'=>'required|max:200',
            'joindate'=>'nullable|date',
            'avatar'=>'file|image|mimes:jpg,jpeg,png,gif',
            'department'=>'required',
            'designation'=>'required',
            'maritalstatus'=>'required',
            'state'=>'required',
            'lga'=>'required',
            'religion'=>'required',
            'level'=>'required',
            'officialphone'=>'required',
        ]);
        $imageName = Null;
        if ($request->hasFile('avatar')){
            $imageName = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path('storage/employees'), $imageName);
        }
        $uuid = IdGenerator::generate(['table' => 'employees','field'=>'uuid', 'length' => 7, 'prefix' =>'EMP-']);
        Employee::create([
            'uuid' =>$uuid,
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'DOB'=>$request->dob,
            'joindate'=>$request->joindate,
            'department_id'=>$request->department,
            'designation_id'=>$request->designation,
            'maritalstatus'=>$request->maritalstatus,
            'state_id'=>$request->state,
            'lga_id'=>$request->lga,
            'religion'=>$request->religion,
            'level'=>$request->level,
            'officialphone'=>$request->officialphone,
            'avatar'=>$imageName,
        ]);
        return back()->with('success',"Employee has been added");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'phone'=>'nullable|max:15',
            'DOB'=>'required|max:200',
            'joindate'=>'nullable|date',
            'avatar'=>'file|image|mimes:jpg,jpeg,png,gif',
            'department'=>'required',
            'designation'=>'required',
            'maritalstatus'=>'required',
            'state_id'=>'required',
            'lga_id'=>'required',
            'religion'=>'required',
            'level'=>'required',
            'officialphone'=>'nullable',
        ]);
        if ($request->hasFile('avatar')){
            $imageName = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path('storage/employees'), $imageName);
        }else{
            $imageName = Null;
        }
        
        $employee = Employee::find($request->id);
        $employee->update([
            'uuid' => $employee->uuid,
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'DOB'=>$request->dob,
            'department'=>$request->department,
            'designation'=>$request->designation,
            'maritalstatus'=>$request->maritalstatus,
            'state'=>$request->state,
            'lga'=>$request->lga,
            'religion'=>$request->religion,
            'level'=>$request->level,
            'officialphone'=>$request->officialphone,
            'avatar'=>$imageName,
        ]);
        return back()->with('success',"Employee details has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $employee = Employee::find($request->id);
        $employee->delete();
        return back()->with('success',"Employee has been deleted");
    }
}
