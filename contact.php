<?php

include('header.php');

?>
<nav class="nav-menu d-none d-lg-block">
        <ul>
          
          <li><a href="how-it-works.php">Fonctionnement</a></li>
          <li><a href="faq.php">F.A.Q</a></li>
          <li class="active"><a href="contact.php">Contact Us</a></li>

          <li class="get-started"><a href="#features">Get Started</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="background-color:#EFF2F8;">
      <div class="container">

        <div class="section-title">
          <br><br>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="row" >
              <div class="col-lg-6 info" data-aos="fade-up" style="background-color:#efc4d2;">
                <i class="bx bx-map"></i>
                <h4>Address</h4>
                <p>A108 Adam Street,<br>New York, NY 535022</p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="100" style="background-color:#efc4d2;">
                <i class="bx bx-phone"></i>
                <h4>Call Us</h4>
                <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
              </div>
              <div class="col-lg-12 info" data-aos="fade-up" data-aos-delay="200" style="background-color:#efc4d2;">
                <i class="bx bx-envelope"></i>
                <h4>Email Us</h4>
                <p>contact@example.com<br>info@example.com</p>
              </div>
              
            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="form-group">
                <input placeholder="Your Name" type="text" name="name" class="form-control" id="name"
                  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input placeholder="Your Email" type="email" class="form-control" name="email" id="email"
                  data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject"
                  data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea placeholder="Message" class="form-control" name="message" rows="5" data-rule="required"
                  data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
      
<?php

include('footer.php');

?>