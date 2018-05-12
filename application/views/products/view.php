<h2>
	<?php echo $product['title']; ?> 	      
	<?php if($this->session->userdata('logged_in')) : ?>
	      <a class="btn btn-secondary" href="<?php echo base_url(); ?>products/edit/<?php echo $product['slug']; ?>">Edit</a>
	<?php endif; ?>
</h2>
<br>
<div class="product-body">
<?php echo $product['body']; ?>
</div>
<br>

<?php if($this->session->userdata('logged_in')) : ?>
<?php endif; ?>

<br><br>
<hr>
<h3>Productexemplaren</h3>
<hr>
<?php if($product_items) : ?>
<div class="jumbotron">
<div class="row">
<?php foreach($product_items as $product_item) { ?>

<div class="col-lg-4">
	<div class="bs-docs-section">

		<div class="card border-primary mb-3" style="max-width: 20rem;">  
		  <div class="card-body">
			  <h4 class="card-title"><strong><?php echo word_limiter ($product_item['title'], 5); ?></strong></h4>
			    <p class="card-text"><?php echo word_limiter($product_item['body'], 20); ?></p>
			    <p><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>

<!-- Trigger/Open The Modal -->
<button class="btn btn-success" id="myBtn<?php echo $product_item['Id']; ?>">Meer over dit product</button>

<!-- The Modal -->
<div id="myModal<?php echo $product_item['Id']; ?>" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close<?php echo $product_item['Id']; ?>">&times;</span>
    <p><?php echo $product_item['title']; ?></p>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal<?php echo $product_item['Id']; ?>');

// Get the button that opens the modal
var btn = document.getElementById("myBtn<?php echo $product_item['Id']; ?>");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close<?php echo $product_item['Id']; ?>")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>

			    </p>
		  </div>
		</div>
	</div>
</div>
<?php } ?> 
</div>
</div>
<?php else : ?>
	<p>Er zijn momenteel geen exemplaren voor dit product.</p>
<?php endif; ?>