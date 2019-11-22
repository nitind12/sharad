  <!-- Start Slider Area -->
  <?php
    $quots = array(
      'The Best in the Region'   => 'NABL ACCREDITED LABORATORY',
      'Testing Solutions'  => 'With Cutting Edge Technology And Observations',
      'GET AHEAD'  => 'With our testing capabilities &amp; speed of execution',
      'We are fully committed'  => 'to play our role of Quality Control and quality assessment'
    )
  ?>
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides" style="height: 600px;">
        <img src="<?php echo base_url('assets/img/slider/slider1.jpg'); ?>" alt="" title="#slider-direction-1"/>
        <img src="<?php echo base_url('assets/img/slider/slider2.jpg'); ?>" alt="" title="#slider-direction-2" />
        <img src="<?php echo base_url('assets/img/slider/slider3.jpg'); ?>" alt="" title="#slider-direction-3" />
      </div>
      <?php 
        $i = 1;
        $nums = array('one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten');
      ?>
      <?php foreach($quots as $label=>$content){?>
      <!-- direction 1 -->
      <div id="slider-direction-<?php echo $i;?>" class="slider-direction slider-<?php echo $nums[$i-1];?>">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1"><?php echo $label;?></h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2"><?php echo $content;?></h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php $i++; ?>
    <?php } ?>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>About Us</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="<?php echo base_url('assets/img/about/1.jpg');?>" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">NABL Accredited Lab</h4>
              </a>
              <p>
                All Type of Soil, Building & Highway Construction Material Testing & Consultancy Services. We test for mostly all building material.
              </p>
              <ul>
                <li>
                  <i class="fa fa-check"></i> Cement
                </li>
                <li>
                  <i class="fa fa-check"></i> Concret
                </li>
                <li>
                  <i class="fa fa-check"></i> Bricks
                </li>
                <li>
                  <i class="fa fa-check"></i> Timber
                </li>
                <li>
                  <i class="fa fa-check"></i> Bitumen, Aggregate, Soil &amp;
                </li>
                <li>
                  <i class="fa fa-check"></i> Non-destructive Testing
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- our-Accreditation start -->
  <div id="accreditation" class="our-skill-area fix hidden-sm">
    <div class="test-overly"></div>
    <div class="skill-bg area-padding-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2 style="color: #f0f0f0!important">Accreditation</h2>
            </div>
          </div>
        </div>
        <!-- section-heading end -->
        <div class="row">
          <div class="skill-text">
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-4 col-md-4 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <div class="PDF" style="text-align: center;">
                    <a href="<?php echo base_url('assets/dwnlds/Certificate.jpg');?>" target="_blank">
                      <img src="<?php echo base_url('assets/img/cert.jpg');?>" border="0">
                    </a>
                  </div>
                  <h4 class="progress-h4">Certificate of Accredititation</h4>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-4 col-md-4 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <div class="PDF">
                    <a href="<?php echo base_url('assets/dwnlds/nabl.pdf');?>" target="_blank">
                      <img src="<?php echo base_url('assets/img/nabl.jpg');?>" border="0">
                    </a>
                  </div>
                  <a href="">
                  <h3 class="progress-h4">NABL Accredited</h3>
                  </a>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-4 col-md-4 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <div class="PDF">
                    <a href="<?php echo base_url('assets/dwnlds/memo.pdf');?>" target="_blank">
                      <img src="<?php echo base_url('assets/img/memo.jpg');?>" border="0">
                    </a>
                  </div>
                  <h3 class="progress-h4">Memorandum</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- our-Accreditation end -->


  <!-- Start Wellcome Area -->
  <div class="wellcome-area">
    <div class="well-bg">
      <div class="test-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="wellcome-text">
              <div class="well-text text-center">
                <h2>Welcome To ShriDwarkadhish Testing Labs</h2>
                <p>
                  Please subscribe your email-id. We will get back to you soon
                </p>
                <div class="subs-feilds">
                  <div class="suscribe-input">
                    <input type="email" class="email form-control width-80" id="sus_email" placeholder="Email">
                    <button type="submit" id="sus_submit" class="add-btn width-20">Get A quate</button>
                    <div id="msg_Submit" class="h3 text-center hidden"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Wellcome Area -->

  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Call: +91 935 918 4888<br>
                  <span>Monday-Friday (9am-5pm)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: shree.dwarkadhish.labs@gmail.com<br>
                  <span>Web: www.sdtlrc.com</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Location: Chardham Mandir, Fatehpur, <br>
                  <span>Kaladungi Road, Haldwani</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d354.066515300377!2d79.46184747527342!3d29.264253298536694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x98c430a0d366a2e7!2sCharDham%20Mandir!5e1!3m2!1sen!2sin!4v1574185679896!5m2!1sen!2sin" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->
