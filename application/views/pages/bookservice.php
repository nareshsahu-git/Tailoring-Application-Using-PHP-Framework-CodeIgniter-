<div class="container">

	
	<h3>Booking</h3>
	<hr>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			
			<?php echo form_open('booking/registerserv'); ?>
			  <div class="form-group">
			    <label>Name:</label>
			    <input type="text" class="form-control" name="name" placeholder="Full Name" required>
			  </div>
			  <div class="form-group">
			    <label>Address:</label>
			    <input type="text" class="form-control" name="address" placeholder="Address" required>
			  </div>
			  <div class="form-group">
			    <label>Phone:</label>
			    <input type="number" class="form-control" name="phone" placeholder="Phone" required>
			  </div>
			  <div class="form-group">
			    <label>Landmark:</label>
			    <input type="text" class="form-control" name="landmark" placeholder="Landmark" required>
			  </div>
			  <div class="form-group">
			    <label>City:</label>
			    <input type="text" class="form-control" name="city" placeholder="City" required>
			  </div>
			  <div class="form-group">
			    <label>Pincode:</label>
			    <input type="number" class="form-control" name="pincode" placeholder="Pincode" required>
			  </div>
			  
			  <button type="submit" class="btn btn-primary">Submit</button>
			<?php echo form_close(); ?>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>

