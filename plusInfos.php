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
      <div id="list-item-5" class="col-12 ">
      <section id="section-carousel">
         <div class="container-fluid">
            <div class="row mt-4 mb-3">
               <div class="col-md-12 mb-4 mt-3">
                  <h2 class="mt-4">Titre de l'annonce</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 col-lg-5 mx-auto">
                  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img src="dist/assets/img/wall.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                           <img src="dist/assets/img/slider1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                           <img src="dist/assets/img/slider2.jpg" class="d-block w-100" alt="...">
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
               <div class="col-form-label-sm col-md-12 col-lg-7 mx-auto">
                  <div class="absolute-icons">
                     <a class="boutonRond mr-5" href="#"><i class="fas fa-download telechargementFavoris"></i> </a>
                     <a class="boutonRond" href="#"> <i class="fas fa-heart telechargementFavoris"></i></a>
                  </div>
                  <form id="form-element">
                     <div class="form-row">
                        <div class="row mb-4">
                           <div class="col-md-12">
                              <p><span id="prixSejour">Prix 36€ </span> moyenne/nuit </p>
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                 class="far fa-star"></i> 2
                              Appréciations</a>
                           </div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="col-md-6 col-xs-12 mx-auto ">
                           <input type="text" class="form-control formulaire-gauche" placeholder="Arrivée">
                        </div>
                        <div class="col-md-6 col-xs-12 mx-auto ">
                           <input type="text" class="form-control formulaire-droit" placeholder="Départ  ">
                        </div>
                     </div>
                     <div class="col-md-12 col-xs-12 mx-auto">
                        <div class="row ">
                           <select class="form-control formulaire-droit" name="nombrevacanciers" id="">
                              <option value="0">Nombre de vacanciers</option>
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
                           <div class="col-form-label-sm col-md-12 col-xs-12 mx-auto">
                              <p class="hiddenTexte">texte</p>
                              <a class="btn btn-primary btn-lg " href="paiement.php" role="button">Réservez</a>
                              <p class="mt-4">Nombre de places disponible: 2 <i class="fas fa-users"></i></p>
                           </div>
                        </div>
                     </div>
               </div>
               </form>
            </div>
         </div>
      </section>
      <section id="navFocus">
         <div class="container-fluid">
            <div class="row mb-4">
               <div class="col-md-12 col-xs-12 mx-auto">
                  <nav class="nav nav-pills flex-column flex-sm-row">
                     <a class="flex-sm-fill text-sm-center nav-link active" href="#list-item-1">Description</a>
                     <a class="flex-sm-fill text-sm-center nav-link" href="#list-item-2">Equipements</a>
                     <a class="flex-sm-fill text-sm-center nav-link" href="#list-item-3">Remarques</a>
                     <a class="flex-sm-fill text-sm-center nav-link" href="#list-item-4">Avis client</a>
                  </nav>
               </div>
            </div>
         </div>
      </section>
      <section id="descriptionFocus">
         <div class="container">
            <div class="row mb-4 mt-4">
               <div id="list-item-1" class="col-12 ">
                  <i class="fas fa-home picSize">
                     <p class="textePic">Maison 55m²</p>
                  </i>
                  <i class="fas fa-bed picSize">
                     <p class="textePic">Chambres 2</p>
                  </i>
                  <i class="fas fa-users picSize">
                     <p class="textePic">Couchages 3</p>
                  </i>
                  <i class="fas fa-bath picSize">
                     <p class="textePic">Salle(s) de bain 1</p>
                  </i>
                  <i class="fas fa-toilet picSize">
                     <p class="textePic">Toilettes 1</p>
                  </i>
                  <i class="fas fa-moon picSize">
                     <p class="textePic">Séjour minimum 3 - 7 Nuitées</p>
                  </i>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="container">
            <h6> Titre Description <i id="hi-de"class="far fa-caret-square-down ml-4"></i></h6>
            <hr class="positionUp">
            <div class="row mb-4 mt-4 hi-de">
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, facere est ratione at rerum
                  consectetur neque officiis dolor delectus asperiores dicta atque sint iusto debitis voluptatibus
                  exercitationem voluptatum facilis nostrum! Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Repellendus, facere est ratione at rerum
                  consectetur neque officiis dolor delectus asperiores dicta atque sint iusto debitis voluptatibus
                  exercitationem voluptatum facilis nostrum!
               </p>
               <h6><a href="#"> <img id="leProprietaire" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8Y2lyY2xlIHN0eWxlPSJmaWxsOiNBNEMyRjc7IiBjeD0iMjU2IiBjeT0iMjU2IiByPSIyNDYuNjkxIi8+Cgk8ZWxsaXBzZSBzdHlsZT0iZmlsbDojRTNFN0YyOyIgY3g9IjI0Mi4wMzYiIGN5PSIyNTYiIHJ4PSIyMzIuNzI3IiByeT0iMjQ2LjY5MSIvPgoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIGQ9Ik0yNTYsNTAyLjY5MWMyLjQxLDAsNC43OTItMC4xMTQsNy4xODUtMC4xODJDMTM3Ljc5Nyw0OTguNjk3LDM3LjIzNiwzODkuODM0LDM3LjIzNiwyNTYgICBTMTM3Ljc5NywxMy4zMDMsMjYzLjE4NSw5LjQ5MWMtMi4zOTMtMC4wNjgtNC43NzYtMC4xODItNy4xODUtMC4xODJDMTE5Ljc1Niw5LjMwOSw5LjMwOSwxMTkuNzU2LDkuMzA5LDI1NiAgIFMxMTkuNzU2LDUwMi42OTEsMjU2LDUwMi42OTFMMjU2LDUwMi42OTF6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojN0ZBQ0ZBOyIgZD0iTTE4Mi41NzUsMzk2LjEyM2wtNzMuNjExLDQwLjE1MmMtNC4yMzUsMi4zNi04LjE5Nyw1LjE4MS0xMS44MTMsOC40MSAgIGM5MS40MjgsNzcuMDM1LDIyNC45NDgsNzcuMzc1LDMxNi43NjgsMC44MDhjLTMuOTY1LTMuNDA0LTguMzIxLTYuMzI0LTEyLjk3Ni04LjY5OWwtNzguODE4LTM5LjQwOCAgIGMtMTAuMTg1LTUuMDkyLTE2LjYxOC0xNS41MDItMTYuNjE4LTI2Ljg4OVYzMzkuNTdjMi42NDctMy4wNjYsNS4xMzUtNi4yNjYsNy40NTYtOS41ODYgICBjMTAuNjMzLTE1LjExMywxOC44OTUtMzEuNzYzLDI0LjQ5OC00OS4zNzNjMTAuMzgtMy4xNTcsMTcuNDk2LTEyLjcwNCwxNy41NTQtMjMuNTUzdi0zMy4wMDYgICBjLTAuMDI3LTYuOTkyLTMuMDI3LTEzLjY0My04LjI1MS0xOC4yOTF2LTQ3LjcxOGMwLDAsOS43OTgtNzQuMjYxLTkwLjc2NC03NC4yNjFzLTkwLjc2NCw3NC4yNjEtOTAuNzY0LDc0LjI2MXY0Ny43MTggICBjLTUuMjI0LDQuNjQ4LTguMjI0LDExLjI5OS04LjI1MSwxOC4yOTF2MzMuMDA2YzAuMDI2LDguNDEyLDQuMzI0LDE2LjIzNCwxMS40MDksMjAuNzY3YzUuNDc4LDIyLjQ1OCwxNS42NSw0My41MDIsMjkuODQ3LDYxLjc0NSAgIHYzMC4xNkMxOTguMjQxLDM4MC43MzIsMTkyLjIzMywzOTAuODU0LDE4Mi41NzUsMzk2LjEyM3oiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNBNEMyRjc7IiBkPSJNMzk2LjYyNCw0MzYuMTZsLTEwMy42OTYtMzkuNDA4Yy0xMC4xODUtNS4wOTItMTYuNjE4LTE1LjUwMi0xNi42MTgtMjYuODg5di0zMC45MjcgICBjMi42NDctMy4wNjYsNS4xMzUtNi4yNjYsNy40NTYtOS41ODZjMTAuNjMzLTE1LjExMywxOC44OTUtMzEuNzYzLDI0LjQ5OC00OS4zNzNjMTAuMzgtMy4xNTcsMTcuNDk2LTEyLjcwNCwxNy41NTQtMjMuNTUzdi0zMy4wMDYgICBjLTAuMDI3LTYuOTkyLTMuMDI4LTEzLjY0My04LjI1MS0xOC4yOTF2LTQ3LjcxOGMwLDAsOS43OTgtNzQuMjYxLTkwLjc2NC03NC4yNjFjLTUuOTg2LDAtMTEuNTU1LDAuMjc5LTE2Ljc4NCwwLjc3NSAgIGMwLjYxLDQuODM0LTIuMTAzLDkuNDc2LTYuNjE1LDExLjMxNmMtMTIuMDQsNC45MzktMjMuNjkyLDEwLjc3Ni0zNC44NTgsMTcuNDYxYzQuNjAxLDAuODA1LDcuOTQ5LDQuODExLDcuOTI0LDkuNDgyICAgYzIuMDA2LDM0LjI3Mi05Ljc4NCw3NC41MTItMjAuMzgxLDEwOS41NDNjMC4zMjYsMTMuNzkzLDAuNjI4LDI3LjU4OSwxLjAyOSw0MS4zODJjMS4wMTksMy4xODQsMi4wNDEsNi4zNjYsMy4wNCw5LjU1NCAgIGMxLjkyNSwxLjE3LDMuNDM0LDIuOTE1LDQuMzE1LDQuOTg5YzQuMjUyLDEwLjEyNyw4Ljk5MywyMC41MDYsMTMuMTA2LDMxLjA3NmM1LjYwNi0xLjU2MywxMS40OSwxLjM0MiwxMy42NTgsNi43NDIgICBjMy42MjksMTAuMjQ5LDUuOTAyLDIwLjkyOSw2Ljc2LDMxLjc2OGMwLjQzOSwzLjI1NS0xLjE1Myw2LjQ0OS00LjAxNiw4LjA1OWMtNS4xNzYsMTcuOTI4LTEzLjkxNiwzNC42MjctMjUuNjk3LDQ5LjA5OCAgIGMtMi41NTQsMi40ODgtNi4yMjYsMy40NTMtOS42NzQsMi41NDNjLTMuNDQ3LTAuOTEtNi4xNjUtMy41NjItNy4xNTgtNi45ODZjLTAuNDk5LTEuNzMxLTAuOTA1LTMuNDg3LTEuMjE1LTUuMjYxICAgYy02LjkyMiw0LjExMS0xNC4zNDMsNy43MDMtMjIuMzU0LDEyLjE4OWMtNC4zMDIsMi40MDktMzYuOTg4LDE3LjQxNC0zNy44MDQsMjEuMTM2Yy00LjYxOSwyMS4wNjEsNjkuMjE5LDQ3LjE4MiwxMDYuMjg4LDYxLjk1ICAgYzEwLjA5MywxLjMyMywyMC4yNTgsMi4wMjIsMzAuNDM3LDIuMDkzYzYwLjA4MiwwLDE0MC4wMDctMjEuNSwxODIuNzk3LTU3LjE5OEM0MDUuNjM1LDQ0MS40NTUsNDAxLjI3OSw0MzguNTM1LDM5Ni42MjQsNDM2LjE2ICAgTDM5Ni42MjQsNDM2LjE2eiIvPgoJPGc+CgkJPHBhdGggc3R5bGU9ImZpbGw6IzQyOERGRjsiIGQ9Ik0yNTYsNTEyQzExNC42MTUsNTEyLDAsMzk3LjM4NSwwLDI1NlMxMTQuNjE1LDAsMjU2LDBzMjU2LDExNC42MTUsMjU2LDI1NiAgICBDNTExLjgzNywzOTcuMzE3LDM5Ny4zMTcsNTExLjgzNywyNTYsNTEyeiBNMjU2LDE4LjYxOEMxMjQuODk4LDE4LjYxOCwxOC42MTgsMTI0Ljg5OCwxOC42MTgsMjU2UzEyNC44OTgsNDkzLjM4MiwyNTYsNDkzLjM4MiAgICBTNDkzLjM4MiwzODcuMTAyLDQ5My4zODIsMjU2QzQ5My4yMzIsMTI0Ljk2LDM4Ny4wNCwxOC43NjgsMjU2LDE4LjYxOHoiLz4KCQk8cGF0aCBzdHlsZT0iZmlsbDojNDI4REZGOyIgZD0iTTI1Niw1MTJjLTYwLjMyNS0wLjAzNC0xMTguNzA0LTIxLjM1Mi0xNjQuODU1LTYwLjJjLTIuMDc4LTEuNzUyLTMuMjg2LTQuMzI0LTMuMzA5LTcuMDQxICAgIGMtMC4wMjMtMi43MTcsMS4xNDMtNS4zMDksMy4xOTEtNy4wOTVjNC4xMjgtMy42NzQsOC42NS02Ljg4MiwxMy40ODItOS41NjRsNzMuNjA5LTQwLjE0NWM2LjY3LTMuNjM5LDEwLjgxOS0xMC42MywxMC44MTgtMTguMjI3ICAgIHYtMjYuOTM2Yy0xMy4yOTItMTcuODEzLTIzLjA2My0zNy45OTgtMjguNzkxLTU5LjQ3M2MtNy44OTMtNi40MzYtMTIuNDczLTE2LjA4LTEyLjQ3My0yNi4yNjR2LTMzICAgIGMwLjAyOC04LjEwMiwyLjk1Ni0xNS45MjYsOC4yNTUtMjIuMDU1di00My40NDZjLTEuNjA5LTE5Ljc5OSw0LjY5NC0zOS40MjksMTcuNTI3LTU0LjU5MSAgICBDMTkwLjYwOSw4NC4zOTEsMjE4LjM4Miw3NC40NzMsMjU2LDc0LjQ3M3M2NS4zOTEsOS45MTgsODIuNTQ1LDI5LjQ5MWMxMi44MzMsMTUuMTYyLDE5LjEzNSwzNC43OTIsMTcuNTI3LDU0LjU5MVYyMDIgICAgYzUuMjk4LDYuMTI5LDguMjI3LDEzLjk1Myw4LjI1NSwyMi4wNTV2MzNjMC4wMTYsMTMuMTA3LTcuNTQ5LDI1LjA0LTE5LjQwOSwzMC42MThjLTUuODI1LDE2Ljk2Ny0xNC4wMjQsMzMuMDI0LTI0LjM1NSw0Ny42OSAgICBjLTEuOTkxLDIuODA5LTMuOTE4LDUuMzU1LTUuNzQ1LDcuNjA5djI3LjUyN2MtMC4wMjUsNy44NjYsNC40MjUsMTUuMDYzLDExLjQ3MywxOC41NTZsNzguODE4LDM5LjQwOSAgICBjNS4zMTQsMi43MDEsMTAuMjg1LDYuMDI4LDE0LjgwOSw5LjkwOWMyLjEwNSwxLjc3NCwzLjMxNiw0LjM4OCwzLjMwOSw3LjE0Yy0wLjAwNywyLjc1Mi0xLjIzMiw1LjM2LTMuMzQ2LDcuMTIzICAgIEMzNzMuODY5LDQ5MC45NjYsMzE1Ljg4Niw1MTEuOTY5LDI1Niw1MTJ6IE0xMTIuNDM2LDQ0NWM4NC4zOTIsNjQuMTYsMjAxLjEwOCw2NC41NDMsMjg1LjkxOCwwLjkzNiAgICBjLTAuNTI3LTAuMjgyLTEuMDQ1LTAuNTU1LTEuNTczLTAuODE4bC03OC44MTgtMzkuNDA5Yy0xMy4zNzUtNi42MjYtMjEuODE2LTIwLjI4My0yMS43NjQtMzUuMjA5di0zMC45MjcgICAgYzAtMi4yNTgsMC44Mi00LjQzOSwyLjMwOS02LjEzNmMyLjQzMS0yLjgyOSw0LjcxOC01Ljc3OCw2Ljg1NC04LjgzNmMxMC4wODctMTQuMzQsMTcuOTIzLTMwLjEzOCwyMy4yMzYtNDYuODQ1ICAgIGMwLjkzMy0yLjg4OSwzLjIxNy01LjE0Miw2LjExOC02LjAzNmM2LjQ2LTEuOTgyLDEwLjkwMS03LjkwNywxMC45OTEtMTQuNjY0di0zM2MtMC4wMTUtNC4zNjItMS45MDItOC41MDctNS4xODItMTEuMzgyICAgIGMtMS45NTYtMS43NjQtMy4wNzMtNC4yNzUtMy4wNzMtNi45MDl2LTQ3LjcxOGMwLTAuNDA3LDAuMDI3LTAuODE0LDAuMDgyLTEuMjE4YzEuMDg3LTE0Ljc4OC0zLjYzMi0yOS40MTctMTMuMTU1LTQwLjc4MiAgICBjLTEzLjQ5LTE1LjIyNy0zNi40OS0yMi45NTQtNjguMzgxLTIyLjk1NGMtMzIuMDE4LDAtNTUuMDgyLDcuNzkxLTY4LjU0NSwyMy4xNDVjLTkuNTAyLDExLjI5NC0xNC4xNjksMjUuODc4LTEyLjk5MSw0MC41OTEgICAgYzAuMDU1LDAuNDA0LDAuMDgyLDAuODExLDAuMDgyLDEuMjE4djQ3LjcxOGMwLDIuNjM0LTEuMTE3LDUuMTQ1LTMuMDczLDYuOTA5Yy0zLjI4LDIuODc1LTUuMTY3LDcuMDItNS4xODIsMTEuMzgydjMzICAgIGMwLjAxOSw1LjI1NiwyLjcxNiwxMC4xMzksNy4xNTUsMTIuOTU1YzIuMDM0LDEuMzE3LDMuNDc1LDMuMzc1LDQuMDE4LDUuNzM2YzUuMTgyLDIxLjAyMywxNC42OTcsNDAuNzMxLDI3LjkzNyw1Ny44NjQgICAgYzEuMzg4LDEuNjc4LDIuMTQ5LDMuNzg2LDIuMTU1LDUuOTY0djMwLjE1NGMwLjAwMywxNC40MTMtNy44NzEsMjcuNjc2LTIwLjUyNywzNC41NzNsMCwwbC03My42MDksNDAuMTQ1ICAgIEMxMTMuMDkxLDQ0NC42MjcsMTEyLjc2NCw0NDQuODA5LDExMi40MzYsNDQ1eiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                  </a>Propriétaire 
               </h6>
               <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit laborum rerum libero aspernatur
                  vitae facere unde, saepe delectus hic impedit sit, eveniet expedita nemo quibusdam similique nesciunt dolores
                  ipsam asperiores! Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda debitis sed velit sequi?
                  Repudiandae quod eligendi sunt illo perferendis distinctio aliquam. Iusto, nam totam. Ab eveniet nam vel
                  eligendi beatae! 
               </p>
               <div class="col-form-label-sm col-md-12 col-lg-12 mx-auto">
                  <div class="absolute-icons">
                     <a class="btn btn-primary btn-lg mt-5  proprietaireContact" href="creationAnnonce.php" role="button">
                     Contacter
                     le propriétaire</a>
                  </div>
               </div>
            </div>
            <div class="container laHauteur">
               <div class="row">
                  <div class="col 12 hi-de">
                     <h6 class="mt-2 ">Localisation</h6>
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.3073700436003!2d-0.11704557153785924!3d42.889422930634424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd57dd09b50749cd%3A0x5ef20389bd68a58b!2sLocation+appartement+cauterets!5e0!3m2!1sfr!2sfr!4v1546079689318"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                     <div class="btn-group-vertical">
                        <button class="lesBoutons" type="button"><a href="https://fr-fr.facebook.com/" target="_blank"><img id="reseauxSociaux"
                           src="https://img.icons8.com/color/96/000000/facebook.png" alt=""></a></button>
                        <button class="lesBoutons" type="button"><a href="https://twitter.com/?lang=fr" target="_blank"><img id="reseauxSociaux"
                           src="https://img.icons8.com/color/96/000000/twitter.png" alt=""></a></button>
                        <button class="lesBoutons" type="button"><a href="https://www.instagram.com/?hl=fr" target="_blank"><img
                           id="reseauxSociaux" src="https://img.icons8.com/color/96/000000/instagram.png" alt=""></a></button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12 mt-4 mb-5 hi-de">
                  <hr class="mt-5">
                  <div class="owner-details__stat-section">
                     <div class="owner-details__stat-section__group">
                        <dl class="owner-details__stat-section__group__item">
                           <dd class="small">Taux de réponse :</dd>
                           <dt class="text-capitalize">100%</dt>
                        </dl>
                        <dl class="owner-details__stat-section__group__item">
                           <dd class="small">Délai de réponse</dd>
                           <dt class="text-capitalize">Dans l'heure</dt>
                        </dl>
                        <dl class="owner-details__stat-section__group__item">
                           <dd class="small">Parle</dd>
                           <dt class="text-capitalize">Français</dt>
                        </dl>
                        <dl class="owner-details__stat-section__group__item">
                           <dd class="small">Mise à jour :</dd>
                           <dt class="text-capitalize">25 Janvier 2019</dt>
                        </dl>
                     </div>
                  </div>
                  <hr class="mt-5 mb-5">
                  <a href="#">En savoir plus sur l'annonceur</a>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="container">
            <h6> Equipements <i id="hi-de1"class="far fa-caret-square-down ml-4"></i></h6>
            <hr class="positionUp">
            <div id="list-item-2" class="row">
               <div class="col-12 mt-4 mb-5 hi-de1">
                  <ul>
                     <li class="equipementDisponible">Internet</li>
                     <li class="equipementDisponible">Télévision</li>
                     <li class="equipementDisponible">Satellite ou câble</li>
                     <li class="equipementDisponible">Enfants bienvenus</li>
                     <li class="equipementDisponible">Parking</li>
                     <li class="equipementDisponible">Chauffage</li>
                  </ul>
                  <h6>Salle(s) de bain</h6>
                  <hr class="positionUp">
                  <ul>
                     <li class="equipementDisponible">2 Salles de bain</li>
                     <li class="equipementDisponible">WC, Baignoire et douche, Douche, Bidet</li>
                     <li class="equipementDisponible">WC, Baignoire et douche, Douche, Bidet</li>
                     <li class="equipementDisponible"> En-suite
                        salle de bain avec douche, cabine de douche séparée, bidet, lavabo et wc.
                        Salle de bains familiale: salle de bain avec douche, cabine de douche séparée, bidet, lavabo et WC.
                        Articles de toilette gratuits.
                     </li>
                  </ul>
                  <h6>Type de destination</h6>
                  <hr class="positionUp">
                  <ul>
                     <li class="equipementDisponible">Proche de la mer</li>
                     <li class="equipementDisponible">Campagne</li>
                     <li class="equipementDisponible">Village</li>
                     <li class="equipementDisponible">Fleuve/rivière</li>
                  </ul>
                  <h6>Repas</h6>
                  <hr class="positionUp">
                  <ul>
                     <li class="equipementDisponible">Repas non proposés</li>
                  </ul>
                  <h6>Autres</h6>
                  <hr class="positionUp">
                  <ul>
                     <li class="equipementDisponible">Téléphone</li>
                     <li class="equipementDisponible">Chauffage</li>
                     <li class="equipementDisponible">Village</li>
                     <li class="equipementDisponible">Linge de maison fourni</li>
                     <li class="equipementDisponible">Lave-linge</li>
                     <li class="equipementDisponible">Parking</li>
                     <li class="equipementDisponible">Accès internet</li>
                     <li class="equipementDisponible">Serviettes de bain fournies</li>
                     <li class="equipementDisponible">Planche et fer à repasser</li>
                     <li class="equipementDisponible">Sèche-cheveux</li>
                     <li class="equipementDisponible">Salon</li>
                     <li class="equipementDisponible">Connexion Wi-Fi gratuite</li>
                  </ul>
                  <h6>Cuisine</h6>
                  <hr class="positionUp">
                  <ul>
                     <li class="equipementDisponible">Lave-vaisselle</li>
                     <li class="equipementDisponible">Réfrigérateur</li>
                     <li class="equipementDisponible">Congélateur</li>
                     <li class="equipementDisponible">Plaques de cuisson</li>
                     <li class="equipementDisponible">Four</li>
                     <li class="equipementDisponible">Four à micro-ondes</li>
                     <li class="equipementDisponible">Gril</li>
                     <li class="equipementDisponible">Cafetière</li>
                     <li class="equipementDisponible">Grille-pain</li>
                     <li class="equipementDisponible">Fonds de Cuisine</li>
                     <li class="equipementDisponible">Vaisselle et Couverts</li>
                  </ul>
                  <h6>Salle à manger </h6>
                  <hr class="positionUp">
                  <ul>
                     <li class="equipementDisponible">Table pour manger</li>
                     <li class="equipementDisponible">Chaise haute</li>
                     <li class="equipementDisponible">6 places assises</li>
                  </ul>
                  <h6>Equipement de loisirs</h6>
                  <hr class="positionUp">
                  <ul>
                     <li class="equipementDisponible">Télévision</li>
                     <li class="equipementDisponible">Câble/satellite</li>
                     <li class="equipementDisponible">Chaîne Hi-Fi</li>
                     <li class="equipementDisponible">Lecteur DVD</li>
                     <li class="equipementDisponible">Livres</li>
                     <li class="equipementDisponible">Jeux</li>
                     <li class="equipementDisponible">Table de ping-pong</li>
                     <li class="equipementDisponible">Vidéothèque</li>
                     <li class="equipementDisponible">Jeux vidéo</li>
                  </ul>
                  <h6>A l'extérieur</h6>
                  <hr class="positionUp">
                  <ul>
                     <li class="equipementDisponible">Jardin</li>
                     <li class="equipementDisponible">Barbecue extérieur</li>
                     <li id="list-item-3" class="equipementDisponible">Terrasse</li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="container">
            <h6 class="mr-5"> Remarques <i id="hi-de2"class="far fa-caret-square-down ml-4"></i></h6>
            <hr class="positionUp">
            <div class="row mb-4 mt-4 hi-de2">
               <hr class="positionUp">
               <ul>
                  <li class="equipementDisponible"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore ipsum
                     aliquid dolore ea, illum exercitationem voluptatem officiis voluptas, quasi eveniet ab sequi soluta fugit
                     accusantium vel eos deserunt eum tempore. 
                  </li>
                  <li id="list-item-4" class="equipementDisponible"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     At expedita voluptas id, sit impedit sapiente rerum in quaerat. Quod aliquam eum, blanditiis tempore
                     asperiores laborum similique nulla labore assumenda beatae? 
                  </li>
                  <li class="equipementDisponible"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos beatae error
                     fugit mollitia voluptate delectus est quas ea, doloribus nobis cupiditate iste eveniet illo! Obcaecati
                     iusto corrupti excepturi dolores impedit. 
                  </li>
               </ul>
            </div>
            <h6 id="positionAvis"> Avis client <i id="hi-de3"class="far fa-caret-square-down ml-4"></i></h6>
            <hr class="separatedElement">
            <div class="media mb-2 hi-de3">
               <img id="leProfil" class="mr-3" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8Y2lyY2xlIHN0eWxlPSJmaWxsOiNBNEMyRjc7IiBjeD0iMjU2IiBjeT0iMjU2IiByPSIyNDYuNjkxIi8+Cgk8ZWxsaXBzZSBzdHlsZT0iZmlsbDojRTNFN0YyOyIgY3g9IjI0Mi4wMzYiIGN5PSIyNTYiIHJ4PSIyMzIuNzI3IiByeT0iMjQ2LjY5MSIvPgoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIGQ9Ik0yNTYsNTAyLjY5MWMyLjQxLDAsNC43OTItMC4xMTQsNy4xODUtMC4xODJDMTM3Ljc5Nyw0OTguNjk3LDM3LjIzNiwzODkuODM0LDM3LjIzNiwyNTYgICBTMTM3Ljc5NywxMy4zMDMsMjYzLjE4NSw5LjQ5MWMtMi4zOTMtMC4wNjgtNC43NzYtMC4xODItNy4xODUtMC4xODJDMTE5Ljc1Niw5LjMwOSw5LjMwOSwxMTkuNzU2LDkuMzA5LDI1NiAgIFMxMTkuNzU2LDUwMi42OTEsMjU2LDUwMi42OTFMMjU2LDUwMi42OTF6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojN0ZBQ0ZBOyIgZD0iTTE4Mi41NzUsMzk2LjEyM2wtNzMuNjExLDQwLjE1MmMtNC4yMzUsMi4zNi04LjE5Nyw1LjE4MS0xMS44MTMsOC40MSAgIGM5MS40MjgsNzcuMDM1LDIyNC45NDgsNzcuMzc1LDMxNi43NjgsMC44MDhjLTMuOTY1LTMuNDA0LTguMzIxLTYuMzI0LTEyLjk3Ni04LjY5OWwtNzguODE4LTM5LjQwOCAgIGMtMTAuMTg1LTUuMDkyLTE2LjYxOC0xNS41MDItMTYuNjE4LTI2Ljg4OVYzMzkuNTdjMi42NDctMy4wNjYsNS4xMzUtNi4yNjYsNy40NTYtOS41ODYgICBjMTAuNjMzLTE1LjExMywxOC44OTUtMzEuNzYzLDI0LjQ5OC00OS4zNzNjMTAuMzgtMy4xNTcsMTcuNDk2LTEyLjcwNCwxNy41NTQtMjMuNTUzdi0zMy4wMDYgICBjLTAuMDI3LTYuOTkyLTMuMDI3LTEzLjY0My04LjI1MS0xOC4yOTF2LTQ3LjcxOGMwLDAsOS43OTgtNzQuMjYxLTkwLjc2NC03NC4yNjFzLTkwLjc2NCw3NC4yNjEtOTAuNzY0LDc0LjI2MXY0Ny43MTggICBjLTUuMjI0LDQuNjQ4LTguMjI0LDExLjI5OS04LjI1MSwxOC4yOTF2MzMuMDA2YzAuMDI2LDguNDEyLDQuMzI0LDE2LjIzNCwxMS40MDksMjAuNzY3YzUuNDc4LDIyLjQ1OCwxNS42NSw0My41MDIsMjkuODQ3LDYxLjc0NSAgIHYzMC4xNkMxOTguMjQxLDM4MC43MzIsMTkyLjIzMywzOTAuODU0LDE4Mi41NzUsMzk2LjEyM3oiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNBNEMyRjc7IiBkPSJNMzk2LjYyNCw0MzYuMTZsLTEwMy42OTYtMzkuNDA4Yy0xMC4xODUtNS4wOTItMTYuNjE4LTE1LjUwMi0xNi42MTgtMjYuODg5di0zMC45MjcgICBjMi42NDctMy4wNjYsNS4xMzUtNi4yNjYsNy40NTYtOS41ODZjMTAuNjMzLTE1LjExMywxOC44OTUtMzEuNzYzLDI0LjQ5OC00OS4zNzNjMTAuMzgtMy4xNTcsMTcuNDk2LTEyLjcwNCwxNy41NTQtMjMuNTUzdi0zMy4wMDYgICBjLTAuMDI3LTYuOTkyLTMuMDI4LTEzLjY0My04LjI1MS0xOC4yOTF2LTQ3LjcxOGMwLDAsOS43OTgtNzQuMjYxLTkwLjc2NC03NC4yNjFjLTUuOTg2LDAtMTEuNTU1LDAuMjc5LTE2Ljc4NCwwLjc3NSAgIGMwLjYxLDQuODM0LTIuMTAzLDkuNDc2LTYuNjE1LDExLjMxNmMtMTIuMDQsNC45MzktMjMuNjkyLDEwLjc3Ni0zNC44NTgsMTcuNDYxYzQuNjAxLDAuODA1LDcuOTQ5LDQuODExLDcuOTI0LDkuNDgyICAgYzIuMDA2LDM0LjI3Mi05Ljc4NCw3NC41MTItMjAuMzgxLDEwOS41NDNjMC4zMjYsMTMuNzkzLDAuNjI4LDI3LjU4OSwxLjAyOSw0MS4zODJjMS4wMTksMy4xODQsMi4wNDEsNi4zNjYsMy4wNCw5LjU1NCAgIGMxLjkyNSwxLjE3LDMuNDM0LDIuOTE1LDQuMzE1LDQuOTg5YzQuMjUyLDEwLjEyNyw4Ljk5MywyMC41MDYsMTMuMTA2LDMxLjA3NmM1LjYwNi0xLjU2MywxMS40OSwxLjM0MiwxMy42NTgsNi43NDIgICBjMy42MjksMTAuMjQ5LDUuOTAyLDIwLjkyOSw2Ljc2LDMxLjc2OGMwLjQzOSwzLjI1NS0xLjE1Myw2LjQ0OS00LjAxNiw4LjA1OWMtNS4xNzYsMTcuOTI4LTEzLjkxNiwzNC42MjctMjUuNjk3LDQ5LjA5OCAgIGMtMi41NTQsMi40ODgtNi4yMjYsMy40NTMtOS42NzQsMi41NDNjLTMuNDQ3LTAuOTEtNi4xNjUtMy41NjItNy4xNTgtNi45ODZjLTAuNDk5LTEuNzMxLTAuOTA1LTMuNDg3LTEuMjE1LTUuMjYxICAgYy02LjkyMiw0LjExMS0xNC4zNDMsNy43MDMtMjIuMzU0LDEyLjE4OWMtNC4zMDIsMi40MDktMzYuOTg4LDE3LjQxNC0zNy44MDQsMjEuMTM2Yy00LjYxOSwyMS4wNjEsNjkuMjE5LDQ3LjE4MiwxMDYuMjg4LDYxLjk1ICAgYzEwLjA5MywxLjMyMywyMC4yNTgsMi4wMjIsMzAuNDM3LDIuMDkzYzYwLjA4MiwwLDE0MC4wMDctMjEuNSwxODIuNzk3LTU3LjE5OEM0MDUuNjM1LDQ0MS40NTUsNDAxLjI3OSw0MzguNTM1LDM5Ni42MjQsNDM2LjE2ICAgTDM5Ni42MjQsNDM2LjE2eiIvPgoJPGc+CgkJPHBhdGggc3R5bGU9ImZpbGw6IzQyOERGRjsiIGQ9Ik0yNTYsNTEyQzExNC42MTUsNTEyLDAsMzk3LjM4NSwwLDI1NlMxMTQuNjE1LDAsMjU2LDBzMjU2LDExNC42MTUsMjU2LDI1NiAgICBDNTExLjgzNywzOTcuMzE3LDM5Ny4zMTcsNTExLjgzNywyNTYsNTEyeiBNMjU2LDE4LjYxOEMxMjQuODk4LDE4LjYxOCwxOC42MTgsMTI0Ljg5OCwxOC42MTgsMjU2UzEyNC44OTgsNDkzLjM4MiwyNTYsNDkzLjM4MiAgICBTNDkzLjM4MiwzODcuMTAyLDQ5My4zODIsMjU2QzQ5My4yMzIsMTI0Ljk2LDM4Ny4wNCwxOC43NjgsMjU2LDE4LjYxOHoiLz4KCQk8cGF0aCBzdHlsZT0iZmlsbDojNDI4REZGOyIgZD0iTTI1Niw1MTJjLTYwLjMyNS0wLjAzNC0xMTguNzA0LTIxLjM1Mi0xNjQuODU1LTYwLjJjLTIuMDc4LTEuNzUyLTMuMjg2LTQuMzI0LTMuMzA5LTcuMDQxICAgIGMtMC4wMjMtMi43MTcsMS4xNDMtNS4zMDksMy4xOTEtNy4wOTVjNC4xMjgtMy42NzQsOC42NS02Ljg4MiwxMy40ODItOS41NjRsNzMuNjA5LTQwLjE0NWM2LjY3LTMuNjM5LDEwLjgxOS0xMC42MywxMC44MTgtMTguMjI3ICAgIHYtMjYuOTM2Yy0xMy4yOTItMTcuODEzLTIzLjA2My0zNy45OTgtMjguNzkxLTU5LjQ3M2MtNy44OTMtNi40MzYtMTIuNDczLTE2LjA4LTEyLjQ3My0yNi4yNjR2LTMzICAgIGMwLjAyOC04LjEwMiwyLjk1Ni0xNS45MjYsOC4yNTUtMjIuMDU1di00My40NDZjLTEuNjA5LTE5Ljc5OSw0LjY5NC0zOS40MjksMTcuNTI3LTU0LjU5MSAgICBDMTkwLjYwOSw4NC4zOTEsMjE4LjM4Miw3NC40NzMsMjU2LDc0LjQ3M3M2NS4zOTEsOS45MTgsODIuNTQ1LDI5LjQ5MWMxMi44MzMsMTUuMTYyLDE5LjEzNSwzNC43OTIsMTcuNTI3LDU0LjU5MVYyMDIgICAgYzUuMjk4LDYuMTI5LDguMjI3LDEzLjk1Myw4LjI1NSwyMi4wNTV2MzNjMC4wMTYsMTMuMTA3LTcuNTQ5LDI1LjA0LTE5LjQwOSwzMC42MThjLTUuODI1LDE2Ljk2Ny0xNC4wMjQsMzMuMDI0LTI0LjM1NSw0Ny42OSAgICBjLTEuOTkxLDIuODA5LTMuOTE4LDUuMzU1LTUuNzQ1LDcuNjA5djI3LjUyN2MtMC4wMjUsNy44NjYsNC40MjUsMTUuMDYzLDExLjQ3MywxOC41NTZsNzguODE4LDM5LjQwOSAgICBjNS4zMTQsMi43MDEsMTAuMjg1LDYuMDI4LDE0LjgwOSw5LjkwOWMyLjEwNSwxLjc3NCwzLjMxNiw0LjM4OCwzLjMwOSw3LjE0Yy0wLjAwNywyLjc1Mi0xLjIzMiw1LjM2LTMuMzQ2LDcuMTIzICAgIEMzNzMuODY5LDQ5MC45NjYsMzE1Ljg4Niw1MTEuOTY5LDI1Niw1MTJ6IE0xMTIuNDM2LDQ0NWM4NC4zOTIsNjQuMTYsMjAxLjEwOCw2NC41NDMsMjg1LjkxOCwwLjkzNiAgICBjLTAuNTI3LTAuMjgyLTEuMDQ1LTAuNTU1LTEuNTczLTAuODE4bC03OC44MTgtMzkuNDA5Yy0xMy4zNzUtNi42MjYtMjEuODE2LTIwLjI4My0yMS43NjQtMzUuMjA5di0zMC45MjcgICAgYzAtMi4yNTgsMC44Mi00LjQzOSwyLjMwOS02LjEzNmMyLjQzMS0yLjgyOSw0LjcxOC01Ljc3OCw2Ljg1NC04LjgzNmMxMC4wODctMTQuMzQsMTcuOTIzLTMwLjEzOCwyMy4yMzYtNDYuODQ1ICAgIGMwLjkzMy0yLjg4OSwzLjIxNy01LjE0Miw2LjExOC02LjAzNmM2LjQ2LTEuOTgyLDEwLjkwMS03LjkwNywxMC45OTEtMTQuNjY0di0zM2MtMC4wMTUtNC4zNjItMS45MDItOC41MDctNS4xODItMTEuMzgyICAgIGMtMS45NTYtMS43NjQtMy4wNzMtNC4yNzUtMy4wNzMtNi45MDl2LTQ3LjcxOGMwLTAuNDA3LDAuMDI3LTAuODE0LDAuMDgyLTEuMjE4YzEuMDg3LTE0Ljc4OC0zLjYzMi0yOS40MTctMTMuMTU1LTQwLjc4MiAgICBjLTEzLjQ5LTE1LjIyNy0zNi40OS0yMi45NTQtNjguMzgxLTIyLjk1NGMtMzIuMDE4LDAtNTUuMDgyLDcuNzkxLTY4LjU0NSwyMy4xNDVjLTkuNTAyLDExLjI5NC0xNC4xNjksMjUuODc4LTEyLjk5MSw0MC41OTEgICAgYzAuMDU1LDAuNDA0LDAuMDgyLDAuODExLDAuMDgyLDEuMjE4djQ3LjcxOGMwLDIuNjM0LTEuMTE3LDUuMTQ1LTMuMDczLDYuOTA5Yy0zLjI4LDIuODc1LTUuMTY3LDcuMDItNS4xODIsMTEuMzgydjMzICAgIGMwLjAxOSw1LjI1NiwyLjcxNiwxMC4xMzksNy4xNTUsMTIuOTU1YzIuMDM0LDEuMzE3LDMuNDc1LDMuMzc1LDQuMDE4LDUuNzM2YzUuMTgyLDIxLjAyMywxNC42OTcsNDAuNzMxLDI3LjkzNyw1Ny44NjQgICAgYzEuMzg4LDEuNjc4LDIuMTQ5LDMuNzg2LDIuMTU1LDUuOTY0djMwLjE1NGMwLjAwMywxNC40MTMtNy44NzEsMjcuNjc2LTIwLjUyNywzNC41NzNsMCwwbC03My42MDksNDAuMTQ1ICAgIEMxMTMuMDkxLDQ0NC42MjcsMTEyLjc2NCw0NDQuODA5LDExMi40MzYsNDQ1eiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=">
               <div class="media-body">
                  <h5 class="mt-0">Anna</h5>
                  <p> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                  </p>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                  odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                  fringilla. Donec lacinia congue felis in faucibus.
                  <div class="media mt-3">
                     <a class="pr-3" href="#">
                     <img id="leProfil" class="mr-3" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8Y2lyY2xlIHN0eWxlPSJmaWxsOiNBNEMyRjc7IiBjeD0iMjU2IiBjeT0iMjU2IiByPSIyNDYuNjkxIi8+Cgk8ZWxsaXBzZSBzdHlsZT0iZmlsbDojRTNFN0YyOyIgY3g9IjI0Mi4wMzYiIGN5PSIyNTYiIHJ4PSIyMzIuNzI3IiByeT0iMjQ2LjY5MSIvPgoJPHBhdGggc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIGQ9Ik0yNTYsNTAyLjY5MWMyLjQxLDAsNC43OTItMC4xMTQsNy4xODUtMC4xODJDMTM3Ljc5Nyw0OTguNjk3LDM3LjIzNiwzODkuODM0LDM3LjIzNiwyNTYgICBTMTM3Ljc5NywxMy4zMDMsMjYzLjE4NSw5LjQ5MWMtMi4zOTMtMC4wNjgtNC43NzYtMC4xODItNy4xODUtMC4xODJDMTE5Ljc1Niw5LjMwOSw5LjMwOSwxMTkuNzU2LDkuMzA5LDI1NiAgIFMxMTkuNzU2LDUwMi42OTEsMjU2LDUwMi42OTFMMjU2LDUwMi42OTF6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojN0ZBQ0ZBOyIgZD0iTTE4Mi41NzUsMzk2LjEyM2wtNzMuNjExLDQwLjE1MmMtNC4yMzUsMi4zNi04LjE5Nyw1LjE4MS0xMS44MTMsOC40MSAgIGM5MS40MjgsNzcuMDM1LDIyNC45NDgsNzcuMzc1LDMxNi43NjgsMC44MDhjLTMuOTY1LTMuNDA0LTguMzIxLTYuMzI0LTEyLjk3Ni04LjY5OWwtNzguODE4LTM5LjQwOCAgIGMtMTAuMTg1LTUuMDkyLTE2LjYxOC0xNS41MDItMTYuNjE4LTI2Ljg4OVYzMzkuNTdjMi42NDctMy4wNjYsNS4xMzUtNi4yNjYsNy40NTYtOS41ODYgICBjMTAuNjMzLTE1LjExMywxOC44OTUtMzEuNzYzLDI0LjQ5OC00OS4zNzNjMTAuMzgtMy4xNTcsMTcuNDk2LTEyLjcwNCwxNy41NTQtMjMuNTUzdi0zMy4wMDYgICBjLTAuMDI3LTYuOTkyLTMuMDI3LTEzLjY0My04LjI1MS0xOC4yOTF2LTQ3LjcxOGMwLDAsOS43OTgtNzQuMjYxLTkwLjc2NC03NC4yNjFzLTkwLjc2NCw3NC4yNjEtOTAuNzY0LDc0LjI2MXY0Ny43MTggICBjLTUuMjI0LDQuNjQ4LTguMjI0LDExLjI5OS04LjI1MSwxOC4yOTF2MzMuMDA2YzAuMDI2LDguNDEyLDQuMzI0LDE2LjIzNCwxMS40MDksMjAuNzY3YzUuNDc4LDIyLjQ1OCwxNS42NSw0My41MDIsMjkuODQ3LDYxLjc0NSAgIHYzMC4xNkMxOTguMjQxLDM4MC43MzIsMTkyLjIzMywzOTAuODU0LDE4Mi41NzUsMzk2LjEyM3oiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNBNEMyRjc7IiBkPSJNMzk2LjYyNCw0MzYuMTZsLTEwMy42OTYtMzkuNDA4Yy0xMC4xODUtNS4wOTItMTYuNjE4LTE1LjUwMi0xNi42MTgtMjYuODg5di0zMC45MjcgICBjMi42NDctMy4wNjYsNS4xMzUtNi4yNjYsNy40NTYtOS41ODZjMTAuNjMzLTE1LjExMywxOC44OTUtMzEuNzYzLDI0LjQ5OC00OS4zNzNjMTAuMzgtMy4xNTcsMTcuNDk2LTEyLjcwNCwxNy41NTQtMjMuNTUzdi0zMy4wMDYgICBjLTAuMDI3LTYuOTkyLTMuMDI4LTEzLjY0My04LjI1MS0xOC4yOTF2LTQ3LjcxOGMwLDAsOS43OTgtNzQuMjYxLTkwLjc2NC03NC4yNjFjLTUuOTg2LDAtMTEuNTU1LDAuMjc5LTE2Ljc4NCwwLjc3NSAgIGMwLjYxLDQuODM0LTIuMTAzLDkuNDc2LTYuNjE1LDExLjMxNmMtMTIuMDQsNC45MzktMjMuNjkyLDEwLjc3Ni0zNC44NTgsMTcuNDYxYzQuNjAxLDAuODA1LDcuOTQ5LDQuODExLDcuOTI0LDkuNDgyICAgYzIuMDA2LDM0LjI3Mi05Ljc4NCw3NC41MTItMjAuMzgxLDEwOS41NDNjMC4zMjYsMTMuNzkzLDAuNjI4LDI3LjU4OSwxLjAyOSw0MS4zODJjMS4wMTksMy4xODQsMi4wNDEsNi4zNjYsMy4wNCw5LjU1NCAgIGMxLjkyNSwxLjE3LDMuNDM0LDIuOTE1LDQuMzE1LDQuOTg5YzQuMjUyLDEwLjEyNyw4Ljk5MywyMC41MDYsMTMuMTA2LDMxLjA3NmM1LjYwNi0xLjU2MywxMS40OSwxLjM0MiwxMy42NTgsNi43NDIgICBjMy42MjksMTAuMjQ5LDUuOTAyLDIwLjkyOSw2Ljc2LDMxLjc2OGMwLjQzOSwzLjI1NS0xLjE1Myw2LjQ0OS00LjAxNiw4LjA1OWMtNS4xNzYsMTcuOTI4LTEzLjkxNiwzNC42MjctMjUuNjk3LDQ5LjA5OCAgIGMtMi41NTQsMi40ODgtNi4yMjYsMy40NTMtOS42NzQsMi41NDNjLTMuNDQ3LTAuOTEtNi4xNjUtMy41NjItNy4xNTgtNi45ODZjLTAuNDk5LTEuNzMxLTAuOTA1LTMuNDg3LTEuMjE1LTUuMjYxICAgYy02LjkyMiw0LjExMS0xNC4zNDMsNy43MDMtMjIuMzU0LDEyLjE4OWMtNC4zMDIsMi40MDktMzYuOTg4LDE3LjQxNC0zNy44MDQsMjEuMTM2Yy00LjYxOSwyMS4wNjEsNjkuMjE5LDQ3LjE4MiwxMDYuMjg4LDYxLjk1ICAgYzEwLjA5MywxLjMyMywyMC4yNTgsMi4wMjIsMzAuNDM3LDIuMDkzYzYwLjA4MiwwLDE0MC4wMDctMjEuNSwxODIuNzk3LTU3LjE5OEM0MDUuNjM1LDQ0MS40NTUsNDAxLjI3OSw0MzguNTM1LDM5Ni42MjQsNDM2LjE2ICAgTDM5Ni42MjQsNDM2LjE2eiIvPgoJPGc+CgkJPHBhdGggc3R5bGU9ImZpbGw6IzQyOERGRjsiIGQ9Ik0yNTYsNTEyQzExNC42MTUsNTEyLDAsMzk3LjM4NSwwLDI1NlMxMTQuNjE1LDAsMjU2LDBzMjU2LDExNC42MTUsMjU2LDI1NiAgICBDNTExLjgzNywzOTcuMzE3LDM5Ny4zMTcsNTExLjgzNywyNTYsNTEyeiBNMjU2LDE4LjYxOEMxMjQuODk4LDE4LjYxOCwxOC42MTgsMTI0Ljg5OCwxOC42MTgsMjU2UzEyNC44OTgsNDkzLjM4MiwyNTYsNDkzLjM4MiAgICBTNDkzLjM4MiwzODcuMTAyLDQ5My4zODIsMjU2QzQ5My4yMzIsMTI0Ljk2LDM4Ny4wNCwxOC43NjgsMjU2LDE4LjYxOHoiLz4KCQk8cGF0aCBzdHlsZT0iZmlsbDojNDI4REZGOyIgZD0iTTI1Niw1MTJjLTYwLjMyNS0wLjAzNC0xMTguNzA0LTIxLjM1Mi0xNjQuODU1LTYwLjJjLTIuMDc4LTEuNzUyLTMuMjg2LTQuMzI0LTMuMzA5LTcuMDQxICAgIGMtMC4wMjMtMi43MTcsMS4xNDMtNS4zMDksMy4xOTEtNy4wOTVjNC4xMjgtMy42NzQsOC42NS02Ljg4MiwxMy40ODItOS41NjRsNzMuNjA5LTQwLjE0NWM2LjY3LTMuNjM5LDEwLjgxOS0xMC42MywxMC44MTgtMTguMjI3ICAgIHYtMjYuOTM2Yy0xMy4yOTItMTcuODEzLTIzLjA2My0zNy45OTgtMjguNzkxLTU5LjQ3M2MtNy44OTMtNi40MzYtMTIuNDczLTE2LjA4LTEyLjQ3My0yNi4yNjR2LTMzICAgIGMwLjAyOC04LjEwMiwyLjk1Ni0xNS45MjYsOC4yNTUtMjIuMDU1di00My40NDZjLTEuNjA5LTE5Ljc5OSw0LjY5NC0zOS40MjksMTcuNTI3LTU0LjU5MSAgICBDMTkwLjYwOSw4NC4zOTEsMjE4LjM4Miw3NC40NzMsMjU2LDc0LjQ3M3M2NS4zOTEsOS45MTgsODIuNTQ1LDI5LjQ5MWMxMi44MzMsMTUuMTYyLDE5LjEzNSwzNC43OTIsMTcuNTI3LDU0LjU5MVYyMDIgICAgYzUuMjk4LDYuMTI5LDguMjI3LDEzLjk1Myw4LjI1NSwyMi4wNTV2MzNjMC4wMTYsMTMuMTA3LTcuNTQ5LDI1LjA0LTE5LjQwOSwzMC42MThjLTUuODI1LDE2Ljk2Ny0xNC4wMjQsMzMuMDI0LTI0LjM1NSw0Ny42OSAgICBjLTEuOTkxLDIuODA5LTMuOTE4LDUuMzU1LTUuNzQ1LDcuNjA5djI3LjUyN2MtMC4wMjUsNy44NjYsNC40MjUsMTUuMDYzLDExLjQ3MywxOC41NTZsNzguODE4LDM5LjQwOSAgICBjNS4zMTQsMi43MDEsMTAuMjg1LDYuMDI4LDE0LjgwOSw5LjkwOWMyLjEwNSwxLjc3NCwzLjMxNiw0LjM4OCwzLjMwOSw3LjE0Yy0wLjAwNywyLjc1Mi0xLjIzMiw1LjM2LTMuMzQ2LDcuMTIzICAgIEMzNzMuODY5LDQ5MC45NjYsMzE1Ljg4Niw1MTEuOTY5LDI1Niw1MTJ6IE0xMTIuNDM2LDQ0NWM4NC4zOTIsNjQuMTYsMjAxLjEwOCw2NC41NDMsMjg1LjkxOCwwLjkzNiAgICBjLTAuNTI3LTAuMjgyLTEuMDQ1LTAuNTU1LTEuNTczLTAuODE4bC03OC44MTgtMzkuNDA5Yy0xMy4zNzUtNi42MjYtMjEuODE2LTIwLjI4My0yMS43NjQtMzUuMjA5di0zMC45MjcgICAgYzAtMi4yNTgsMC44Mi00LjQzOSwyLjMwOS02LjEzNmMyLjQzMS0yLjgyOSw0LjcxOC01Ljc3OCw2Ljg1NC04LjgzNmMxMC4wODctMTQuMzQsMTcuOTIzLTMwLjEzOCwyMy4yMzYtNDYuODQ1ICAgIGMwLjkzMy0yLjg4OSwzLjIxNy01LjE0Miw2LjExOC02LjAzNmM2LjQ2LTEuOTgyLDEwLjkwMS03LjkwNywxMC45OTEtMTQuNjY0di0zM2MtMC4wMTUtNC4zNjItMS45MDItOC41MDctNS4xODItMTEuMzgyICAgIGMtMS45NTYtMS43NjQtMy4wNzMtNC4yNzUtMy4wNzMtNi45MDl2LTQ3LjcxOGMwLTAuNDA3LDAuMDI3LTAuODE0LDAuMDgyLTEuMjE4YzEuMDg3LTE0Ljc4OC0zLjYzMi0yOS40MTctMTMuMTU1LTQwLjc4MiAgICBjLTEzLjQ5LTE1LjIyNy0zNi40OS0yMi45NTQtNjguMzgxLTIyLjk1NGMtMzIuMDE4LDAtNTUuMDgyLDcuNzkxLTY4LjU0NSwyMy4xNDVjLTkuNTAyLDExLjI5NC0xNC4xNjksMjUuODc4LTEyLjk5MSw0MC41OTEgICAgYzAuMDU1LDAuNDA0LDAuMDgyLDAuODExLDAuMDgyLDEuMjE4djQ3LjcxOGMwLDIuNjM0LTEuMTE3LDUuMTQ1LTMuMDczLDYuOTA5Yy0zLjI4LDIuODc1LTUuMTY3LDcuMDItNS4xODIsMTEuMzgydjMzICAgIGMwLjAxOSw1LjI1NiwyLjcxNiwxMC4xMzksNy4xNTUsMTIuOTU1YzIuMDM0LDEuMzE3LDMuNDc1LDMuMzc1LDQuMDE4LDUuNzM2YzUuMTgyLDIxLjAyMywxNC42OTcsNDAuNzMxLDI3LjkzNyw1Ny44NjQgICAgYzEuMzg4LDEuNjc4LDIuMTQ5LDMuNzg2LDIuMTU1LDUuOTY0djMwLjE1NGMwLjAwMywxNC40MTMtNy44NzEsMjcuNjc2LTIwLjUyNywzNC41NzNsMCwwbC03My42MDksNDAuMTQ1ICAgIEMxMTMuMDkxLDQ0NC42MjcsMTEyLjc2NCw0NDQuODA5LDExMi40MzYsNDQ1eiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=">
                     </a>
                     <div class="media-body">
                        <h5 class="mt-0">Robin</h5>
                        <p> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </p>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                        purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                        vulputate fringilla. Donec lacinia congue felis in faucibus.
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <a class="flex-sm-fill text-sm-left nav-link" href="#list-item-5">Retourner haut de page</a>
      <section>
         <div class="container">
         <div class="row hi-de3">
         <form class="col-md-12 col-xs-12 mx-auto">
         <legend>Commentaires</legend>
         <div class="form-group espacement-form">
            <label for="texte">Titre </label>
            <input id="text" type="text" class="form-control">
         </div>
         <div id="whiteSpace"class="form-group mb-5">
            <label for="textarea">Description </label>
            <textarea id="textarea" type="textarea" class="form-control "></textarea>
         </div>
      </section>
      <!-- Footer -->
      <?php 
         include('inc/footer.php');
            ?>
      <!--BX SLIDER-->
      <!-- Footer -->
      <!-- POPPER -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
         crossorigin="anonymous"></script>
      <!--BOOTSTRAP-->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
         crossorigin="anonymous"></script>
      <script src="js/script.js"></script> 
      <script>$(document).ready(function(){
         $("i#hi-de").click(function(){
           $("div.hi-de").toggle();
         });
         });
         $(document).ready(function(){
         $("i#hi-de1").click(function(){
           $("div.hi-de1").toggle();
         });
         });
         $(document).ready(function(){
         $("i#hi-de2").click(function(){
           $("div.hi-de2").toggle();
         });
         });
         $(document).ready(function(){
         $("i#hi-de3").click(function(){
           $("div.hi-de3").toggle();
         });
         });
      </script>
   </body>
</html>