<?php
use  App\Http\Controllers\customercontroller;
$total= customercontroller::CartItem();
?>
</html><!DOCTYPE html>
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
  .flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #0080ff;
  color: white;
  transform: rotateY(180deg);
}

div.scrollmenu {
  background-color: #b3d9ff;
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: #777;
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
<div class="row"><div class="col col-12 col-sm 6 col-md 6 col-lg 6 col-xl 12 col-xxl 12">
<center><h1><marquee direction="right" behavior="alternate" style="background:#ccebff;" >
<p style="font-family:Bauhaus 93;color:#33adff"><b>Welcome {{session('loggeduser')}}</b></p></h1>
</marquee>
</center>
<h1><p style="font-family:Segoe Print;color:#e60073"><b>EAT ME</b></p></h1>
  <hr style="height:3px;border-width:0;color:gray;background-color:pink">
<br><div class="scrollmenu">
<table class="table">
    <tr></tr>
@foreach($cake as $cakes)<td> 
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
 <img src="{{ URL ::asset('assets/project_img/'.$cakes->pimage) }}" alt="Avatar" style="width:300px;height:300px;">
 </div>
 <div class="flip-card-back"><br><br>
      <h3><b>{{ $cakes->pname }}</b></h3> <br>
      <p><b>${{ $cakes->pcost }}</b></p> <br>
     <a href="/cakeview"class="btn btn-warning" type='submit'>View All products</a><br>
    </td>&nbsp;
        @endforeach</div>
    </table></div>
    <br><br>
    <div class="w3-container">
    <br><br><center>
<blockquote class="w3-panel w3-leftbar w3-light-pink">
  <p class="w3-large"><i>"Feel the Royal experience with every bite."</i></p>
  <b><p>...........Order, Eat, Repeat...........</p></b>
</blockquote> </center>
</div></div></div>
    
    <div class="row">
    
    </div>
    </div>

        
</div>

</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>