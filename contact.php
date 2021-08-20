<?php

include('header.php');

?>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact he" style="background-color:#EFF2F8;">
      <div class="container">

        <div class="section-title">
          <br><br>
          <p>Vous avez une question ou êtes une entreprise et vous souhaitez travailler avec Appland ? 
            <br> Remplissez ce formulaire et notre équipe vous contactera pour en discuter plus en détail. </p>
        </div>

        <div class="row">

          <div class="col-lg-6">
           <img src="assets/img/appel.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6">
            <form action="message.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="form-group">
                <input placeholder="Nom et prénom" type="text" name="name" class="form-control" id="name"
                  data-rule="minlen:4" data-msg="Nom invalid" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input placeholder="Numéro de téléphone (0x-xx-xx-xx)" type="tel" class="form-control" name="Numéro" id="Numéro" data-rule="minlen:10"
                  data-msg="Numero invalid" data-rule="0[67][0-9]{8}"/>
                  <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea placeholder="Message" class="form-control" name="message" rows="6" data-rule="required"
                  data-msg="Message invalid"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Message bien envoyé.Merci!</div>
              </div>
              <div class="text-center"><button type="submit">Enregistrer</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
      
<?php

include('footer.php');

?>