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
       
    </style>
</head>
<body style="background-color:#e6f7ff;>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-info ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">EAT ME!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/cushome"><p style="color:white"><b>Home</b></p></a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <p style="color:white"><b>View Items </b></p>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/cakeview">Cakes</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/cookiesview">Cookies</a></li>
          </ul>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        <li class="nav-item">
          <a class="nav-link" href="/cusfeedback"><p style="color:white"><b>Send Feedback</b></p></a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="/logout"><p style="color:white"><b>Logout</b></p></a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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
<h1><p style="font-family:Segoe Print;"><b>View Cookies</b></p></h1><hr><br>
    
    <table class="table">
    <tr>
        <th>Product</th>
        <th> Name</th>
        <th> Cost</th>
        <th> Description</th>
        
            
    </tr>
    @foreach($cookies as $cookies)
        
        <tr>
            <td><img width="150" height="100" src="{{ URL ::asset('assets/project_img/'.$cookies->cimage) }}"></td>
            <td>{{ $cookies->cname }}</td>
            <td>{{ $cookies->ccost }}</td>
            <td>{{ $cookies->cdesc }}</td>
            <td><a class="btn btn-info" href="/buycookies/{{ $cookies->id }}">BUY</a></td>
            
        </tr>
        @endforeach
    </table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>