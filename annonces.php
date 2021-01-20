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
      <section id="section-title1">
         <div class="container">
            <div class="row">
               <div class="col-12">
               </div>
            </div>
         </div>
      </section>
      <section id="section-title2">
         <div class="container-fluid fluid-section ">
            <div class="row  ">
               <!--SEARCH-BAR -->
               <div class="col-lg-1 col-sm-2">
                  <i class="fas fa-map-marker-alt"></i>
               </div>
               <div class="col-lg-2 col-sm-5">
                  <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Localisation"></i>
               </div>
               <div class='col-lg-2 col-sm-5'>
                  <div class="form-group">
                     <div class='input-group date'>
                        <input type='text' id="datepicker" class="form-control" />
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                     </div>
                  </div>
               </div>
               <div class='col-lg-2 col-sm-6'>
                  <div class="form-group">
                     <div class='input-group date'>
                        <input type='text' id="datepicker1" class="form-control" />
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <select class="form-control" name="nombrevacanciers" id="nombreVacanciersAnnonces">
                     <option value="0">Nombre de vacancier</option>
                     <option value="1">1 vacanciers</option>
                     <option value="2">2 vacanciers</option>
                     <option value="3">3 vacanciers</option>
                     <option value="4">4 vacanciers</option>
                     <option value="5">5 vacanciers</option>
                     <option value="6">6 vacanciers</option>
                     <option value="7">7 vacanciers</option>
                     <option value="8">8 vacanciers</option>
                     <option value="9">9 vacanciers</option>
                     <option value="10">10 vacanciers</option>
                  </select>
               </div>
               <div class="col-1">
                  <a href="annonces.php" class="btn btn-secondary btn-rounded positionRechercheAnnonces"><i class="fas fa-search"></i></a>
               </div>
            </div>
         </div>
      </section>
      <section id="section-title">
         <div class="container">
            <div class="row">
               <div class="col-md-8 col-xs-12 mx-auto ">
                  <h2>Réservations : Hôtels - Appartements - Auberges</h2>
               </div>
               <div class="col-md-4 col-xs-12 mx-auto">
                  <a class="btn btn-primary btn-lg btnCreation" href="creationAnnonce.php" role="button">Creer votre annonce</a>
               </div>
            </div>
         </div>
      </section>
      <section class="section-annonce">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-xs-12 mx-auto imagefocus">
                  <img id="image1" src="dist/assets/img/elAppartement.jpg" alt="" height="220" width="275"></br>
                  <span class="tag">Du 25/01/2019 au 01/02/2019</span>
               </div>
               <div class="col-md-8 col-xs-12 mx-auto rapprochement">
                  <h4>Description</h4>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia sint earum
                     molestias saepe cumque facere blanditiis nobis numquam totam itaque
                     alias voluptatum eius dolore, labore 
                  </p>
                  <div class="iconeElement"><img class="iconeEuro" src="https://img.icons8.com/ios/50/000000/price-tag-euro.png">
                     <a href="plusInfos.php"><img class="information1" src="https://img.icons8.com/metro/52/000000/about.png"></a>
                  </div>
                  <p class="thePrice">190€/semaine <a id="plusInfos" href="plusInfos.php">+ d'information</a>
                     <a class="btn btn-primary btn-lg btnReservation" href="plusInfos.php" role="button">Réserver</a>
               </div>
            </div>
         </div>
      </section>
      <hr>
      <section class="section-annonce">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-xs-12 mx-auto imagefocus">
                  <img id="image1" src="dist/assets/img/elAppartement.jpg" alt="" height="220" width="275"></br>
                  <span class="tag">Du 25/01/2019 au 01/02/2019</span>
               </div>
               <div class="col-md-8 col-xs-12 mx-auto rapprochement">
                  <h4>Description</h4>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia sint earum
                     molestias saepe cumque facere blanditiis nobis numquam totam itaque
                     alias voluptatum eius dolore, labore 
                  </p>
                  <div class="iconeElement"><img class="iconeEuro" src="https://img.icons8.com/ios/50/000000/price-tag-euro.png">
                     <a href="plusInfos.php"><img class="information1" src="https://img.icons8.com/metro/52/000000/about.png"></a>
                  </div>
                  <p class="thePrice">190€/semaine <a id="plusInfos" href="plusInfos.php">+ d'information</a>
                     <a class="btn btn-primary btn-lg btnReservation" href="plusInfos.php" role="button">Réserver</a>
               </div>
            </div>
         </div>
      </section>
      <hr>
      <section class="section-annonce">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-xs-12 mx-auto">
                  <img id="image1" src="dist/assets/img/elAppartement.jpg" alt="" height="220" width="275"></br>
                  <span class="tag">Du 25/01/2019 au 01/02/2019</span>
               </div>
               <div class="col-md-8 col-xs-12 mx-auto rapprochement">
                  <h4>Description</h4>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia sint earum
                     molestias saepe cumque facere blanditiis nobis numquam totam itaque
                     alias voluptatum eius dolore, labore 
                  </p>
                  <div class="iconeElement"><img class="iconeEuro" src="https://img.icons8.com/ios/50/000000/price-tag-euro.png">
                     <a href="plusInfos.php"><img class="information1" src="https://img.icons8.com/metro/52/000000/about.png"></a>
                  </div>
                  <p class="thePrice">190€/semaine <a id="plusInfos" href="plusInfos.php">+ d'information</a>
                     <a class="btn btn-primary btn-lg btnReservation" href="plusInfos.php" role="button">Réserver</a>
               </div>
            </div>
         </div>
      </section>
      <hr>
      <section class="section-annonce">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-xs-12 mx-auto">
                  <img id="image1" src="dist/assets/img/elAppartement.jpg" alt="" height="220" width="275"></br>
                  <span class="tag">Du 25/01/2019 au 01/02/2019</span>
               </div>
               <div class="col-md-8 col-xs-12 mx-auto rapprochement">
                  <h4>Description</h4>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia sint earum
                     molestias saepe cumque facere blanditiis nobis numquam totam itaque
                     alias voluptatum eius dolore, labore 
                  </p>
                  <div class="iconeElement"><img class="iconeEuro" src="https://img.icons8.com/ios/50/000000/price-tag-euro.png">
                     <a href="plusInfos.php"><img class="information1" src="https://img.icons8.com/metro/52/000000/about.png"></a>
                  </div>
                  <p class="thePrice">190€/semaine <a id="plusInfos" href="plusInfos.php">+ d'information</a>
                     <a class="btn btn-primary btn-lg btnReservation" href="plusInfos.php" role="button">Réserver</a>
                  <nav id="paginationElement" aria-label="Page navigation example ">
                     <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                           <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                           <a class="page-link" href="#">Next</a>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </section>
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
