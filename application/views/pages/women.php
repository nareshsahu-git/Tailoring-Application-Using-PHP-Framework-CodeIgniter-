<div class="container">
	 <h3><?php echo $title; ?></h3>
	 <hr>
	 <div class="row">
	 	<div class="col-sm-4" id="row-img">
	 		<img src="<?php echo base_url('assets/images/girls-kurta.jpg'); ?>" width="250" 
	 		data-toggle="modal" data-target="#shirtsModal">
	 	</div>
	 	<div class="col-sm-4" id="row-img">
	 		<img src="<?php echo base_url('assets/images/W_Sadie_Skinny.jpg'); ?>" width="250" data-toggle="modal" data-target="#pantsModal">
	 	</div>
	 	<div class="col-sm-4" id="row-img">
	 		<img src="<?php echo base_url('assets/images/women-blazers.jpg'); ?>" width="200" data-toggle="modal" data-target="#blagerModal">
	 	</div>
	 </div>


<!-- Modal For shirts -->
  <div class="modal fade" id="shirtsModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-tags"></span> Details</h4>
        </div>
        <div class="modal-body">
          <img src="<?php echo base_url('assets/images/girls-kurta.jpg'); ?>" width="100">
          <img src="<?php echo base_url('assets/images/Salwar-Studio.jpg'); ?>" width="100">
          <form role="form">
          	<label>Shirts/ Suits</label><br>
          	<span>The full buttoned placket offers an easy closure. You can quickly button down the shirt and open it without going through a hassle. The buttons are stitched firmly to the fabric so that they do not fall off easily.<br><br>
            This trendy shirt features a spread collar which exudes a modern look. It rises above the neckline and offers you comfort. The sharp collar adds to the look of the shirt.</span>
            <br><br>
            <a class="btn btn-block glyphicon glyphicon-ok" href="<?php echo base_url('/bookservice'); ?>">Book</a>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <p>Need <a href="<?php echo base_url('#contact'); ?>">help?</a></p></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal For Pants -->
  <div class="modal fade" id="pantsModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-tags"></span> Details</h4>
        </div>
        <div class="modal-body">
          <img src="<?php echo base_url('assets/images/W_Sadie_Skinny.jpg'); ?>" width="100">
          <img src="<?php echo base_url('assets/images/women-pants.jpg'); ?>" width="100">
          <form role="form">
          	<label>Pants</label><br>
          	<span>The full buttoned placket offers an easy closure. You can quickly button down the shirt and open it without going through a hassle. The buttons are stitched firmly to the fabric so that they do not fall off easily.<br><br>
            This trendy shirt features a spread collar which exudes a modern look. It rises above the neckline and offers you comfort. The sharp collar adds to the look of the shirt.</span>
            <br><br>
              <a class="btn btn-block glyphicon glyphicon-ok" href="<?php echo base_url('/bookservice'); ?>">Book</a>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <p>Need <a href="<?php echo base_url('#contact'); ?>">help?</a></p></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal For Blager -->
  <div class="modal fade" id="blagerModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-tags"></span> Details</h4>
        </div>
        <div class="modal-body">
          <img src="<?php echo base_url('assets/images/women-blazers.jpg'); ?>" width="100">
          <img src="<?php echo base_url('assets/images/Cutecumber-Girls-Partywear.jpeg'); ?>" width="100">
          <form role="form">
          	<label>Blazers</label><br>
          	<span>The full buttoned placket offers an easy closure. You can quickly button down the shirt and open it without going through a hassle. The buttons are stitched firmly to the fabric so that they do not fall off easily.<br><br>
            This trendy shirt features a spread collar which exudes a modern look. It rises above the neckline and offers you comfort. The sharp collar adds to the look of the shirt.</span>
            <br><br>
              <a class="btn btn-block glyphicon glyphicon-ok" href="<?php echo base_url('/bookservice'); ?>">Book</a>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <p>Need <a href="<?php echo base_url('#contact'); ?>">help?</a></p></p>
        </div>
      </div>
    </div>
  </div><hr>
</div>