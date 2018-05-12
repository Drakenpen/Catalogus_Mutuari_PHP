<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
	<input type="hidden" name="Id" value="<?php echo $post['Id']; ?>">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" name="body" placeholder="Add Body"><?php echo $post['body']; ?></textarea>
  </div>
  <div class="form-group">
    <label>Categorieën</label>
      <select name="category_id" class="form-control">
          <?php foreach($categories as $category) { ?>
          <option <?php if ($post['category_id'] == $category['Id']){ echo "selected"; }?> value="<?php echo $category['Id']; ?>"><?php echo $category['name']; ?></option>
          <?php } ?> 
      </select>
  </div> 
  <div class="form-group">
    <label>Upload Image</label>
    <input type="file" name="userfile" size="20">
  </div>  
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<br><br>
<hr>
<h3>Deze post verwijderen</h3>
<hr>
  <div>
    <?php echo form_open('/posts/delete/'.$post['Id']); ?>
      <input type='submit' value="delete" class="btn btn-primary">
    </form> 
  </div>