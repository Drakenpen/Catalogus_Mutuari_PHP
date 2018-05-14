<h2>
	<?php echo $product['title']; ?> 	      
	<?php if($this->session->userdata('logged_in')) : ?>
	      <a class="btn btn-secondary" href="<?php echo base_url(); ?>products/edit/<?php echo $product['slug']; ?>">Edit</a>
	<?php endif; ?>
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
<div class="jumbotron">
<div class="row">
<?php foreach($product_items as $product_item) { ?>

<div class="col-lg-4">
	<div class="bs-docs-section">

		<div class="card border-primary mb-3" style="max-width: 20rem;">  
		  <div class="card-body">
		  		<h4 class="card-title">
		  			<strong><?php echo word_limiter ($product_item['title'], 5); ?> <?php if($this->session->userdata('logged_in')) : ?>
          				<a class="btn btn-secondary" href="<?php echo base_url(); ?>product_items/edit/<?php echo $product_item['slug']; ?>">Edit</a>
<?php endif; ?>
					</strong>
				</h4>
			    <p class="card-text"><?php echo character_limiter($product_item['body'], 100); ?></p>
                <p>
	                    <?php echo form_open('shoppingcart/add_item'); ?>                  	
	                        <button type="submit" class="btn btn-success" name="product_item" value="<?php echo $product_item['Id']; ?>">Toevoegen</button>
	                    <?php echo form_close(); ?>                    
                </p>
		  </div>
		</div>
	</div>
</div>
<?php } ?> 
</div>
</div>
<?php else : ?>
	<p class="lead text-info">Er zijn momenteel geen exemplaren voor dit product.</p>
<?php endif; ?>