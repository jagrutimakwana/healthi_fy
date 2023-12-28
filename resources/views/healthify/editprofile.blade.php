@extends('healthify.layout.structure')
@section('main_container')

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
    
          <h1 class="text-center wow fadeInUp">Edit Profile Page</h1>

      <form action="{{url('/profile/'.$data->id)}}" method="post" enctype="multipart/form-data">
		   @csrf
		        <div class="control-group">
                <label for="inputState"><b>Role</b></label>
                    <select name="rid" class="form-control" />
                    <option value="">Select Role</option></label>
                @if(!empty($role))
                                     
                @foreach($role as $c)
               @if($c->rid==$data->rid)
               
                <option value="{{$c->rid}}" selected>{{$c->rname}}</option>
				@else
				<option value="{{$c->rid}}">{{$c->rname}}</option>
                 @endif
                @endforeach
			    @endif
                </select>
                </div><br>
                <div class="control-group">
				<label><b> Name: </b></label>
                    <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Your Name" >
                    <p class="help-block text-danger"></p>
                </div>
			    
                <div class="control-group">
				<label><b> Email: </b></label>
                    <input type="email" class="form-control" name="email" value="{{$data->email}}" placeholder="Your Email" >
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
				<label><b> Contact no: </b></label>
                    <input type="tel" class="form-control" name="mobile" value="{{$data->mobile}}" placeholder="Your Contact No" >
                    <p class="help-block text-danger"></p>
                </div>
				<div class="control-group">
				<label><b> Address: </b></label>
                    <textarea type="text" class="form-control" name="address" value="{{$data->address}}" placeholder="Your Address" ></textarea>
                    <p class="help-block text-danger"></p>
                </div>
			    
			    <div class="control-group">
				<label><b> Gender: </b></label>
                    Male:<input type="radio" name="gender" value="Male" <?php if($data->gender=="Male") { echo "checked";}?>>
				    Female:<input type="radio" name="gender" value="Female" <?php if($data->gender=="Female") { echo "checked";}?>>
                </div>
				<div class="control-group">
                <label for="exampleInputName1"><b>Image Upload</b></label>
                <input type="file" name="file" class="form-control" >
				<img src="{{url('upload/registration/'.$data->file)}}" width="50px" alt="">
                </div>			
                <div><br>
                <button class="btn btn-primary py-3 px-5" type="submit" name="submit" value="Save" id="sendMessageButton">Save</button>								
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

    