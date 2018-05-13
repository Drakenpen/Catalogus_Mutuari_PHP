<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('product_items/create'); ?>
  <div class="form-group">
    <label>Product</label>
      <select name="product_id" class="form-control">
          <?php foreach($products as $product) { ?>
          <option value="<?php echo $product['Id']; ?>"><?php echo $product['title']; ?></option>
          <?php } ?> 
      </select>
  </div> 
  <div class="form-group">
    <label>Naam</label>
    <input type="text" class="form-control" name="title" placeholder="Naam">
  </div> 
  <div class="form-group">
    <label>Content</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Content"></textarea>
  </div>
  <div class="form-group">
    <label>Afbeelding bijvoegen;</label>
    <input type="file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-default">Toevoegen</button>
</form>