<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <h1 class="text-center"><?php echo $title; ?></h1>
    <div class="form-group">
      <label>Naam</label>
      <input type="text" class="form-control" name="name" placeholder="Name">
    </div>
    <div class="form-group">
      <label>Personeelsnummer</label>
      <input type="text" class="form-control" name="employeenumber" placeholder="Personeelsnummer">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="Email" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group">
      <label>Wachtwoord</label>
      <input type="password" class="form-control" name="password" placeholder="Wachtwoord">
    </div>
    <div class="form-group">
      <label>Wachtwoord herhalen</label>
      <input type="password" class="form-control" name="password2" placeholder="Wachtwoord herhalen">
    </div>
    <button type="submit" class="btn btn-default btn-block">Versturen</button>
  </div>
</div>
<?php echo form_close(); ?>
