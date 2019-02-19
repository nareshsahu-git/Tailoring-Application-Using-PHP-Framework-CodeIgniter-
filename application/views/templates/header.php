<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tailoring Site</title>

	  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- Navbar starts -->
<nav class="navbar navbar-info navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url('/'); ?>">TAILOR</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
<!-- If user not looged in -->
        <?php if(!$this->session->userdata('logged_in')): ?>
        <li><a href="<?php echo base_url('users/login'); ?>">LOGIN</a></li>
        <li><a href="<?php echo base_url('users/signup'); ?>">SIGNUP</a></li>
        <?php endif; ?>

<!--  If user logged in -->
        <?php if($this->session->userdata('logged_in')): ?>
        <li><a href="<?php echo base_url('users/logout'); ?>">LOGOUT</a></li>
      <?php endif; ?>
        <li><a href="<?php echo base_url('#band'); ?>">SERVICES</a></li>        
        <li><a href="<?php echo base_url('#contact'); ?>">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('#tour'); ?>">HDIW</a></li>
            <li><a href="<?php echo base_url('#'); ?>">Blog</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar closed -->

