<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
	<title></title>
	<!-- Bootstrap core CSS -->
	<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/6c06f4b81f.js" crossorigin="anonymous"></script>
	
	<style type="text/css">
	.fundo{
		background-image: url("https://www.transparenttextures.com/patterns/asfalt-dark.png"); 
	}
	.hiperlink{
		text-decoration: none;
	}
</style>



</head>
<body>
	<div class="container-fluid navbar navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand hiperlink" href="#">
      			<i class='fas fa-code border border-1 rounded-3 '  style='font-size:16px; padding:5px; background-color: #20ac6b; color: white; margin-right: 5px;' ></i>NUDEV</a>
			<form class="d-flex">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success" type="submit">Search</button>
			</form>
		</div>
	</div>
	<div class="sticky-top  container-fluid navbar-dark bg-dark ">
		<header class="d-flex justify-content-center py-3">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link hiperlink text-light btn btn-outline-success" style="margin-right:10px;"href="#">FRONT-END</a>
				</li>
				<li class="nav-item">
					<a class="nav-link hiperlink text-light btn btn-outline-success" style="margin-right:10px;"href="#">BACK-END</a>
				</li>
				<li class="nav-item">
					<a class="nav-link hiperlink text-light btn btn-outline-success"style="margin-right:10px;" href="#">TRILHA</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled hiperlink " href="#">Disabled</a>
				</li>
			</ul>
		</header>
	</div>
    @yield('conteudo')
</body>
</html>