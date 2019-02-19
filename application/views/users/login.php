<div class="container">
	<h3><?= $title ?></h3>
	<hr>

	<div class="row">
		<div class="col-sm-4"></div>

		<div class="col-sm-4">
			<?php echo form_open('users/loginuser'); ?>
				  <div class="form-group">
					    <label>Email:</label>
					    <input type="text" class="form-control" name="email" placeholder="Email">
				  </div>
				  <div class="form-group">
					    <label>Password:</label>
					    <input type="password" class="form-control" name="password" placeholder="Password">
				  </div> 
				  <button type="submit" class="btn btn-primary btn-block">Login</button>
				  <br>
				  <p>You have no account? Please :<a href="<?php echo base_url('users/signup'); ?>"> SignUp</a></p>
			<?php echo form_close(); ?>
			<br><br>
    			<!-- Flash Messages -->
			<?php if($this->session->flashdata('login_failed')): ?>
			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>' ?>
			<?php endif; ?>

			<?php if($this->session->flashdata('user_logged_out')): ?>
			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('user_logged_out').'</p>' ?>
			<?php endif; ?>
				
		</div>
		<div class="col-sm-4" style="margin-top: 30px;"><?php echo validation_errors(); ?></div>
	</div>
</div>