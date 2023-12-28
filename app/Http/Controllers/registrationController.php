<?php

namespace App\Http\Controllers;

use App\Models\registration;
use App\models\role;
use Illuminate\Http\Request;

use Hash;
use Session;
use Alert;

//load created mail file
use App\Mail\signupemail;
use Mail;

class registrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
	
	function login()
    {
        return view('healthify/login');
    }
	
	function login_auth(Request $request)
    {
        $data=registration::where('email','=',$request->email)->first();
		if($data)
		{
			if(Hash::check($request->password,$data->password))
			{
				// session create
				session()->put('id',$data->id);
				session()->put('name',$data->name);
				
				// use session => session('name') / // session()->get('name')
				
				Alert::success('Congrats', 'You\'ve Successfully Login');
				return redirect('login');
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
	
	
	function logout()
    {
        // session delete
		session()->pull('id');
		session()->pull('name');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('login');
		
    }
	

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=role::all();
		return view('healthify/signup',['role'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new registration;
		$namemail=$data->name=$request->name;
		$email=$data->email=$request->email;
		$data->password=Hash::make($request->password);
		$data->mobile=$request->mobile;
		$data->address=$request->address;
		$data->gender=$request->gender;
		$data->rid=$request->rid;
		
		//img upload
		$file=$request->file('file');
		$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		$file->move('upload/registration/',$filename);   // use move for move image in public/images
		$data->file=$filename;
		
		
		$data->save();
		
		$maildata=array("namemail"=>$namemail);
		
		Mail::to($email)->send(new signupemail($maildata));
		
		Alert::success('Congrats', 'You\'ve Successfully Registered');
		return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(registration $registration)
    {
        $data=registration::all();
		return view('doctor/view_patients',['data_registration'=>$data]);
    }
	
	public function profile(registration $registration)
    {
        $data=registration::where('id',session('id'))->first();
		return view('healthify/profile',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(registration $registration,$id)
    {
        $roledata=role::all();
		$data=registration::find($id);
		return view('healthify/editprofile',['role'=>$roledata,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, registration $registration,$id)
    {
        $data=registration::find($id);
		$data->name=$request->name;
		$data->email=$request->email;
		$data->mobile=$request->mobile;
		$data->address=$request->address;
		$data->gender=$request->gender;
		$data->rid=$request->rid;
		
		//img upload
		if($request->hasFile('file'))
		{
			$old_img=$data->file;
			unlink('upload/registration/'.$old_img);
			
			
		    $file=$request->file('file');
		    $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		    $file->move('upload/registration/',$filename);   // use move for move image in public/images
		    $data->file=$filename;
		}
		
		$data->update();
		Alert::success('Congrats', 'You\'ve Successfully Updated');
		return redirect('/profile');
    }
	
	public function status(registration $registration,$id)
    {
        $data=registration::find($id);
		$status=$data->status;
	
		if($status=="Approved")
		{
			$data->status="Pending";
			$data->update();
			Alert::success('Congrats', 'You\'ve Successfully Pending Patient');
            return redirect('/view_patients');	
		}
		else
		{
			$data->status="Approved";
			$data->update();
		    Alert::success('Congrats', 'You\'ve Successfully Approved Patient');
            return redirect('/view_patients');
		}
		registration::find($id)->delete();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(registration $registration)
    {
        //
    }
}
