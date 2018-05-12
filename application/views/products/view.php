<h2>
	<?php echo $product['title']; ?> 
	<a class="btn btn-secondary" href="<?php echo base_url(); ?>products/edit/<?php echo $product['slug']; ?>">Edit</a>
</h2>
<br>
<div class="product-body">
<?php echo $product['body']; ?>
</div>
<br>

<?php if($this->session->userdata('logged_in')) : ?>
<?php endif; ?>

<br><br>
<hr>
<h3>Productexemplaren</h3>
<hr>
<?php if($product_items) : ?>
<div class="row">
<?php foreach($product_items as $product_item) { ?>

<div class="col-lg-4">
	<div class="bs-docs-section">

		<div class="card border-primary mb-3" style="max-width: 20rem;">  
		  <div class="card-body">
			  <h4 class="card-title"><strong><?php echo word_limiter ($product_item['title'], 5); ?></strong></h4>
			    <p class="card-text"><?php echo word_limiter($product_item['body'], 20); ?></p>
			    <p class="card-text"><a href="">Meer over dit product..</a></p>
		  </div>
		</div>
	</div>
</div>
<?php } ?> 
</div>

<?php else : ?>
	<p>Er zijn momenteel geen exemplaren voor dit product.</p>
<?php endif; ?>