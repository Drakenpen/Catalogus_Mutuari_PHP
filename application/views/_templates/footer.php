<style>
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
}
</style>

<?php if($this->session->userdata('logged_in')) : ?>
			<div class="footer">
			  	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				  <a class="navbar-brand" href="">Editor</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarColor01">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item">
				        <a class="nav-link" href="<?php echo base_url(); ?>products/create">Product aanmaken</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="<?php echo base_url(); ?>categories/create">Categorie aanmaken</a>
				      </li>
				    </ul>
				    <ul class="nav navbar-nav navbar-right">
				      <li class="nav-item">
				        <a class="nav-link" href="">Settings</a>
				      </li>
				    </ul>
				  </div>
				</nav>
			</div>
		</div>
	</body>
</html>
<?php endif; ?>