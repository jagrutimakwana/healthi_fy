<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use Illuminate\Http\Request;

use session;
use Hash;
use Alert;

class doctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
	
	public function dr_login()
    {
        return view('doctor/dr_login');
    }
	
	
	function login_auth(Request $request)
    {
        $data=doctor::where('dr_name','=',$request->dr_name)->first();
		if($data)
		{
			if(Hash::check($request->dr_password,$data->dr_password))
			{
				// session create
				session()->put('id',$data->id);
				session()->put('dr_name',$data->dr_name);
				
				// use session => session('name') / // session()->get('name')
				
				Alert::success('Congrats', 'You\'ve Successfully Login');
				return redirect('/dashboard');
			}
			else
			{
				Alert::error('Failed', 'Wrong Password');
				return redirect()->back();
			}
		}
		else
		{
			    Alert::error('Failed', 'Wrong Email');
				return redirect()->back();
		}
    }
	
	function doctorlogout()
    {
        // session delete
		session()->pull('id');
		session()->pull('dr_name');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/dr_login');
		
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(doctor $doctor)
    {
        //
    }
}
