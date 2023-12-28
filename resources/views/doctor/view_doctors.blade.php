@extends('doctor.layout.structure')
@section('main_container')

            <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>View Doctors List</h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            View All Doctors List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Patient Id</th>
											<th>Role Id</th>
											<th>Name</th>
                                            <th>Email</th>
											<th>Contact_no</th>
                                            <th>Address</th>
											<th>Gender</th>
											<th>Image</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    @if(!empty($data_registration))
                                           
									    @foreach($data_registration as $d)
                                        <tr>
												
                                            <td>{{$d->id}}</td>
										    <td>{{$d->rid}}</td>
											<td>{{$d->name}}</td>
											<td>{{$d->email}}</td>
                                            <td>{{$d->mobile}}</td>
										    <td>{{$d->address}}</td>
										    <td>{{$d->gender}}</td>
											<td><img src="{{url('/upload/registration/'.$d->file)}}" width="50px"></td>
                                               
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

