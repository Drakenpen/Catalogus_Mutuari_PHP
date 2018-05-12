<h2><?= $title ?></h2>
	      <div>
	        <p><a class="btn btn-primary" href="<?php echo base_url(); ?>posts/create">Feedback geven</a></p>
	      </div><br>
<?php foreach($posts as $post) { ?>

	<h3><?php echo $post['title']; ?></h3>

	<div class="row">
		<div class="col-md-3">
			<img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" height="200" width="200">
		</div>
		<div class="col-md-9">
		<small class="post-date">Posted on: <strong><?php echo $post['created_at']; ?></strong></small> </br>
			<?php echo word_limiter($post['body'], 50); ?></br></br>
			<p><a href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read more</a></p>
		</div>
	</div>
	<br>

<?php } ?> 

<br><br>