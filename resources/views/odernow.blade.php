<?php
use  App\Http\Controllers\customercontroller;
$total= customercontroller::CartItem();
?>
<!DOCTYPE html>
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
            background-image: url('https://images.unsplash.com/photo-1536688261748-9d56b3acf077?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NTJ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60');
            background-repeat: no-repeat;
            background-size: 100%;

        } 
        #slider 
  {
    width:100%;
  }
  .carousel-caption
  {
    top:50%;
    transform: translateY(-50%);
    bottom:initial!important;
  }
  .carousel-caption h2
  {
    color: #007bff;
    font-size:50px;
  }
  .d-block
  {
    width:1500px;
    height:600px;
  }
    </style>
</head>
<body style="background-color:#e6f7ff;">
    
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


<div class="container">
<div class="row">
<div class="col col-12 col-sm 6 col-md 6 col-lg 6 col-xl 12 col-xxl 12">
<center><h1><marquee direction="right" behavior="alternate" style="background:#ccebff;" >
<p style="font-family:Bauhaus 93;color:#33adff"><b>Welcome {{session('loggeduser')}}</b></p></h1>
</marquee>
</center>
<table class="table">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>${{$sum}}</td>
        
      </tr>
      <tr>
        <td>Tax</td>
        <td>$0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$10</td>
        
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>${{$sum+10}}</td>
        
      </tr>
    </tbody>
  </table><br></div></div>
  <div class="row">
  <div class="col col-12 col-sm 6 col-md 6 col-lg 6 col-xl 12 col-xxl 12">
  <form action="/oderplace" method="post">
  @csrf
  <div class="form-group">
    <textarea type="email" class="form-control" name="address" placeholder="Enter your address" required></textarea>
  </div><br><br>
  <div class="form-group">
    <label for="pwd">Payment Method</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="payment" value="cash"><span>Online payment</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="payment" value="cash"><span>Cash on delivery</span>
  </div>
  <br><center><button type="submit" class="btn btn-info">Submit</button></center>
  
</form>
  </div>

</div>

</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>