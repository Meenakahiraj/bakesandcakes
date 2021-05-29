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
            background-image: url('https://images.unsplash.com/photo-1566121933407-3c7ccdd26763?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTh8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60');
            background-repeat: no-repeat;
            background-size: 100%;

        } 
        * {
				box-sizing: border-box;
			}
			body {
				margin: 0;
				/*Display width and height*/
				height: 100vh;
				width: 100vw;
				overflow: hidden;
				font-family: "Lato", sans-serif;
				font-weight: 700;
				/* To make all the elements center */
				display: flex;
				align-items: center;
				justify-content: center;
				/*Font color and background Color*/
				color: #555;
				background: #ecf0f3;
			}
			.gfg-div {
				/* Login Card Width and height */
				width: 430px;
				height: 600px;
				/* padding */
				padding: 20px 35px 15px 35px;
				border-radius: 35px;
				background: #ecf0f3;
				/* Box-shadow for 3d visualization*/
				box-shadow:
				-6px -6px 6px rgba(255, 255, 255, 0.8),
				6px 6px 6px rgba(0, 0, 0, 0.2);
			}
			.gfg-title {
				text-align: center;
				font-size: 20px;
				padding-top: 24px;
				letter-spacing: 0.5px;
				color: #e2ac39;
			}
			.gfg-sub-title {
				text-align: center;
				font-size: 10px;
				padding-top: 7px;
				letter-spacing: 3px;
				color: #df975c;
			}
			.gfg-input-fields {
				width: 100%;
				padding: 20px 5px 10px 5px;
			}
			.gfg-input-fields input {
/* To hide default browser optios of input field */
				border: none;
				outline: none;
				/* Custom design for the input field */
				background: none;
				font-size: 12px;
				color: #555;
				padding: 15px 10px 15px 5px;
			}
			.gfg-email,
			.gfg-password {
				margin-bottom: 15px;
				border-radius: 15px;
				/* Box-shadow for 3d */
				box-shadow: inset 5px 5px 5px #cbced1,
				inset -5px -5px 5px #ffffff;
			}
			.gfg-input-fields svg {
				height: 22px;
				margin: 0 10px -3px 25px;
			}
			.gfg-button {
	/* To hide default browser optios of input field */
				outline: none;
				border: none;
				/* Custom design for the Button */
				cursor: pointer;
				width: 15%;
				height: 40px;
				border-radius: 25px;
				font-size: 10px;
				font-weight: 500;
				font-family: "Lato", sans-serif;
				color: #fff;
				text-align: center;
				background: #ebd28e;
				box-shadow: 7px 7px 8px #cbced1,
				-7px -7px 8px #ffffff;
				transition: 0.5s;
			}
			.gfg-button:hover {
				background: #f08204;
			}
			.gfg-button:active {
				background: #d18616;
			}
			.gfg-link {
				padding-top: 20px;
				text-align: center;
			}
			.gfg-link a {
				text-decoration: none;
				color: rgb(226, 182, 131);
				font-size: 15px;
				transition: 0.5s;
			}
			.gfg-link a:hover {
				text-decoration: none;
				color: #cf550e;
				font-size: 15px;
			}
    </style>
</head>
<body class="background">
<div class="container">
 <div class="row">
 <nav class="navbar navbar-expand-lg navbar-dark bg-info ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">EAT ME!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/shophome"><p style="color:white"><b>Home</b></p></a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <p style="color:white"><b>ADD Items </b></p>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/addcake">Cakes</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/addcookies">Cookies</a></li>
          </ul>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        <li class="nav-item">
          <a class="nav-link" href="/adminviewfeedback"><p style="color:white"><b>View Feedback</b></p></a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
</nav><br>
<div class="row"><br>
        <div class="col">

		<form action="/shopread" method="post">
            {{csrf_field() }}

        <div class="gfg-div">
			<div class="gfg-title">EAT ME</div>
			<div class="gfg-sub-title">
			It's cake O' clock
		</div>
			<div class="gfg-input-fields">
                
            <div class="gfg-email">
					<svg fill="#999" viewBox="0 0 1024 1024">
						
					</svg>
					<input type="text" name="shname"
						placeholder="Shop name" />
				</div>
                <div class="gfg-email">
					<svg fill="#999" viewBox="0 0 1024 1024">
						
					</svg>
				
					<input type="text" name="sadd"
						placeholder="Address" />
				</div>

				<div class="gfg-email">
					<svg fill="#999" viewBox="0 0 1024 1024">
						
					</svg>
				
					<input type="text" name="sphno"
						placeholder="Phone number" />
				</div>
				<div class="gfg-email">
					<svg fill="#999" viewBox="0 0 1024 1024">
						
					</svg>
				
					<input type="text" name="state"
						placeholder="State" />
				</div>


				<div class="gfg-email">
					<svg fill="#999" viewBox="0 0 1024 1024">
						
					</svg>
				
					<input type="text" name="suname"
						placeholder="Username" />
				</div>

				<div class="gfg-email">
					<svg fill="#999" viewBox="0 0 1024 1024">
						
					</svg>
				
					<input type="text" name="spassword"
						placeholder="Password" />
				</div>
			</div>
			<button class="gfg-button">
			Submit</button>
			
		</div>

        </div><br><br><br>
        <div class="col">
		<center>
		<div class="w3-container">
		<div class="w3-container">

<blockquote class="w3-panel w3-leftbar w3-light-grey">

  <p class="w3-large"><i>“Make A Customer, Not A Sale.”</i></p>
  <p> – Katherine Barchetti</p>
</blockquote> 
</div>
			  <br> <br>
			<div class="w3-card-4" style="width:50%">
			  <img src="https://media.istockphoto.com/photos/hostesses-serving-dessert-during-cancer-awareness-event-picture-id944221306?k=6&m=944221306&s=612x612&w=0&h=kwe0kdCJI7y-aaXZhHfwknH5ZsXpIwHY2_aJ87tK2TA=" alt="Alps" style="width:100%">
			  <div class="w3-container w3-center">
		  </div>
			</div>
		
		</center><br><br>
		<center>
		<div class="w3-container"> 
			<div class="w3-card-4" style="width:50%">
			  <img src="https://media.istockphoto.com/photos/bake-sale-cookies-picture-id482692081?k=6&m=482692081&s=612x612&w=0&h=VGbUtoLyEYnq5JkgEeLZLo-dPYWmVLsyp2hWofvLooc=" alt="Alps" style="width:100%">
			  <div class="w3-container w3-center">
		  </div>
			</div>
			
		</center>
		</div>
		</div>

		
		
</div>
 </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>  
</body>
</html>