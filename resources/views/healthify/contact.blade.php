@extends('healthify.layout.structure')
@section('main_container')
            
<script> 
function validate()  // function name
{
	// take variable now if we take <form name="" than use document.forms["myform"]["ufn"].value;
	
	// if we use <form id="" than we use var img=document.getElementById("img");
	
	var contact_name=document.forms["myform"]["contact_name"].value;  
	if(contact_name=="" || contact_name==null)  // for null condition
	{
		alert('Please Fill Out The User Contact Name');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
	var contact_email=document.forms["myform"]["contact_email"].value;  
	if(contact_email=="" || contact_email==null)  // for null condition
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
	
	var subject=document.forms["myform"]["subject"].value;  
	if(subject=="" || subject==null)  // for null condition
	{
		alert('Please Fill Out The Subject');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
	var message=document.forms["myform"]["message"].value;  
	if(message=="" || message==null)  // for null condition
	{
		alert('Please Fill Out The Message');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}	
}
// now fore direct validation from above file u take data-bvalidator="" from the file "jquery.bvalidator.js"

// allways take <form id=""  in jquery with #name
</script>
			
           <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-10 text-center text-lg-start">
				<div class="container-fluid pt-5">
        
           <section class="layout_padding">
        <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="page-section">
    
          <h1 class="text-center wow fadeInUp">Contact Us</h1>

      <form name="myform" action="{{url('/contact')}}" method="post" enctype="multipart/form-data" onsubmit="return validate()">
		   @csrf
		        
                <div class="row g-3">
                <div class="col-12 col-sm-6">
                    <input type="text" name="contact_name" class="form-control bg-light border-0" placeholder="Your Name.." style="height: 55px;">
                </div>
                <div class="col-12 col-sm-6">
                    <input type="email" name="contact_email" class="form-control bg-light border-0" placeholder="Your Email.." style="height: 55px;">
                </div>
                <div class="col-12 col-sm-6">
                    <input type="tel" name="mobile" class="form-control bg-light border-0" placeholder="Your Contact No.." style="height: 55px;">
                </div>
				<div class="col-12 col-sm-6">
                    <input type="text" name="subject" class="form-control bg-light border-0" placeholder="Subject.." style="height: 55px;">
                </div>
                <div class="col-12">
                    <textarea name="message" class="form-control bg-light border-0" rows="5" placeholder="Message.."></textarea>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Send Message</button>
                </div>
                </div>
                        
        </form>
		</div>
    </div>
  </div>
  </div>
  </div>
  </section>       
         </div>
           </div>
            </div>
        </div>   
    </div>
    <!-- Hero End -->
            	
 @endsection

    