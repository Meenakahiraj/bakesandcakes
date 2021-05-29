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
            background-image: url('https://images.unsplash.com/photo-1486427944299-d1955d23e34d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTl8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60');
            background-repeat: no-repeat;
            background-size: 100%;

        } 
        .chip {
  display: inline-block;
  padding: 0 25px;
  height: 50px;
  font-size: 16px;
  line-height: 50px;
  border-radius: 25px;
  background-color: #f1f1f1;
}

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
}


.flip-card {
  background-color: transparent;
  width: 200px;
  height: 200px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
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
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
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
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/adminhome"><p style="color:white"><b>Home</b></p></a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <p style="color:white"><b>View and Manage</b></p>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/adminviewcustomer">Customer</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/adminviewcake">Products</a></li> 
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/adminviewfeedback">Feedback</a></li>
          </ul>
        </li>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <li class="nav-item">
          <a class="nav-link" href="/addcake"><p style="color:white"><b>Add items</b></p></a>
        </li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="/logout"><p style="color:white"><b>Logout</b></p></a>
        </li>
      </ul>
      <form class="d-flex" method="post" action="/cussearch">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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

</center></div><div><br><br><br>
<div class="row">
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="https://images.unsplash.com/photo-1488477304112-4944851de03d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTZ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Avatar" style="width:200px;height:200px;">
    </div>
    <div class="flip-card-back">
    <br><br>
      <h3>View and manage products</h3> 
      <a href="/adminviewcake"class="btn btn-warning" type='submit'>View products</a><br>
    </div>
  </div>
</div>
</div>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="data:image/jpeg;base64,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" alt="Avatar" style="width:200px;height:200px;">
    </div>
    <div class="flip-card-back">
    <br><br>
      <h3>View and manage customers</h3> 
      <a href="/adminviewcustomer"class="btn btn-warning" type='submit'>View customers</a><br>
    </div>
  </div>
</div>
</div>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl2WVO8hUxAArCvMb3f37wLB0F7oxy4dMcHQ&usqp=CAU" alt="Avatar" style="width:200px;height:200px;">
    </div>
    <div class="flip-card-back"><br><br>
      <h3>View Feedbacks</h3> 
      <p></p> 
      <a href="/adminviewfeedback"class="btn btn-warning" type='submit'>View Feedbacks</a><br>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>