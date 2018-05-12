<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <title>Move is de tip.</title>
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
	        <a class="nav-link" href="">Account</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<br>

   	<div class="container">

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
  			<?php echo '<p class="alert alert-succes">'.$this->session->flashdata('post_created').'</p>'; ?>
  		<?php endif; ?>
   		<?php if($this->session->flashdata('product_updated')): ?>
  			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('product_updated').'</p>'; ?>
  		<?php endif; ?>

   		<?php if($this->session->flashdata('product_deleted')): ?>
  			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('product_deleted').'</p>'; ?>
  		<?php endif; ?>
