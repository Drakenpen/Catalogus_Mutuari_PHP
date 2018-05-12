<h2><?= $title ?></h2>
<hr class="my-4">

	      <div>
	        <p><a class="btn btn-primary" href="<?php echo base_url(); ?>posts/create">Feedback geven</a></p>
	      </div>
<table class="table table-hover">

  <tbody>
 <?php foreach($posts as $post) { ?>
    <tr class="table-light">
      <th scope="row"><img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" height="30" width="30"></th>
      <td><a href="<?php echo site_url('/posts/'.$post['slug']); ?>" class="card-link"><?php echo $post['title']; ?></a></td>
      <th scope="row"><small>Posted on: <strong><?php echo $post['created_at']; ?></strong></small><th>
    </tr>
 <?php } ?> 
  </tbody>
</table> 

<hr class="my-4">