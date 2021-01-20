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
            include('inc/navBarConnecter.php');
               ?>
      </header>
      <section id="imageEcritureAnnonces">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <img src="dist/assets/img/ecriture.jpg" alt="" id="ecritureImage">
               </div>
            </div>
         </div>
      </section>
      <div class="container reglage1">
         <div class="row">
            <form class="col-md-12 col-xs-12 mx-auto">
               <legend>Déposez une annonce</legend>
               <div class="form-group espacement-form">
                  <label for="texte">Titre </label>
                  <input id="text" type="text" class="form-control">
               </div>
               <div class="form-group descTop ">
                  <label class="mt-1" for="textarea">Description </label>
                  <textarea id="textarea" type="textarea" class="form-control"></textarea>
               </div>
               <div class="aeration"><label for="avatar">Choissisez vos photos </label>
                  <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
               </div>
         </div>
         <div class="row">
         <div class="col-md-5 mb-3">
         <label for="country">Country</label>
         <select class="custom-select d-block w-100" id="country" required="">
         <option value="">Choose...</option>
         <option>United States</option>
         </select>
         <div class="invalid-feedback">
         Please select a valid country.
         </div>
         </div>
         <div class="col-md-4 mb-3">
         <label for="state">State</label>
         <select class="custom-select d-block w-100" id="state" required="">
         <option value="">Choose...</option>
         <option>California</option>
         </select>
         <div class="invalid-feedback">
         Please provide a valid state.
         </div>
         </div>
         <div class="col-md-3 mb-5">
         <label for="zip">Zip</label>
         <input type="text" class="form-control zipPosition" id="zip" placeholder="" required="">
         <div class="invalid-feedback">
         Zip code required.
         </div>
         </div>
         </div>
         <div class="form-group row">
         <label for="example-number-input" class="col-2 col-form-label">Prix/journée</label>
         <div class="col-12">
         <input class="form-control" type="number" value="" id="example-number-input">
         </div>
         </div>
         <div class="form-group espacement-form">
         <label for="select">Selection : </label>
         <select id="select" class="form-control">
         <option>Option 1</option>
         <option>Option 2</option>
         <option>Option 3</option>
         </select>
         <div class="form-group row mt-4">
         <label for="example-datetime-local-input" class="col-2 col-form-label">Date/Heure/Arrivé</label>
         <div class="col-12">
         <input class="form-control" type="datetime-local" value="2019-01-19T10:45:00" id="example-datetime-local-input">
         </div>
         </div>
         <div class="form-group row">
         <label for="example-datetime-local-input" class="col-2 col-form-label">Date/Heure/Départ</label>
         <div class="col-12">
         <input class="form-control" type="datetime-local" value="2019-02-01T10:45:00" id="example-datetime-local-input">
         </div>
         <div class="form-group col-12 row mt-2 ml-2 mb-5 ">
         <label for="example-datetime-local-input" class="col-12 mb-2 col-form-label colorsThemes">Couleurs Thèmes</label>
         <input class="form-control" type="color" value="#563d7c" id="example-color-input">
         </div>
         </div>
         </div>
         <hr class="">
         <h4 class="  mb-2 ">Paiement</h4>
         <div class="d-block my-3">
         <div class="custom-control custom-radio">
         <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
         <label class="custom-control-label" for="credit">Mastercard</label>
         </div>
         <div class="custom-control custom-radio">
         <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
         <label class="custom-control-label" for="debit">Visa</label>
         </div>
         <div class="custom-control custom-radio">
         <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
         <label class="custom-control-label" for="paypal">Paypal</label>
         </div>
         </div>
         <div class="row">
         <div class="col-md-6 mb-3">
         <label for="cc-name">Nom de la carte</label>
         <input type="text" class="form-control" id="cc-name" placeholder="" required="">
         <small class="text-muted">Nom de carte en entier</small>
         <div class="invalid-feedback">
         Name on card is required
         </div>
         </div>
         <div class="col-md-6 mb-3">
         <label for="cc-number">Numero de la carte </label>
         <input type="text" class="form-control" id="cc-number" placeholder="" required="">
         <div class="invalid-feedback">
         Credit card number is required
         </div>
         </div>
         </div>
         <div class="row">
         <div class="col-md-3 mb-3">
         <label for="cc-expiration">Expiration</label>
         <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
         <div class="invalid-feedback">
         Date d'expiration requise
         </div>
         </div>
         <div class="col-md-3 mb-3">
         <label for="cc-expiration">CVV</label>
         <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
         <div class="invalid-feedback">
         Code de sécurité requis
         </div>
         </div>
         </div>
         <div class="form-check">
         <input type="checkbox" class="form-check-input" id="exampleCheck1">
         <label class="form-check-label" for="exampleCheck1">Check me out</label>
         </div>
         <div class="form-check">
         <input type="checkbox" class="form-check-input" id="exampleCheck1">
         <label class="form-check-label" for="exampleCheck1">Check me out</label>
         </div>
         <button id="annoncePublication" type="button" class="btn btn-primary mt-5 unique">Publier votre annonce</button>
      </div>
      </div>
      </form>
      <!-- Footer -->
      <?php 
         include('inc/footer.php');
            ?>
      <!-- Footer -->
      <!-- POPPER -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
         crossorigin="anonymous"></script>
   </body>
</html>