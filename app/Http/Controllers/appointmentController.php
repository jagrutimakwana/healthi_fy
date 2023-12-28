<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use Illuminate\Http\Request;

use Hash;
use Session;
use Alert;

class appointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('healthify/appointment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new appointment;
		$data->patient_name=$request->patient_name;
		$data->email=$request->email;
		$data->mobile=$request->mobile;
		$data->dr_name=$request->dr_name;
		$data->depart_name=$request->depart_name;
		$data->date=$request->date;
		$data->time=$request->time;
		$data->save();
		
		Alert::success('Congrats', 'You\'ve Successfully Book Appointment');
		return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(appointment $appointment)
    {
        $data=appointment::all();
		return view('doctor/manage_appointment',['data_appointment'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(appointment $appointment,$id)
    {
        $data=appointment::find($id);
		return view('healthify/editappointment',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, appointment $appointment,$id)
    {
        $data=appointment::find($id);
		$data->patient_name=$request->patient_name;
		$data->email=$request->email;
		$data->mobile=$request->mobile;
		$data->dr_name=$request->dr_name;
		$data->depart_name=$request->depart_name;
		$data->date=$request->date;
		$data->time=$request->time;
		
		$data->update();
		Alert::success('Congrats', 'You\'ve Successfully Updated');
		return redirect('/manage_appointment');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(appointment $appointment,$id)
    {
        // get id data img
		$data=appointment::find($id);   //get only one data in string
		$filename=$data->file;
		
		// data delete with unlink image
		appointment::find($id)->delete();
		/**if($filename!="")
		{
			unlink('upload/doctor/'.$filename);
		}**/
		Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return redirect()->back();
    }
}
