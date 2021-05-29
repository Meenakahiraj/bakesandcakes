<?php
use  App\Http\Controllers\customercontroller;
$total= customercontroller::CartItem();
?><!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
    <style>
        .background
         {
            background-image: url('data:image/jpeg;base64,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');
            background-repeat: no-repeat;
            background-size: 100%;

        } 
        body {
    background: #222D32;
    font-family: 'Roboto', sans-serif;
}

.login-box {
    margin-top: 40px;
    height: 100px;
    width: 500px;
    background: ;
    text-align: center;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

.login-key {
    height: 100px;
    font-size: 80px;
    line-height: 100px;
    background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.login-title {
    margin-top: 10px;
    text-align: left;
    font-size: 30px;
    letter-spacing: 2px;
    margin-top: 15px;
    font-weight: bold;
    color: #ff00aa;
}

.login-form {
    margin-top: 20px;
    text-align: left;
}

input[type=text] {
    background-color: #ff99dd;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    margin-bottom: 20px;
    padding-left: 0px;
    color: black;
}

input[type=password] {
    background-color:#ff99dd;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    padding-left: 0px;
    margin-bottom: 20px;
    color:  #b3d9ff;
}

.form-group {
    margin-bottom: 40px;
    outline: 0px;
}

.form-control:focus {
    border-color: inherit;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-bottom: 2px solid #0DB8DE;
    outline: 0;
    background-color: #b3d9ff;
    color: black;
}

input:focus {
    outline: none;
    box-shadow: 0 0 0;
}

label {
    margin-bottom: 0px;
}

.form-control-label {
    font-size: 15px;
    color: dark violet;
    font-weight: bold;
    letter-spacing: 1px;
}

.btn-outline-primary {
    border-color: #0DB8DE;
    color: #e60073;
    border-radius: 0px;
    font-weight: bold;
    letter-spacing: 1px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.btn-outline-primary:hover {
    background-color: blue;
    right: 0px;
}

.login-btm {
    float: left;
}

.login-button {
    padding-right: 0px;
    text-align: right;
    margin-bottom: 25px;
}

.login-text {
    text-align: left;
    padding-left: 0px;
    color: black;
    font-size: 20px;
}

.loginbttm {
    padding: 0px;
}
        
    </style>
</head>
<body  style="background-color:#e6f7ff;">
    
<nav class="navbar navbar-expand-lg navbar-dark bg-info ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">EAT ME!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/cushome"><p style="color:white"><b>Home</b></p></a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        <li class="nav-item">
          <a class="nav-link" href="/cakeview"><p style="color:white"><b>Products</b></p></a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="/cusfeedback"><p style="color:white"><b>Send Feedback</b></p></a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="/myoders"><p style="color:white"><b>Oders</b></p></a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="/cartlist"><p style="color:white"><b>cart({{$total}})</b></p></a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="/logout"><p style="color:white"><b>Logout</b></p></a>
        </li>
      </ul>
      
      
      <form class="d-flex" method="post" action="/shsearch">
      {{csrf_field() }}
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="shname">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      
    </div>
  </div>
</nav>

<center><h1><marquee direction="right" behavior="alternate" style="background:#ccebff;" >
<p style="font-family:Bauhaus 93;color:#33adff"><b>Welcome {{session('loggeduser')}}</b></p></h1>
</marquee>
</center>
<div class="container">
        <div class="row">
            
        <div class="col col-12 col-sm 6 col-md 6 col-lg 6 col-xl 12 col-xxl 12">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                   FEEDBACK
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                    <form action="/feedback" method="post">
   		                 {{csrf_field() }}
                            <div class="form-group">
                                <label class="form-control-label">Customer Name :</label>
                                <input type="text" class="form-control" name="cusname">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Product Name :</label>
                                <input type="text" name="pname" class="form-control" i>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Feedback :</label>
                                <input type="text" name="feed" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <a type="submit" class="btn btn-outline-primary" href="/cusfeedback">SEND</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>


</div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>