@extends('healthify.layout.structure')
@section('main_container')

<script> 
function validate()  // function name
{
	// take variable now if we take <form name="" than use document.forms["myform"]["ufn"].value;
	
	// if we use <form id="" than we use var img=document.getElementById("img");
	
	var rid=document.forms["myform"]["rid"].value;  
	if(rid=="" || rid==null)  // for null condition
	{
		alert('Please Fill Out The Role');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
	var name=document.forms["myform"]["name"].value;  
	if(name=="" || name==null)  // for null condition
	{
		alert('Please Fill Out The User Full Name');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
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
	
	var mobile=document.forms["myform"]["mobile"].value;  
	if(mobile=="" || mobile==null)  // for null condition
	{
		alert('Please Fill Out The Contact Number');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
	var address=document.forms["myform"]["address"].value;  
	if(address=="" || address==null)  // for null condition
	{
		alert('Please Fill Out The Address');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
	var gen_arr = document.getElementsByName("gender");
    if (gen_arr[0].checked == true) 
	{
                   
    } 
	else if (gen_arr[1].checked == true) 
	{
                  
    } 
	else 
	{
		alert('! Please Select Gender');  // alert msg
        return false;
    }

	var file=document.forms["myform"]["file"].value;  
	if(file=="" || file==null)  // for null condition
	{
		alert('Please Fill Out The Image');  // alert msg
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
    
          <h1 class="text-center wow fadeInUp">Signup Page</h1>

      <form name="myform" action="{{url('/signup')}}" method="post" enctype="multipart/form-data" onsubmit="return validate()">
		   @csrf
		        <div class="control-group">
                <label for="inputState"><b>Role</b></label>
                    <select name="rid" class="form-control" />
                    <option value="">Select Role</option></label>
                                  
                @if(!empty($role))
                                     
                @foreach($role as $c)
               
                <option value="{{$c->rid}}">{{$c->rname}}</option>
                @endforeach
			    @endif
                </select>
                </div><br>
                <div class="control-group">
				<label><b> Name: </b></label>
                    <input type="text" class="form-control" name="name" placeholder="Your Name" >
                    <p class="help-block text-danger"></p>
                </div>
			    
                <div class="control-group">
				<label><b> Email: </b></label>
                    <input type="email" class="form-control" name="email" placeholder="Your Email" >
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
			    <label><b> Password: </b></label>
                    <input type="password" class="form-control" name="password" placeholder="Your Password" >
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
				<label><b> Contact no: </b></label>
                    <input type="tel" class="form-control" name="mobile" placeholder="Your Contact No" >
                    <p class="help-block text-danger"></p>
                </div>
				<div class="control-group">
				<label><b> Address: </b></label>
                    <textarea type="text" class="form-control" name="address" placeholder="Your Address" ></textarea>
                    <p class="help-block text-danger"></p>
                </div>
			    
			    <div class="control-group">
				<label><b> Gender: </b></label>
                    Male:<input type="radio" name="gender" value="Male">
				    Female:<input type="radio" name="gender" value="Female">
                </div>
				<div class="control-group">
                <label for="exampleInputName1"><b>Image Upload</b></label>
                <input type="file" name="file" class="form-control" >
                </div>			
                <div><br>
				<a href="login"> If You Already Register Then Click Login</a><br><br>
                <button class="btn btn-primary py-3 px-5" type="submit" name="submit" value="Signup" id="sendMessageButton">Signup</button>								
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

    