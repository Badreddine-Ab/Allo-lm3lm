<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <!-- CSS only -->
  <script src="https://kit.fontawesome.com/665d4a69ce.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Get in touch">
  <meta name="description" content="">
  <title>sign in</title>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/nicepage.css" media="screen">
  <link rel="stylesheet" href="sign-in.css" media="screen">
  <script src="https://kit.fontawesome.com/665d4a69ce.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <meta name="generator" content="Nicepage 4.12.5, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Bai+Jamjuree:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i">
  



  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "logo": "images/Allolm3lm-logos_black.png",
      "sameAs": []
    }
  </script>
  <meta name="theme-color" content="#e84a90">
  <meta property="og:title" content="sign in">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode">
  <header class="u-align-center-sm u-align-center-xs u-clearfix u-header u-header" id="sec-dd13">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a href="<?php echo URLROOT ?>" class="u-image u-logo u-image-1" data-image-width="1200" data-image-height="1200">
			<img src="<?php echo URLROOT ?>/img/Allolm3lm-logos_black.png" class="u-logo-image u-logo-image-1">
		  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo URLROOT;?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <?php if(isset($_SESSION['user_id'])) {  ?>
      <li class="nav-item">
			  <a class="nav-link" href="<?php echo URLROOT; ?>/posts">Offers</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="<?php echo URLROOT; ?>/posts/startwork">Become a m3lm</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="<?php echo URLROOT; ?>/posts/profile">Profile</a>
			</li>
			
			<li class="nav-item">
			  <a class="nav-link disabled" href="#">Welcome <?php echo $_SESSION['user_name']; ?></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link " href="<?php echo URLROOT; ?>/users/logout">Logout</a>
			</li>
      
      <?php } else { ?>
        <li class="nav-item">
					<a class="nav-link " href="<?php echo URLROOT; ?>/users/register">Register</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link " href="<?php echo URLROOT; ?>/users/login">Login</a>
				  </li>
        <?php } ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-pink my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  </header>