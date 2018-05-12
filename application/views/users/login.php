<?php echo form_open('users/login'); ?>

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1 class="text-center"><?php echo $title; ?></h1>
		<div class="form-group">
		    <label>Personeelsnummer:</label>
		    <input type="text" class="form-control" name="employeenumber" placeholder="Personeelsnummer">
		</div>
		<div class="form-group">
		    <label>Wachtwoord:</label>
		    <input type="password" class="form-control" name="password" placeholder="Wachtwoord">
		</div>
		 <button type="submit" class="btn btn-default btn-block">Log in</button>
		 <br>
		 <p>Nog geen account? <a href="<?php echo base_url(); ?>users/register">Registreer je hier.</a></p>
	</div>
</div>

<?php echo form_close(); ?>