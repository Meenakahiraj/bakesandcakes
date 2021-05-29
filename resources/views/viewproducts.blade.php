<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  
  .navbar
  {
    background: #ffe6ff;
  }
  .navbar-toggler
  {
    border: none!important;
  }
  .nav-link
  {
    color: #e60000!important;
    font-weight:800;
    font-size: 20px;
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
  background-color: #ff99c2;
  color: white;
  transform: rotateY(180deg);
}

div.scrollmenu {
  background-color: #ffccff;
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
<body style="background-color:#ffe6ff;">
  

  <div class="container">
  <div class="row">
  <nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxdtPhjfYWEloSA-yUZCdAEI_Udlt6W4GHsQ&usqp=CAU"  class="src" width=80px></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/"><h2><p style="font-family:Showcard Gothic;color:#e60099"><b>EAT ME!</b></p></h2></a>
        </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/"><p style="color:#ff66cc"><b>Home</b></p></a>
        </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="/viewproducts"><p style="color:#ff66cc"><b>Products</b></p></a>
        </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="/login"><p style="color:#ff66cc"><b>Login</b></p></a>
        </li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="/about"><p style="color:#ff66cc"><b>About us</b></p></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  </div><br>
  </div>
  <div class="container">
<div class="row"><div class="col col-12 col-sm 6 col-md 6 col-lg 6 col-xl 12 col-xxl 12">
  <h1><p style="font-family:Segoe Print;color:#e60073"><b>View Cakes</b></p></h1>
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
     <a href="/login"class="btn btn-warning" type='submit'>Add to carts</a><br>
    </td>&nbsp;
        @endforeach</div>
    </table></div><br><br>
    <div class="container">
    <div class="row">
    
    </div>
    </div>

        
</div>
</div></div></div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>