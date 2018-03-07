<?php include('header.php'); ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <div class="contact-us">
       <div class="container">
         <form method="POST" action="">
          <div class="contact-form">
           <div class="row">
               <div class="col-sm-7">
                    <form id="ajax-contact"  method="post" action="contact-form-mail.php" role="form">
                        <div class="messages" id="form-messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Nom *</label>
                                        <input id="form_name" type="text" name="nom" class="form-control" placeholder="Entrez votre nom *">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Prénom *</label>
                                        <input id="form_lastname" type="text" name="prenom" class="form-control" placeholder="Entrez votre prénom *">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Entrez votre email *">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">téléphone*</label>
                                        <input id="form_phone" type="tel" name="phone"  class="form-control" placeholder="Entrez votre téléphone*">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_phone">Adresse*</label>
                                        <input id="form_phone" type="text" name="adresse"  class="form-control" placeholder="Entrez votre adresse*">

                                    </div>
                                <div class="col-md-6">

                                </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Votre message *" rows="4"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-black" value="Envoyer" name="btn">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                   <br>
                                    <small class="text-muted"><strong>*</strong> Ces informations sont obligatoire.</small>
                                </div>
                            </div>
                        </div>

                    </form>

               </div>
               <div class="col-sm-5">
                   <div class="row col1">
                       <div class="col-xs-3">
                           <i class="fa fa-map-marker" style="font-size:16px;"></i>   Addresse
                       </div>
                       <div class="col-xs-9">
                            Roubaix 59100,<br> 4 rue d'Epinal
                       </div>
                   </div>

                    <div class="row col1">
                        <div class="col-sm-3">
                            <i class="fa fa-phone"></i>   Téléphone
                        </div>
                        <div class="col-sm-9">
                             06 35 25 37 69
                        </div>
                    </div>
                    <div class="row col1">
                        <div class="col-sm-3">
                             <i class="fa fa-fax"></i>    Fax
                        </div>
                        <div class="col-sm-9">
                              123 123 4567
                        </div>
                    </div>
                    <div class="row col1">
                        <div class="col-sm-3">
                            <i class="fa fa-envelope"></i>   Email
                        </div>
                        <div class="col-sm-9">
                             <a href="#">nfournier001@gmail.com</a> <br> <a href="#">nicolas.fournier.srp@gmail.com</a>
                        </div>
                    </div><br>
                    <iframe width="100%" height="230" frameborder="0" style="border-radius:0px;" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2527.2551860557164!2d3.165795015200858!3d50.69664887747611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c328e865e6cde1%3A0x1eaec9b8ab5c1453!2sRue+de+Blanchemaille%2C+59100+Roubaix!5e0!3m2!1sfr!2sfr!4v1520416818643" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></iframe>
               </div>
           </div>

          </div>
        </form>
       </div>
   </div>



<?php
if (isset($_POST['btn'])) {

  if( (isset($_POST['nom'])) && ($_POST['nom']!="") )
    {
      if( (isset($_POST['prenom'])) && ($_POST['prenom']!="") )
        {
          if( (isset($_POST['email'])) && ($_POST['email']!="") )
            {
              if( (isset($_POST['phone'])) && ($_POST['phone']!="") )
                {
                  if( (isset($_POST['adresse'])) && ($_POST['adresse']!="") )
                    {

                      $_nom = $_POST['nom'];
                      $_prenom = $_POST['prenom'];
                      $_email = $_POST['email'];
                      $_phone = $_POST['phone'];
                      $_adresse = $_POST['adresse'];

                      echo '<div class="alert alert-success" role="alert">';
                            echo $_nom."<br />".$_prenom."<br />".$_email;
                            echo '</div>';

               }   else {echo '<div class="alert alert-danger" role="alert">il manque votre adresse.</div>'; }
             } else {echo ('il manque votre numéro de téléphone.');}
           } else {echo ('il manque votre email.');}
         } else {echo('il manque votre prenom.');}
       } else {echo ('il manque votre nom.');}
     }
?>

<?php include('footer.php'); ?>
