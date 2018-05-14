<h2><?= $title ?></h2>
<br>
<hr>
<?php if($this->session->userdata('item_selected')) : ?>
  <div class="progress">
    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
<hr>
<h3>Overzicht</h3>
<hr>
<table class="table table-hover">
  <tbody>
    <tr class="table-light">
      <?php foreach($products as $product) { ?>
      <th scope="row"><img class="post-thumb" src="<?php echo site_url(); ?>assets/images/products/<?php echo $product['post_image']; ?>" height="30" width="30"></th></th>
      <td><a href="" class="card-link"></a></td>
      <th scope="row"><?php echo $product['title']; ?></th>
      <th scope="row"><?php echo $product['slug']; ?></th>
     <?php } ?> 
    </tr>
  </tbody>
</table>  
  <?php if($this->session->userdata('logged_in')) : ?>
  
<button type="submit" class="btn btn-success" name="product_item" value="">Lening afsluiten</button>
<?php else : ?>
  <p class="lead text-info">Log in om door te gaan naar bestellen.</p>
<?php endif; ?>
<hr class="my-4">
<a class="nav-link" href="<?php echo base_url(); ?>shoppingcart/empty_cart">Winkelwagen legen</a>
<br>
  <?php else : ?>
  <p class="lead text-info">U heeft nog geen product geselecteerd.</p>
  <hr class="my-4">
  <?php endif; ?>