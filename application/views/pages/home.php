<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" id="myslide">
      <div class="item active">
        <img src="<?php echo base_url('assets/images/background.jpeg'); ?>" alt="New York" width="1200" height="400">
        <div class="carousel-caption">
          <h1>Welcome to Tailoring.com</h1>
          <p>We provide plenty of designs to fit users need. We are eager and well confident to serve you here. By booking our service we guaranty you, you'll get ammazed. </p>
        </div>    

      </div>
      	<div class="item">
        <img src="<?php echo base_url('assets/images/background2.jpeg'); ?>" alt="Chicago" width="1200" height="400">
        <div class="carousel-caption">
          <h1>For Men & Women</h1>
          <p>Men & Women, they always want to be spacial, more likely in parties or in celebration. We have excellent and experienced designer tailor admin, who are extreme in their field to provide hands on service to you.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="<?php echo base_url('assets/images/background3.jpeg'); ?>" alt="Los Angeles" width="1200" height="400">
        <div class="carousel-caption">
          <h1>For Baby & Kids</h1>
          <p>We all care aour kids. If they will be happy, we all will get even more happier then them. We are here to give you excellent service so your kids will definitely get these sweetness.</p>
        </div>      
      </div>
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3><strong>SERVICES</strong></h3>
 
  <p>We have created this serice platform to provide you a better value in your life, by just tailoring your dressup. Everybody want to fee spacial, and this must be in people's life. And we are just came here to care you in this way. We just want, you relax and do your day to day work, we will make you feel special at every moment. You don't have to worry about that. </p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <h3 class="text-center">Men</h3><hr>
      <a href="<?php echo base_url('/men'); ?>">
        <img src="./assets/images/man.jpg" class="person" alt="Random Name" width="255" height="255">
      </a>
    </div>
    <div class="col-sm-4">
      <h3 class="text-center">Women</h3><hr>
      <a href="<?php echo base_url('/women'); ?>">
        <img src="./assets/images/women.jpg" class="person" alt="Random Name" width="255" height="255">
      </a>
    </div>
    <div class="col-sm-4">
      <h3 class="text-center">Kids</h3><hr>
      <a href="<?php echo base_url('/kids'); ?>">
        <img src="./assets/images/kids.jpg" class="person" alt="Random Name" width="255" height="255">
      </a>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">How Deos It Works?</h3>
    <p class="text-center">Choose your services by clicking on Men, Women or Kids image, and feel free to fill your contact details. On the spot famous tailor designer will visit your home.</p>
 		<br>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
        
          <p><strong>Select Service</strong></p>
          <p>Share your service requirement with us.</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Explore</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          
          <p><strong>Book Service</strong></p>
          <p>Schedule a time for service delivery.</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Explore</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          
          <p><strong>Relex at home</strong></p>
          <p>Professional will fulfill service while you relax.</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Explore</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Services</h4>
        </div>
        <div class="modal-body">

          <img src="<?php echo base_url('assets/images/BoysSchoolShirtin.jpg'); ?>" width="180">
          <img src="<?php echo base_url('assets/images/W_Sadie_Skinny.jpg'); ?>" width="180">
          <img src="<?php echo base_url('assets/images/SIGNATURE_BLACK_MAIN.jpg'); ?>" width="180">

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
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center">Feel free to contact us, we are here ready to reply you!</p>

  <div class="row">
    <div class="col-md-4">
      <p>Office Address:</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Patliputra Patna-06, India</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +91 9115151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: inquiry@tailor.com</p>
    </div>
    <div class="col-md-8">
      <?php echo form_open('contactus/contact'); ?>
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="message" placeholder="Message" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
  <br>

  </div>
</div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>@Copyright: 2019 All right reserved</p>
  <p>Created by: <em>Naresh Sahu</em></p> 
</footer>
<!-- Apply javascript -->
<script type="text/javascript" src="<?php echo base_url().'assets/js/myscript.js'; ?>" ></script>