<!DOCTYPE php>
<php xmlns="http://www.w3.org/1999/xphp">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Doctor Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="{{url('doctor/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{url('doctor/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<script> 
function validate()  // function name
{
	// take variable now if we take <form name="" than use document.forms["myform"]["ufn"].value;
	
	// if we use <form id="" than we use var img=document.getElementById("img");
	var dr_name=document.forms["myform"]["dr_name"].value;  
	if(dr_name=="" || dr_name==null)  // for null condition
	{
		alert('Please Fill Out The Username');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
	
	var dr_password=document.forms["myform"]["dr_password"].value;  
	if(dr_password=="" || dr_password==null)  // for null condition
	{
		alert('Please Fill Out The Password');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page
	}
}
// now fore direct validation from above file u take data-bvalidator="" from the file "jquery.bvalidator.js"

// allways take <form id=""  in jquery with #name
</script>

<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center" style="padding-top:100px;">
            
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form name="myform" action="{{url('/drlogin_auth')}}" method="post" role="form" onsubmit="return validate()">
								@csrf
                                    <hr />
                                    <h5>Enter Doctor Details to Login</h5>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                            <input type="text" name="dr_name" class="form-control" placeholder="Your Username " />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" name="dr_password" class="form-control"  placeholder="Your Password">
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="index" >Forget password ? </a> 
                                            </span>
                                        </div>
                                     
                                     <input type="submit" name="submit" value="Login" class="btn btn-primary">
                                    
                                    
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</php>

    
