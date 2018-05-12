<h2>
	<?php echo $post['title']; ?> 	      
	<?php if($this->session->userdata('logged_in')) : ?>
	      <a class="btn btn-secondary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
	<?php endif; ?>
</h2>
<br>

<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small> </br>
<div class="post-body">
<?php echo $post['body']; ?>
</div>

<?php if($this->session->userdata('logged_in')) : ?>
<hr>
	<div class="btn-group btn-group-toggle" data-toggle="buttons">

</div>
<?php endif; ?>
