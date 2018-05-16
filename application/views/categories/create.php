<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/create'); ?>
	<div class="form-group">
	<label>Name</label>
	<input type="text" class="form-control" name="name" placeholder="Enter name">
	</div>
	<button type="submit" class="btn btn-default">Toevoegen</button>
</form>

<br><br>
<hr>

<!-- Toont bestaande categorieën -->
<h3>Categorieën</h3>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Naam</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($categories as $category) { ?>
    <tr class="table-light">
      <td><a href="<?php echo site_url('/categories/products/'.$category['Id']); ?>"><?php echo $category['name']; ?></td>
    </form>
    </tr>
<?php } ?> 
  </tbody>
</table>  