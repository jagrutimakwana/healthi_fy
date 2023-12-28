@extends('healthify.layout.structure')
@section('main_container')


    <!-- Profile Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="{{url('upload/registration/'.$data->file)}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Manage Profile</h5>
                    <h5>
                    Role :  {{$data->id}}<br><br>
			        Name :  {{$data->name}}<br><br>
			        Email : {{$data->email}}<br><br>
			        Contact No :  {{$data->mobile}}<br><br>
			        Address :  {{$data->address}}<br><br>
			        Gender :  {{$data->gender}}<br><br>
			        </h5>
			  <div class="btn-box">
            <a href="{{url('profile/'.$data->id)}}" class="btn2">
            <div>
			    <button class="btn btn-primary py-3 px-5" type="submit" name="submit" value="Save" id="sendMessageButton">Edit Profile</button>								
            </div>
            </a>
			</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile End -->


    
 @endsection

    