@extends('doctor.layout.structure')
@section('main_container')

                

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage All Patients Appointments</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
			   
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage All Patients Appointments
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Appointment Id</th>
											<th>Patient Name</th>
                                            <th>Email</th>
											<th>Contact_no</th>
                                            <th>Dr.Name</th>
											<th>Department Name</th>
											<th>Date</th>
											<th>Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       @if(!empty($data_appointment))
                                           
									   
                                            @foreach($data_appointment as $d)
                                                <tr>
												
                                                    <td>{{$d->id}}</td>
													<td>{{$d->patient_name}}</td>
													<td>{{$d->email}}</td>
                                                    <td>{{$d->mobile}}</td>
													<td>{{$d->dr_name}}</td>
													<td>{{$d->depart_name}}</td>
													<td>{{$d->date}}</td>
													<td>{{$d->time}}</td>
                                                    
                                                      <td> 
													  <a href="{{url('/editappointment/'.$d->id)}}" class="btn btn-success me-1">Edit</a>
													  
                                                      <a href="{{url('/delete/'.$d->id)}}" class="btn btn-primary me-1">Delete</a>
														
                                                    </td>
                                                </tr>
                                                 @endforeach
												 @else
													
												     <tr>
												         <td> DATA NO FOUND</td>
													</tr>
													@endif
                                    </tbody>
                                </table>
								
															
								</div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     
@endsection

