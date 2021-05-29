<!DOCTYPE html>
<html>
	<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible"
			content="IE=edge" />
		<title></title>
		<meta name="description"
			content="" />
		<meta name="viewport"
			content="width=device-width,
					initial-scale=1" />
		<style>
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
				color: #cc0088;
				background: #ecf0f3;
			}
			.gfg-div {
				/* Login Card Width and height */
				width: 430px;
				height: 500px;
				/* padding */
				padding: 20px 35px 15px 35px;
				border-radius: 35px;
				background: #ecf0f3;
				/* Box-shadow for 3d visualization*/
				box-shadow:
				-6px -6px 6px rgba(255, 255, 255, 0.8),
				6px 6px 6px rgba(0, 0, 0, 0.2);
			}
			.gfg-logo {
				background: url("gfg-logo.png");
				background-size: cover;
				width: 100px;
				height: 100px;
				border-radius: 50%;
				margin: 0 auto;
				/* Box-shadow for logo */
				box-shadow: 0px 0px 2px #5f5f5f,
				0px 0px 0px 5px #ecf0f3,
				8px 8px 15px #a7aaaf,
				-8px -8px 15px #ffffff;
			}
			.gfg-title {
				text-align: center;
				font-size: 28px;
				padding-top: 24px;
				letter-spacing: 0.5px;
				color: #cc0088;
			}
			.gfg-sub-title {
				text-align: center;
				font-size: 15px;
				padding-top: 7px;
				letter-spacing: 3px;
				color: #cc0088;
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
				font-size: 18px;
				color:#cc0088;
				padding: 15px 10px 15px 5px;
			}
			.gfg-email,
			.gfg-password {
				margin-bottom: 20px;
				border-radius: 20px;
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
				width: 100%;
				height: 60px;
				border-radius: 25px;
				font-size: 20px;
				font-weight: 700;
				font-family: "Lato", sans-serif;
				color: #fff;
				text-align: center;
				background: #cc0088;
				box-shadow: 7px 7px 8px #cbced1,
				-7px -7px 8px #ffffff;
				transition: 0.5s;
			}
			.gfg-button:hover {
				background: #ff99dd;
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
				color: #ff99dd;
				font-size: 15px;
			}
		</style>
	</head>
	<body style="background-color:#ffe6ff;">
	<div class="container">
 <div class="row">
 <nav class="navbar navbar-expand-lg navbar-dark bg-pink ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/"><p style="color:#b30077"><b>Home</b></p></a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link" href="/login"><p style="color:#b30077"><b><u>Login</u></b></p></a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<li class="nav-item">
          <a class="nav-link" href="/viewproducts"><p style="color:#b30077"><b>Products</b></p></a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<li class="nav-item">
          <a class="nav-link" href="/"><p style="color:#b30077"><b>Back</b></p></a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		
		
      </ul>
    
    </div>
  </div>
</nav><br>

  
</ul><center>
<div class="container">
<div class="row"><div class="col col-12 col-sm 6 col-md 6 col-lg 6 col-xl 12 col-xxl 12">


			<form action="/logs" method="post">
			@csrf

			@if(count($errors)>0)
            <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}} </li>
            @endforeach
            </ul>
            </div>
            @endif
            @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{Session::get('fail')}}
            </div>
            @endif



		<div class="gfg-div">
			<div class="gfg-logo"></div>
			<div class="gfg-title">EAT ME</div>
			<div class="gfg-sub-title">
			It's cake O' clock
		</div>
			<div class="gfg-input-fields">
				<div class="gfg-email">
					<svg fill="#999" viewBox="0 0 1024 1024">
						<path
							class="path1"
							d=
"M896 307.2h-819.2c-42.347 0-76.8 34.453-76.8 76.8v460.8c0
42.349 34.453 76.8 76.8 76.8h819.2c42.349 0 76.8-34.451
76.8-76.8v-460.8c0-42.347-34.451-76.8-76.8-76.8zM896
358.4c1.514 0 2.99 0.158 4.434 0.411l-385.632 257.090c-14.862
9.907-41.938 9.907-56.802 0l-385.634-257.090c1.443-0.253
2.92-0.411 4.434-0.411h819.2zM896 870.4h-819.2c-14.115
0-25.6-11.485-25.6-25.6v-438.566l378.4 252.267c15.925
10.618 36.363 15.925 56.8 15.925s40.877-5.307
56.802-15.925l378.398-252.267v438.566c0 14.115-11.485
25.6-25.6 25.6z"
						></path>
					</svg>
					<input type="text" name="email"
						placeholder="email" />
				</div>
				<div class="gfg-password">
					<svg fill="#999"
						viewBox="0 0 1024 1024">
						<path
							class="path1"
							d=
"M742.4 409.6h-25.6v-76.8c0-127.043-103.
357-230.4-230.4-230.4s-230.4 103.357-230.4
230.4v76.8h-25.6c-42.347 0-76.8 34.453-76.8
76.8v409.6c0 42.347 34.453 76.8 76.8 76.8h512c42.347
0 76.8-34.453 76.8-76.8v-409.6c0-42.347-34.453-76.
8-76.8-76.8zM307.2 332.8c0-98.811 80.389-179.2
179.2-179.2s179.2 80.389 179.2 179.2v76.8h-358.4v-76.8zM768
896c0 14.115-11.485 25.6-25.6 25.6h-512c-14.115 0-25.6-11.
485-25.6-25.6v-409.6c0-14.115 11.485-25.6 25.6-25.6h512c14.
115 0 25.6 11.485 25.6 25.6v409.6z"
						></path>
					</svg>
					<input type="password" name="password"
						placeholder="password" />
				</div>
			</div>
			<button class="gfg-button" type="submit">Signin
			 </button>
			<div class="gfg-link"><a href="/cusreg">
			Not a Member?<u>Sign up now</u></a> or
			<a href="#">Cancel</a></div>
		</div></center>
		</form></div><div></div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	</body>
</html>
