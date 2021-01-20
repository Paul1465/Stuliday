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
      <div class="container controlCont mt-1 ">
         <div class="row mt-5">
            <div class="col-12">
               <h3>Connection</h3>
               <hr>
            </div>
            <div class="col-md-4 mx-auto">
               <a class="btn btn-block btn-social btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-facebook']);">
               <i class="fab fa-facebook-f premierChoix"> </i> Connectez-vous <span id="responsiveElement">avec Facebook</span>
               </a>
            </div>
            <div class="col-md-4 mx-auto">
               <a class="btn btn-block btn-social btn-google" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-google']);">
               <i class="fab fa-google-plus-g deuxiemeChoix"> </i> Connectez-vous <span id="responsiveElement"> avec Gmail</span>
               </a>
            </div>
         </div>
      </div>
      <div class="container controlCont mt-5 ">
         <div class="row">
            <div class="col-9">
               <form id="leFormulaire">
                  <div class="form-group">
                     <label for="exampleInputEmail1">Email</label>
                     <input type="email" class="form-control unique" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre email">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputPassword1">Mot de passe</label>
                     <input type="password" class="form-control unique" id="exampleInputPassword1" placeholder="Entrez votre mot de passe">
                     <p class="text-right mb-2">Pas de compte ? </p>
                     <p class="text-right"> <a href="enregistrement.php">S'enregistrer</p>
                     </a>
                  </div>
                  <div class="form-group form-check">
                     <input type="checkbox" class="form-check-input" id="exampleCheck1">
                     <label class="form-check-label mb-2" for="exampleCheck1">Se rappeler de moi</label>
                     <div> <a href="#">   mot de passe oublier ?</a></div>
                  </div>
               </form>
               <button  onclick="snackFunction()" class="btn btn-primary btn-lg mb-5" > Connexion</button>
               <div id="snackbar">Vous êtes connecter et rediriger vers la page des annonces</div>
            </div>
         </div>
      </div>
      <!-- Footer -->
      <?php 
         include('inc/footer.php');
            ?>
      <!-- POPPER -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
         crossorigin="anonymous"></script>
      <script src="src/assets/js/script.js"></script> 
   </body>
</html>