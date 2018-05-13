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
      <th scope="row"><img class="post-thumb" src="placeholder" height="30" width="30"></th>
      <td><a href="" class="card-link"></a></td>
      <th scope="row"><small>Posted on: <strong>placeholder</strong></small><th>
        <?php if($this->session->userdata('item_selected') == $product['Id']): ?>   
   <?php endif; ?>    
    </tr>
  </tbody>
</table>  
<button type="submit" class="btn btn-success" name="product_item" value="<?php echo $_SESSION['test']; ?>">Lening afsluiten</button>
<hr class="my-4">
<a class="nav-link" href="<?php echo base_url(); ?>shoppingcart/empty_cart">Winkelwagen legen</a>
<br>
  <?php else : ?>
  <p class="lead text-info">U heeft nog geen product geselecteerd.</p>
  <hr class="my-4">
  <?php endif; ?>