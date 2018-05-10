<h2><?= $title ?></h2>

<?php foreach($posts as $post) { ?>

	<h3><?php echo $post['title']; ?></h3>

	<small class="post-date">Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post[ 'name']; ?></strong></small> </br>
<div class="post-body">
	<?php echo word_limiter($post['body'], 50); ?>
</div></br>
	<p><a href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read more</a></p>

<?php } ?> 