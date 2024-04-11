<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Designation;
use App\Models\Department;

class EmployeeController extends Controller
{

    public function index(){
        $users = Users::all();
        $designation=Designation::all();
        $department=Department::all();
        return view('welcome', compact('users','designation','department'));
    }
    public function create()
    {
        return view('employees_create');
    }

    public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'designation' => 'required|string|max:255',
        'department' => 'required|string|max:255',
        'phone'=>'required|string|max:255'
    ]);

    // Create designation and department if not exists
    $designation = Designation::firstOrCreate(['name' => $validatedData['designation']]);
    $department = Department::firstOrCreate(['name' => $validatedData['department']]);

    // Create user
    $user = new Users();
    $user->name = $validatedData['name'];
    $user->designation_id = $designation->id;
    $user->department_id = $department->id;
    $user->phone = $validatedData['phone'];
    $user->save();

    return redirect()->route('index');

    // Redirect or return a response
}

}
