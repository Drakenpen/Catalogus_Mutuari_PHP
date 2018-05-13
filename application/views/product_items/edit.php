<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('product_items/update'); ?>
  <input type="hidden" name="Id" value="<?php echo $product_item['Id']; ?>">
  <div class="form-group">
    <label>Product</label>
      <select name="product_id" class="form-control">
          <?php foreach($products as $product) { ?>
          <option <?php if ($product_item['product_id'] == $product['Id']){ echo "selected"; }?> value="<?php echo $product['Id']; ?>"><?php echo $product['title']; ?></option>
          <?php } ?> 
      </select>
  </div> 
  <div class="form-group">
    <label>Naam</label>
    <input type="text" class="form-control" name="title" placeholder="Naam" value="<?php echo $product_item['title']; ?>">
  </div>
  <div class="form-group">
    <label>Omschrijving</label>
    <textarea class="form-control" name="body" placeholder="Content"><?php echo $product_item['body']; ?></textarea>
  </div>
  <div class="form-group">
    <label>Afbeelding bijvoegen;</label>
    <input type="file" name="userfile" size="20">
  </div>
    <button type="submit" class="btn btn-default">Wijzigen</button>
</form>

<br><br>
<hr>
<h3>Dit exemplaar verwijderen</h3>
<hr>
  <div>
    <?php echo form_open('/product_items/delete/'.$product_item['Id']); ?>
      <input type='submit' value="delete" class="btn btn-danger">
    </form> 
  </div>