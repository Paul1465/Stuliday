

<!DOCTYPE html>
<html lang="en">
   <head>
<?php 
include('inc/head.php');
   ?>
  



   </head>
   <body >
      <?php 
include('inc/navBar.php');
   ?>
      </header>
      <!--JUMBOTRON -->
      <div class="jumbotron">
         <div class="elementConnection">
            <h1 class="display-4">Location d'appartement au ski !</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention.
            </p>
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <li id="leLi"> <a class="btn btn-primary btn-lg whiteSpace" href="connection.php" role="button">Connectez-vous</a>
               <a class="btn btn-primary btn-lg whiteSpace" href="enregistrement.php" role="button">S'enregistrer</a>
            </li>
         </div>
      </div>
      <!--SEARCH-BAR -->
      <section id="section-title2">
         <div class="container-fluid fluid-section2 ">
            <div class="row focus-search">
               <div class="col-lg-1 col-sm-2">
                  <i class="fas fa-map-marker-alt"></i>
               </div>
               <div class="col-lg-2 col-sm-5">
                  <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Localisation"></i>
               </div>
               <div class='col-lg-2 col-sm-5'>
                  <div class="form-group mr-1">
                     <div class='input-group date' id='datetimepicker'>
                        <input id="datepicker" type='text'  class="form-control" placeholder="Arrivé"/>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                     </div>
                  </div>
               </div>
               <div class='col-lg-2 col-sm-6'>
                  <div class="form-group">
                     <div class='input-group date' id='datetimepicker'>
                        <input id="datepicker1" type='text' class="form-control" placeholder="Départ"/>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <select class="form-control" name="nombrevacanciers" id="nombreVacanciersIndex">
                     <option value="0">Nombre de vacancier</option>
                     <option value="1">1 vacancier</option>
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
               <button type="button" class="btn btn-secondary positionRechercheIndex" data-container="body"
                  data-toggle="popover" data-placement="bottom"
                  data-content="Veuillez vous connecter afin de profiter de toutes les fonctionnalitées"><i class="fas fa-search"></i>
               </button>
            </div>
         </div>
      </section>
      <!--ANNONCES -->
      <section id="selectionsAnnonce">
         <div class="container">
            <div class="row mt-5">
            <div class="col-lg-3 col-sm-6 modifDetails">
                  <a href="plusInfos.php"style="text-decoration:none; color:#000;">

                  <div class="slider">
    <div><img class="imgModifs zoom" height="140" width="75%" src="dist/assets/img/fenetre2.jpg" class="d-block w-100"
                        alt="">
                     <h2 class="mt-5 mb-4"> Annonce 1<i class="fas fa-home ml-3"></i></h2>
                   <hr>
                     <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="far fa-star"></i> 2
                     Appréciations
                     <hr >
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt totam delectus eius distinctio </p>
                     <hr>
                     <p>Dès<span id="prixSejour"> 76€ </span>  </p>
                     <p class="mt-4">Disponible: 3 <i class="fas fa-users"></i></p>
                  </a></div>
    <div>I am another slide.</div>
  </div>
                     
               </div>
            <div class="col-lg-3 col-sm-6 modifDetails">
                  <a href="plusInfos.php"style="text-decoration:none; color:#000;">
                     <img class="imgModifs zoom" height="140" width="75%" src="dist/assets/img/fenetre2.jpg" class="d-block w-100"
                        alt="">
                     <h2 class="mt-5 mb-4"> Annonce 2<i class="fas fa-home ml-3"></i></h2>
                   <hr>
                     <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="far fa-star"></i> 2
                     Appréciations
                     <hr >
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt totam delectus eius distinctio </p>
                     <hr>
                     <p>Dès<span id="prixSejour"> 76€ </span>  </p>
                     <p class="mt-4">Disponible: 3 <i class="fas fa-users"></i></p>
                  </a>
               </div>
            <div class="col-lg-3 col-sm-6 modifDetails">
                  <a href="plusInfphp"style="text-decoration:none; color:#000;">
                     <img class="imgModifs zoom" height="140" width="75%" src="dist/assets/img/fenetre2.jpg" class="d-block w-100"
                        alt="">
                     <h2 class="mt-5 mb-4"> Annonce 3<i class="fas fa-home ml-3"></i></h2>
                   <hr>
                     <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="far fa-star"></i> 2
                     Appréciations
                     <hr >
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt totam delectus eius distinctio </p>
                     <hr>
                     <p>Dès<span id="prixSejour"> 76€ </span>  </p>
                     <p class="mt-4">Disponible: 3 <i class="fas fa-users"></i></p>
                  </a>
               </div>
            <div class="col-lg-3 col-sm-6 modifDetails">
                  <a href="plusInfos.php"style="text-decoration:none; color:#000;">
                     <img class="imgModifs zoom" height="140" width="75%" src="dist/assets/img/fenetre2.jpg" class="d-block w-100"
                        alt="">
                     <h2 class="mt-5 mb-4"> Annonce 4<i class="fas fa-home ml-3"></i></h2>
                   <hr>
                     <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="far fa-star"></i> 2
                     Appréciations
                     <hr >
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt totam delectus eius distinctio </p>
                     <hr>
                     <p>Dès<span id="prixSejour"> 76€ </span>  </p>
                     <p class="mt-4">Disponible: 3 <i class="fas fa-users"></i></p>
                  </a>
               </div>
              
               </div>
            </div>
      </section>
      <!--Paragraphe-->
      <div class="container paragraphe">
         <div class="row mt-5 mb-5 ">
            <div class="col-2 mt-5"><img src="dist/assets/img/leVillage.jpg" height= 150 width= 180 alt="">
            </div>
            <div class="col-10 mt-5 texteDescription">
               <h2>Stuliday</h2>
               <p>Vous avez réservé une location pour quatre personnes au ski et deux personnes vous ont lâchement abandonné
                  et
                  vous n'avez pas envie de tout annuler ?
               </p>
               <p>Nous avons la solution, postez votre annonce sur notre site et trouvez des
                  personnes pour remplacer vos amis au passage, faire de nouvelles rencontres le tout en économisant de
                  l'argent.
               </p>
            </div>
         </div>
      </div>
      <section id="video">
         <!-- Video-->
         <div class="container">
            <h3 class="mb-4">Dernières Videos</h3>
            <div class="row">
               <div class="col-lg-8 col-md-12 mx-auto">
                  <iframe width="720" height="398" src="https://www.youtube.com/embed/ihzI8nJ0PnM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                     allowfullscreen></iframe>
               </div>
               <div class="col-lg-4 col-md-12 mx-auto responsiveMedia">
                  <a href="#!">
                     <article class="art-video art-active">
                        <img class="leVillage" src="dist/assets/img/leVillage.jpg" alt="">
                        <h4>Top 5 New Tech Gadgets You Must Have In 2018</h4>
                     </article>
                  </a>
                  <a href="#">
                     <article class="art-video">
                        <img class="leVillage" src="dist/assets/img/village1.jpg" alt="">
                        <h4>10 Amazing Gadgets You Can Buy Now on Amazon</h4>
                  </a>
                  </article>
                  <a href="#">
                     <article class="art-video">
                        <img class="leVillage" src="dist/assets/img/winter.jpg" alt="">
                        <h4>Top 5 Best Drones with HD Camera (Cheap and Affordable versions)</h4>
                     </article>
                  </a>
                  <article class="art-video">
                     <a href="#">
                        <img class="leVillage" src="dist/assets/img/montagne.jpg" alt="">
                        <h4>iPhone X Review - Pushing me to Android </h4>
                  </article>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!-- Footer -->
    
     <?php 
include('inc/footer.php');
   ?>
      <script src="src/assets/js/core/popper.min.js"></script>
      <script src="src/assets/js/core/bootstrap-material-design.min.js"></script>
      <script src="src/assets/js/script.js"></script> 
   </body>
</html>