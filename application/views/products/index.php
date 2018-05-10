<h2><?= $title ?></h2>

<?php foreach($products as $product) { ?>

	<h3><?php echo $product['title']; ?></h3>

	<div class="row">
		<div class="col-md-3">
			<img class="post-thumb" src="<?php echo site_url(); ?>assets/images/products/<?php echo $product['product_image']; ?>" height="200" width="200">
		</div>
		<div class="col-md-9">
		<strong><?php echo $product['name']; ?></strong></small> </br>
			<?php echo word_limiter($product['body'], 50); ?></br></br>
			<p><a href="<?php echo site_url('/products/'.$product['slug']); ?>">Read more</a></p>
		</div>
	</div>
	<br>

<?php } ?> 