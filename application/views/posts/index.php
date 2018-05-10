<h2><?= $title ?></h2>

<?php foreach($posts as $post) { ?>

	<h3><?php echo $post['title']; ?></h3>

	<div class="row">
		<div class="col-md-3">
			<img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" height="200" width="200">
		</div>
		<div class="col-md-9">
		<small class="post-date">Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post[ 'name']; ?></strong></small> </br>
			<?php echo word_limiter($post['body'], 50); ?></br></br>
			<p><a href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read more</a></p>
		</div>
	</div>

<?php } ?> 