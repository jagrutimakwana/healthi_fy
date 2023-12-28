@extends('healthify.layout.structure')
@section('main_container')

<script> 
function validate()  // function name
{
	// take variable now if we take <form name="" than use document.forms["myform"]["ufn"].value;
	
	// if we use <form id="" than we use var img=document.getElementById("img");
	
	var patient_name=document.forms["myform"]["patient_name"].value;  
	if(patient_name=="" || patient_name==null)  // for null condition
	{
		alert('Please Fill Out The Patient Full Name');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
	var email=document.forms["myform"]["email"].value;  
	if(email=="" || email==null)  // for null condition
	{
		alert('Please Fill Out The Email');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
	var mobile=document.forms["myform"]["mobile"].value;  
	if(mobile=="" || mobile==null)  // for null condition
	{
		alert('Please Fill Out The Contact Number');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
	var date=document.forms["myform"]["date"].value;  
	if(date=="" || date==null)  // for null condition
	{
		alert('Please Fill Out The Date');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
	var time=document.forms["myform"]["time"].value;  
	if(time=="" || time==null)  // for null condition
	{
		alert('Please Fill Out The Time');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
}
// now fore direct validation from above file u take data-bvalidator="" from the file "jquery.bvalidator.js"

// allways take <form id=""  in jquery with #name
</script>

<!-- Appointment Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Appointment</h5>
                        <h1 class="display-4">Make An Appointment For Your Family</h1>
                    </div>
                    <p class="mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 me-3" href="">Find Doctor</a>
                    <a class="btn btn-outline-primary rounded-pill py-3 px-5" href="">Read More</a>
                </div>
                <div class="col-lg-6">
                    <div class="bg-light text-center rounded p-5">
                        <h1 class="mb-4">Book An Appointment</h1>
                        <form name="myform" action="{{url('/appointment')}}" method="post" enctype="multipart/form-data" onsubmit="return validate()">
						 @csrf
                            <div class="row g-3">
                                
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="patient_name" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
								<div class="col-12 col-sm-6">
                                    <input type="text" name="mobile" class="form-control bg-white border-0" placeholder="Your Contact No" style="height: 55px;">
                                </div>
								<div class="col-12 col-sm-6">
                                    <select type="text" name="dr_name" class="form-select bg-white border-0" style="height: 55px;">
                                        <option selected>Select Doctor</option>
                                        <option value="Dr.John Doe">Dr.John Doe</option>
                                        <option value="Dr.Martin Ker">Dr.Martin Ker</option>
                                        <option value="Dr.Alexander">Dr.Alexander</option>
										<option value="Dr.Iliyana Wilson">Dr.Iliyana Wilson</option>
										<option value="Other">Other</option>
                                    </select>
                                </div>
								<div class="col-12 col-sm-6">
                                    <select type="text" name="depart_name" class="form-select bg-white border-0" style="height: 55px;">
                                        <option selected>Choose Department</option>
                                        <option value="General Health">General Health</option>
                                        <option value="Cardiology">Cardiology</option>
                                        <option value="Dental">Dental</option>
										<option value="Neurology">Neurology</option>
										<option value="Orthopaedics">Orthopaedics</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="date" name="date"
                                            class="form-control bg-white border-0 datetimepicker-input"
                                            placeholder="Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="time" name="time"
                                            class="form-control bg-white border-0 datetimepicker-input"
                                            placeholder="Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Make An Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
	
 @endsection
   