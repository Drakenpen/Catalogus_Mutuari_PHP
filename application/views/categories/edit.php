<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/update'); ?>
<input type="hidden" name="Id" value="<?php echo $category['Id']; ?>">
	<div class="form-group">
	<label>Naam</label>
	<input type="text" class="form-control" name="name" placeholder="<?php echo $category['name']; ?>" value="<?php echo $category['name']; ?>">
	</div>
	<button type="submit" class="btn btn-default">Wijzigen</button>
</form>