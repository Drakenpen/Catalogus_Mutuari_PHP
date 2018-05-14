<h2><?= $title ?></h2>
<br>

<div class="jumbotron">
  <p class="lead text-success">Je bent ingelogd als <?php echo $_SESSION['employeenumber']; ?>.</p>
  <p class="lead">Dit is een versie van Catalogus Mutuari die van scratch gebouwd is op het codeigniter framework in PHP, in plaats van het C# Project dat gebouwd is op het Umbraco CMS. Dit project is bedoelt om de flexibiliteit van een from-scratch applicatie te vergelijken met het huidige systeem wat gebaseerd is op een bestaand CMS.</p>
</div>

<br>
<hr>
<h3>Uw leningen</h3>
<hr>
<?php if($loans) : ?>
<table class="table table-hover">
    <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Gebruiker</th>
      <th scope="col">Product</th>
      <th scope="col"></th>
      <th scope="col">Slug</th>
      <th scope="col"></th>
      <th scope="col">Begin datum</th>
      <th scope="col"></th>
      <th scope="col">Eind datum</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($loans as $loan) { ?>
    <tr class="table-light">
      <th scope="row"><img class="post-thumb" src="<?php echo site_url(); ?>assets/images/products/<?php echo $loan['post_image']; ?>" height="30" width="30"></th>
      <th scope="row"><?php echo $_SESSION['employeenumber']; ?>
      <th scope="row"><?php echo $loan['title']; ?><th>
      <th scope="row"><?php echo $loan['slug']; ?><th>
      <th scope="row"><?php echo $loan['loan_start']; ?><th>
      <th scope="row"><?php echo $loan['loan_end']; ?><th>
    </tr>
    <?php } ?> 
  </tbody>
</table> 
<?php else : ?>
  <p>niets te zien hier</p>
<?php endif; ?>
<hr class="my-4">
<br>
