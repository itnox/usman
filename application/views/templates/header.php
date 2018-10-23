<!DOCTYPE html>
<html>
<head>
	<title>Aimstech</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-static-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand brand-custom" href="<?php echo base_url(); ?>"><strong>Aimstech</strong></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      	<?php if($this->session->userdata('logged_in')) : ?>
		        <li class="active"><a href="<?php echo base_url(); ?>"><strong>Home</strong></a></li>
		        <li><a href="<?php echo base_url(); ?>about"><strong>About</strong></a></li>
	        
		        <li><a href="<?php echo base_url(); ?>callbacks"><strong>Callbacks</strong></a></li>
		        <li><a href="<?php echo base_url(); ?>categories"><strong>Categories</strong></a></li>
	        <?php endif; ?>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	      	<?php if(!$this->session->userdata('logged_in')) : ?>
		      	<li><a href="<?php echo base_url(); ?>users/login"><strong>Login</strong></a></li>
		      	<!-- <li><a href="<?php //echo base_url(); ?>users/register">Register</a></li> -->
	      	<?php endif; ?>
	      	<?php if($this->session->userdata('logged_in')) : ?>
		        <li><a href="<?php echo base_url(); ?>callbacks/create">Create</a></li>
		        <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
	        <?php endif; ?>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
	<div class="container">
		<div class="container">
		<!-- Flash messages -->
			<?php if ($this->session->flashdata('user_registered')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
			<?php endif; ?>

			<?php if ($this->session->flashdata('post_created')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
			<?php endif; ?>

			<?php if ($this->session->flashdata('post_updated')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
			<?php endif; ?>

			<?php if ($this->session->flashdata('callback_updated')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('callback_updated').'</p>'; ?>
			<?php endif; ?>

			<?php if ($this->session->flashdata('callback_created')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('callback_created').'</p>'; ?>
			<?php endif; ?>

			<?php if ($this->session->flashdata('callback_deleted')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('callback_deleted').'</p>'; ?>
			<?php endif; ?>

			<?php if ($this->session->flashdata('category_created')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
			<?php endif; ?>

			<?php if ($this->session->flashdata('login_failed')): ?>
				<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
			<?php endif; ?>

			<?php if ($this->session->flashdata('user_loggedin')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
			<?php endif; ?>

			<?php if ($this->session->flashdata('user_loggedout')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
			<?php endif; ?>

			<?php if ($this->session->flashdata('category_deleted')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
			<?php endif; ?>