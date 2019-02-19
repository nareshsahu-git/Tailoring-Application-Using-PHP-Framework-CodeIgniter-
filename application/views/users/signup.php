<div class="container">
	<h3><?= $title ?></h3>
	<hr>

	<div class="row">
		<div class="col-sm-4"></div>

		<div class="col-sm-4">
			<?php echo form_open('users/registeruser'); ?>
			  <div class="form-group">
				    <label>First Name:</label>
				    <input type="text" class="form-control" name="firstname" placeholder="First Name">
			  </div>
			  <div class="form-group">
				    <label>Last Name:</label>
				    <input type="text" class="form-control" name="lastname" placeholder="Last Name">
			  </div>
			  <div class="form-group">
				    <label>Email:</label>
				    <input type="text" class="form-control" name="email" placeholder="Email">
			  </div>
			  <div class="form-group">
				    <label>Password:</label>
				    <input type="password" class="form-control" name="password" placeholder="Password">
			  </div>
			  <div class="form-group">
				    <label>Confirm Password:</label>
				    <input type="password" class="form-control" name="password2" placeholder="Cinfirm Password">
			  </div>
			  <button type="submit" class="btn btn-primary btn-block">Submit</button>
			<?php echo form_close(); ?>
			
		</div>
		<div class="col-sm-4" style="margin-top: 30px;"><?php echo validation_errors(); ?></div>
	</div>
</div>