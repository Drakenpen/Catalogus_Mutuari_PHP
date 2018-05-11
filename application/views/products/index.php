<h2><?= $title ?></h2>
<br>
<div class="row">
<?php foreach($products as $product) { ?>

<div class="col-lg-4">
	<div class="bs-docs-section">

	<h4 class="card-title"><strong><?php echo $product['name']; ?></strong></h4>
		<div class="card border-primary mb-3" style="max-width: 20rem;">
		  <div class="card-header"><img class="post-thumb" src="<?php echo site_url(); ?>assets/images/products/<?php echo $product['product_image']; ?>" height="150" width="150"></strong></div>    
		  <div class="card-body">
			  <h4 class="card-title"><strong><?php echo word_limiter ($product['title'], 5); ?></strong></h4>
			    <p class="card-text"><?php echo word_limiter($product['body'], 20); ?></p>
			    <p class="card-text"><a href="<?php echo site_url('/products/'.$product['slug']); ?>">Meer over dit product..</a></p>
		  </div>
		</div>
	</div>
</div>
<?php } ?> 
</div>
<br><br>