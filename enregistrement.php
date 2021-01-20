<!DOCTYPE html>
<html lang="en">
   <head>
      <?php 
         include('inc/head.php');
            ?>
   </head>
   <body>
      <header>
         <?php 
            include('inc/navBar.php');
               ?>
      </header>
      <div class="container controlCont enregistrement ">
         <div class="row">
            <div class="col-12">
               <h3>Enregistrement</h3>
               <hr>
            </div>
            <div class="col-md-4 mx-auto">
               <a class="btn btn-block btn-social btn-facebook enregistrement " onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-facebook']);">
               <i class="fab fa-facebook-f premierChoix"> </i> Enregistrez-vous <span id="responsiveElement">avec Facebook</span>
               </a>
            </div>
            <div class="col-md-4 mx-auto">
               <a class="btn btn-block btn-social btn-google enregistrement1" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-google']);">
               <i class="fab fa-google-plus-g deuxiemeChoix"> </i> Enregistrez-vous <span id="responsiveElement"> avec Gmail</span>
               </a>
            </div>
         </div>
      </div>
      <form class="needs-validation" novalidate>
         <div class="container">
            <div class="form-row">
               <div class="col-md-4 mb-3">
                  <label for="validationTooltip01">Nom</label>
                  <input type="text" class="form-control" id="validationTooltip01" placeholder="" value="" required>
                  <div class="valid-tooltip">
                     Looks good!
                  </div>
               </div>
               <div class="col-md-4 mb-3">
                  <label for="validationTooltip02">Prenom</label>
                  <input type="text" class="form-control" id="validationTooltip02" placeholder="" value="" required>
                  <div class="valid-tooltip">
                     Looks good!
                  </div>
               </div>
               <div class="col-md-4 ">
                  <label for="validationTooltipUsername">E-mail</label>
                  <div class="input-group">
                     <div class="input-group-prepend mt-1">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                     </div>
                     <input type="text" class="form-control" id="validationTooltipUsername" placeholder="" aria-describedby="validationTooltipUsernamePrepend"
                        required>
                     <div class="invalid-tooltip">
                        Please choose a unique and valid username.
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="form-row">
               <div class="col-sm-3">
                  <label for="validationTooltip03">Ville</label>
                  <input type="text" class="form-control" id="validationTooltip03" placeholder="" required>
                  <div class="invalid-tooltip">
                     Please provide a valid city.
                  </div>
               </div>
               <div class="col-sm-3 ">
                  <label for="validationTooltip04">Pays</label>
                  <input type="text" class="form-control" id="validationTooltip04" placeholder="" required>
                  <div class="invalid-tooltip">
                     Please provide a valid state.
                  </div>
               </div>
               <div class="col-sm-3">
                  <label for="validationTooltip05">Code postale</label>
                  <input type="text" class="form-control" id="validationTooltip05" placeholder="" required>
                  <div class="invalid-tooltip">
                     Please provide a valid zip.
                  </div>
               </div>
            </div>
         </div>
         <div class="form-group form-check positionRight1 mt-3">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Accepter nos conditions général d'utilisation</label>
         </div>
         <div class="form-group form-check positionRight1">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Recevoir nos offres newsletter</label>
         </div>
      </form>
      <button  onclick="snackFunction()" class="btn btn-primary btn-lg mb-5 positionRight1" > Enregistrez-vous</button>
      <div id="snackbar" class="positionRight1">Bravo vous êtes enregistré et redirigé vers la page des annonces</div>
      </div>
      <body>
         <!-- Footer -->
         <!-- POPPER -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
         <script src="src/assets/js/script.js"></script> 
   </body>
</html>