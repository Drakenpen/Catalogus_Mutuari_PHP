<h2><?= $title ?></h2>
	      <div>
	        <p><a class="btn btn-primary" href="<?php echo base_url(); ?>posts/create">Feedback geven</a></p>
	      </div><br>
<?php foreach($posts as $post) { ?>

<div class="row">
	<img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" height="130" width="130">
	  <div class="card-body">
	    <h4 class="card-title"><?php echo $post['title']; ?></h4>
	    <h6 class="card-subtitle mb-2 text-muted">Posted on: <strong><?php echo $post['created_at']; ?></strong></h6>
	    <p class="card-text"><?php echo word_limiter($post['body'], 50); ?></p>
	    <a href="<?php echo site_url('/posts/'.$post['slug']); ?>" class="card-link">Read more</a>
	</div>
</div>

<br><br>

<?php } ?> 

<br><br>

