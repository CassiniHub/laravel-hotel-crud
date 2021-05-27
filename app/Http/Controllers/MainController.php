<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        $employees = Employee::all();

        return view('pages.home', compact(
            'employees'
        ));
    }

    public function editEmployee ($id) {
        $employee = Employee::findOrFail($id);

        return view('pages.editEmployee', compact(
            'employee'
        ));
    }
    public function updateEmployee(Request $request, $id) {
        $validated = $request -> validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'role' => 'required|string',
            'ral' => 'required|numeric',
        ]);

        $employee = Employee::findOrFail($id);
        $employee -> update($validated);

        return redirect() -> route('home');
    }

    public function deleteEmployee($id) {
        $employee = Employee::findOrFail($id);

        $employee -> delete();

        return redirect() -> route('home');
    }
}
