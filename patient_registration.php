<?php
  include "inc/connection.php";
  ob_start();
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Registration</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

   <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <style type="text/css">
    

  .gradient-custom-3 {
  /* fallback for old browsers */
  background: #84fab0;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
  /* fallback for old browsers */
  background: #84fab0;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}





  </style>





</head>
<body>


  <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            
              <h3>clini<span id="ccolor">c</span>are</h3>
            
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="cover.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cover.php#about"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cover.php#service"> Services </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cover.php#login"> login </a>
              </li>
            </ul>
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </nav>
      </div>
    </header>

 <!--style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.jpg');"-->

<section class="vh-100 bg-image">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form  method="POST">

                <div class="form-outline mb-4">
                  <input type="text" name="email" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="Firstname" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">First name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="Lastname" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">Last name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="DOB" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">DOB</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="Phone" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">Phone</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" name="NID" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">NID</label>
                </div>





                

                <div class="form-outline mb-4">
                  <select class="form-control" name="District" onchange="myfun(this.value)">
                    <option>Select</option> 
                    <option>Dhaka</option>
                    <option>Sylhet</option>
                    <option>Chittagong</option>
                    <option>Rajshahi</option>
                    <option>Khulna</option>
                    <option>Rongpur</option>
                    <option>Barisal</option>
                    <option>Mymensingh</option>
                  </select>
                  <label>District</label>
                </div> 

                <div class="form-outline mb-4">
                  <select class="form-control" name="Postalcode" id="city">
                    <option> </option>
                  </select>
                  <label>Postalcode</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="StreetAddress" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">Street Address</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="Houseno" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">House no</label>
                </div>

                

                <div class="form-outline mb-4">
                  <input type="text" name="Divisionid" id="form3Example1cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example1cg">Division id</label>
                </div>
                












                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="confirmpassword" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

                

                <div class="d-flex justify-content-center">
                  <button name="register" type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>

                 <!-- <input type="button" name="register" value="" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">-->
                </div>

                

              </form>



  




