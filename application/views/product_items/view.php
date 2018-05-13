<h2>
	<?php echo $product_item['title']; ?> 	      
	<?php if($this->session->userdata('logged_in')) : ?>
	      <a class="btn btn-secondary" href="<?php echo base_url(); ?>product_items/edit/<?php echo $product_item['slug']; ?>">Edit</a>
	<?php endif; ?>
</h2>
<br>
<div class="product-body">
<?php echo $product_item['body']; ?>
</div>
<br>