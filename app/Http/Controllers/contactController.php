<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

use Hash;
use Session;
use Alert;


class contactController extends Controller
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
        return view('healthify/contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new contact;
		$data->contact_name=$request->contact_name;
		$data->contact_email=$request->contact_email;
		$data->mobile=$request->mobile;
		$data->subject=$request->subject;
		$data->message=$request->message;
		$data->save();
		
		Alert::success('Congrats', 'You\'ve Successfully Registered');
		return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        //
    }
}
