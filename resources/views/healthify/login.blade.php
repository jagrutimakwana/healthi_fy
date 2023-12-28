@extends('healthify.layout.structure')
@section('main_container')

<script> 
function validate()  // function name
{
	// take variable now if we take <form name="" than use document.forms["myform"]["ufn"].value;
	
	// if we use <form id="" than we use var img=document.getElementById("img");
	var email=document.forms["myform"]["email"].value;  
	if(email=="" || email==null)  // for null condition
	{
		alert('Please Fill Out The Email');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
	var password=document.forms["myform"]["password"].value;  
	if(password=="" || password==null)  // for null condition
	{
		alert('Please Fill Out The Password');  // alert msg
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
    
          <h1 class="text-center wow fadeInUp">Patient Login Page</h1>

      <form name="myform" action="{{url('/login_auth')}}" method="post" onsubmit="return validate()">
                     @csrf      
                            <div class="control-group">
							<label><b>Email: </b></label>
                                <input type="email" class="form-control p-4" name="email" placeholder="Your Email" >
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
							<label><b>Password: </b></label>
                                <input type="password" class="form-control p-4" name="password" placeholder="Your Password" >
                                <p class="help-block text-danger"></p>
                            </div>
							<a href="signup">Not Register Click Here To Signup</a><br><br>
							<a class="forgot" href="#">Forgot Your Password?</a><br><br>
                            
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit" name="submit" value="Login" id="sendMessageButton">Login</button>
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

    