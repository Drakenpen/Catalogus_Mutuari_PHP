<h2><?= $title ?></h2>
<br>
<?php foreach($categories as $category) { ?>

<br>
	<h3><a href="<?php echo site_url('/categories/products/'.$category['Id']); ?>"><?php echo $category['name']; ?></h3>

<?php } ?> 
