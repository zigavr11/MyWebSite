<DOCTYPE html>
<?php
	session_start();
?>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script></head>
   <style>
   
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
      .row.content {height: 600px}
    
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
  <body>
  
	<nav class="navbar navbar-inverse">
	<div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">MVC Primer</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li <?php if($controller!='oglasi') echo "class=\"active\""?>><a href='index.php'>Domov</a></li>
		<li <?php if($controller=='uporabnik') echo "class=\"active\""?>><a href='?controller=uporabnik&action=index'>Uporabniki</a></li>
      </ul>
	   <ul class="nav navbar-nav navbar-right">
		<?php
			if(isset($_SESSION["username"])){
				echo "<li><a href=\"?controller=registracija&action=odjava\"><span class=\"glyphicon glyphicon-log-in\"></span> Odjava</a></li>";
			}
			else{
				echo "<li><a href=\"?controller=registracija&action=index\"><span class=\"glyphicon glyphicon-user\"></span> Registracija</a></li>"; 
				echo "<li><a href=\"?controller=registracija&action=prijavaHTML\"><span class=\"glyphicon glyphicon-log-in\"></span> Prijava</a></li>";
			}
			
		?>
		
      </ul>
    </div>
	</div>
	</nav>
	
  <div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="?controller=uporabnik&action=dodaj">Dodaj uporabnika</a></p>
	  <p><a href="?controller=oglasi&action=index">Vsi oglasi</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
    <?php require_once('routes.php'); ?> 
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>Reklame</p>
      </div>
      <div class="well">
        <p>Reklame</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Moji oglasi - MVC primer</p>
</footer>
<body>
</html>