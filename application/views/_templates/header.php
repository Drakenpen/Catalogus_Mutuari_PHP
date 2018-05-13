<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <title>Catalogus Mutuari 2.0</title>
		 	<link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css">
		 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	</head>
	<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="<?php echo base_url(); ?>products">Mutuari 2.0</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarColor01">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url(); ?>posts">Feedback</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url(); ?>categories">Categorieën</a>
	      </li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url(); ?>shoppingcart/index">Winkelmand</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url(); ?>users/index">Account</a>
	      </li>
	      <?php if($this->session->userdata('logged_in')) : ?>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Uitloggen</a>
	      </li>
	      <?php endif; ?>
	    </ul>
	  </div>
	</nav>
	<br>

   	<div class="container">
   		<!-- shopping cart session-->
   		<?php if($this->session->flashdata('cart_emptied')): ?>
  			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('cart_emptied').'</p>'; ?>
  		<?php endif; ?>
   		<?php if($this->session->flashdata('product_added')): ?>
  			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('product_added').'</p>'; ?>
  		<?php endif; ?>
   		<?php if($this->session->flashdata('adding_failed')): ?>
  			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('adding_failed').'</p>'; ?>
  		<?php endif; ?>

  		<!-- user session -->
   		<?php if($this->session->flashdata('user_loggedin')): ?>
  			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
  		<?php endif; ?>

   		<?php if($this->session->flashdata('user_loggedout')): ?>
  			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
  		<?php endif; ?>
   		<?php if($this->session->flashdata('login_failed')): ?>
  			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
  		<?php endif; ?>

  		<!-- content created -->
  		<?php if($this->session->flashdata('user_registered')): ?>
  			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
  		<?php endif; ?>
   		<?php if($this->session->flashdata('category_created')): ?>
  			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
  		<?php endif; ?>
   		<?php if($this->session->flashdata('product_created')): ?>
  			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('product_created').'</p>'; ?>
  		<?php endif; ?>		
   		<?php if($this->session->flashdata('post_created')): ?>
  			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
  		<?php endif; ?>
      <?php if($this->session->flashdata('product_item_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('product_item_created').'</p>'; ?>
      <?php endif; ?>

  		<!-- content edited or deleted -->
   		<?php if($this->session->flashdata('product_updated')): ?>
  			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('product_updated').'</p>'; ?>
  		<?php endif; ?>
  		<?php if($this->session->flashdata('category_updated')): ?>
  			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_updated').'</p>'; ?>
  		<?php endif; ?>
      <?php if($this->session->flashdata('product_item_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('product_item_updated').'</p>'; ?>
      <?php endif; ?>


   		<?php if($this->session->flashdata('product_deleted')): ?>
  			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('product_deleted').'</p>'; ?>
  		<?php endif; ?>
      <?php if($this->session->flashdata('product_item_deleted')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('product_item_deleted').'</p>'; ?>
      <?php endif; ?>
