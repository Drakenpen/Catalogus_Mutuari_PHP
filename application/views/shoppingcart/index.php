<h2><?= $title ?></h2>
<br>
<hr>
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
    </tr>
  </tbody>
</table> 
	      <?php if($this->session->userdata('item_selected')) : ?>
	        <button type="submit" class="btn btn-success" name="item" value="<?php echo $_SESSION['test']; ?>">Lening afsluiten</button>
	      <?php endif; ?>
<hr class="my-4">
<a class="nav-link" href="<?php echo base_url(); ?>users/empty_cart">Winkelwagen legen</a>
<br>