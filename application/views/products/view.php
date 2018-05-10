<h2><?php echo $product['title']; ?></h2>
<br>
<div class="product-body">
<?php echo $product['body']; ?>
</div>

<hr>


<div class="btn-group btn-group-toggle" data-toggle="buttons">
<?php echo form_open('/products/delete/'.$product['Id']); ?>
	<input type='submit' value="delete" class="btn btn-primary">
</form> 
  
<a class="btn btn-secondary" href="<?php echo base_url(); ?>products/edit/<?php echo $product['slug']; ?>">Edit</a>
</div>

