<h2><?= $title ?></h2>
<br>
<div class="jumbotron">
<?php if($products) : ?>
<div class="row">
<?php foreach($products as $product) { ?>
<div class="col-lg-4">
	<div class="bs-docs-section">

	<h4 class="card-title"><small><a href="<?php echo site_url('/categories/products/'.$product['category_id']); ?>"><?php echo ($product['name']); ?></a></small></h4>
		<div class="card border-primary mb-3" style="max-width: 20rem;">
		  <div class="card-header"><img class="post-thumb" src="<?php echo site_url(); ?>assets/images/products/<?php echo $product['product_image']; ?>" height="150" width="150"></strong></div>    
		  <div class="card-body">
			  <h4 class="card-title"><strong><?php echo word_limiter ($product['title'], 5); ?></strong></h4>
			    <p class="card-text"><?php echo character_limiter($product['body'], 100); ?></p>
			    <p class="card-text"><a href="<?php echo site_url('/products/'.$product['slug']); ?>">Meer over dit product..</a></p>
		  </div>
		</div>
	</div>
</div>
<?php } ?> 
</div>
<br><br>
</div>
<?php else : ?>
<div class="jumbotron">
  <p class="lead text-info">Er lijken hier nog geen producten te zijn.</p>
  <hr class="my-4">
  <p class="lead">
    <a class="btn btn-info btn-lg" href="<?php echo base_url(); ?>categories" role="button">Terug naar categorieën</a>
  </p>
</div>
<?php endif; ?>