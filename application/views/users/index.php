<h2><?= $title ?></h2>
<br>

<div class="jumbotron">
  <p class="lead text-success">Je bent ingelogd als <?php echo $_SESSION['employeenumber']; ?>.</p>
  <p class="lead">Dit is een versie van Catalogus Mutuari die van scratch gebouwd is op het codeigniter framework in PHP, in plaats van het C# Project dat gebouwd is op het Umbraco CMS. Dit project is bedoelt om de flexibiliteit van een from-scratch applicatie te vergelijken met het huidige systeem wat gebaseerd is op een bestaand CMS.</p>
</div>

<br>
<hr>
<h3>Lopende leningen</h3>
<hr>
<?php if($loans) : ?>
<table class="table table-hover">
  <tbody>
    <?php foreach($loans as $loan) { ?>
    <tr class="table-light">
      <th scope="row"><img class="post-thumb" src="placeholder" height="30" width="30"></th>
      <td><a href="" class="card-link">welkom</a></td>
      <th scope="row"><small>Gebruiker: <strong></strong></small><th>
      <th scope="row"><small>Product: <strong></strong></small><th>
    </tr>
    <?php } ?> 
  </tbody>
</table> 
<?php else : ?>
  <p>niets te zien hier</p>
<?php endif; ?>
<hr class="my-4">
<br>

<br>
<hr>
<h3>Leen geschiedenis</h3>
<hr>
<?php if($loans) : ?>
<table class="table table-hover">
  <tbody>
    <?php foreach($loans as $loan) { ?>
    <tr class="table-light">
      <th scope="row"><img class="post-thumb" src="placeholder" height="30" width="30"></th>
      <td><a href="" class="card-link">welkom</a></td>
      <th scope="row"><small>Gebruiker: <strong></strong></small><th>
      <th scope="row"><small>Product: <strong></strong></small><th>
    </tr>
    <?php } ?> 
  </tbody>
</table> 
<?php else : ?>
  <p>niets te zien hier</p>
<?php endif; ?>
<hr class="my-4">
<br>

<!-- <?php if($this->session->userdata('user_id') == $loan['user_id']): ?>
<p>welkom</p>
<?php endif; ?> -->
