<div class="container">
	<h1>Congrats!</h1>

    	<!-- Flash Messages -->
		<?php if($this->session->flashdata('user_loggedin')): ?>
		    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>' ?>
		<?php endif; ?>

		<p> Just explore our services & get benefit every time.</p>
	
</div>
