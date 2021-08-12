<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo in_public_url('styles/header.css'); ?>">
	<!-- declare PAGE TITLE VARIABLE before importing header -->
	<title><?php echo $page_title??'Unknown'; ?></title>
</head>
<body style="width:80%;margin:0 auto;background-color:#e9ecef;">
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">Project_Name</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		      <div class="navbar-nav">
		        <a class="nav-link active" aria-current="page" href="#">Home</a>
		        <a class="nav-link active" href="#">About us</a>
		        <a class="nav-link active" href="#">Contact us</a>
		        <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">Application</a>
		      </div>
		    </div>
		  </div>
		</nav>
	</header>

