<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Healthify - Hospital Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('healthify/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('healthify/css/style.css')}}" rel="stylesheet">
</head>
<body>
@include('sweetalert::alert')
    
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>Healthify</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index" class="nav-item nav-link active">Home</a>
                        <a href="about" class="nav-item nav-link">About</a>
                        <a href="service" class="nav-item nav-link">Service</a>
                        <a href="contact" class="nav-item nav-link">Contact</a>
                    </div>
				<br><br>	
			 <div class="user_optio_box">
			@if(session()->has('id'))
		    <a href="profile">
			<i class="fa fa-user" aria-hidden="true"></i>
			<span>
			      Hii.. {{session('name')}}
		    </span>
			</a>
			<a class="btn btn-primary ml-lg-3" href="logout">
			<span>
			      Logout
		    </span>
			</a>
			@else
				
			<div class="user_optio_box">
            <a class="btn btn-primary ml-lg-3" href="login">
            <i class="fa fa-user" aria-hidden="true"></i>
		    <span>
               Login
			   </span>
            </a>
			@endif
			</div>
			</div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

