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
      <section>
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <img id="paiementId" src="https://img.icons8.com/metro/110/000000/lock.png" alt="">
                  <h4 class="  mb-2 ">Paiement</h4>
                  <hr>
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
                  <button id="annoncePublication" type="button" class="btn btn-primary mt-5 unique mb-5">Confirmer paiement</button>
               </div>
            </div>
         </div>
         </form>
      </section>
      <!-- Footer -->
      <?php 
         include('inc/footer.php');
            ?>
   </body>
</html>