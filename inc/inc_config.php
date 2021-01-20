<?php
    session_start();  // Ouverture de $_SESSION
    if( !isset($_SESSION['user']) && $page != 'login' &&  $page != 'signup'){
       // header('Location: login.php');
    }

    define('WEBSITE_NAME', 'My Blog');
    date_default_timezone_set('Europe/Berlin');
    ini_set('display_errors', 1);
    error_reporting(E_ALL);  // Same as: ini_set('error_reporting', E_ALL);

    // Création de variables pour des soucis de lecture / modification
    $sql_host = "localhost";
    $sql_admin = "root";
    $sql_password = "";
    $sql_bdd = "myblog";

// Méthode 1 en MYSQLI :
//    define("MYSQL_CONN_ERROR", "Unable to connect to database.");
//     // Ensure reporting is setup correctly
//     mysqli_report(MYSQLI_REPORT_STRICT);
//     // Connect function for database access
//    try {
//       $mysqli = new mysqli($sql_host, $sql_admin, $sql_password, $sql_bdd);
//       $mysqli->set_charset("utf8");
//    } catch (Exception $e) {
//       echo $e->errorMessage();
//    }



// Méthode 2 en MYSQLI :
// Connexion au Serveur SQL
 $db= mysqli_connect($sql_host, $sql_admin, $sql_password) or die("Impossible de se connecter au serveur de la BDD.");
// Choix de la BDD dans le serveur SQL
 mysqli_select_db($db, $sql_bdd) or die("Impossible de sélectionner la BDD.");
 mysqli_set_charset($db, 'utf8');

// Fichier inc_tools.php qui nous permettra d'inclure des fonctions ou codes tiers
// include('inc/inc_tools.php');






// Récupérer tous les articles
function allArticlesDisplay(){
    global $db;
    $sql_request = "SELECT id, titre_article, image_url, contenu_article FROM articles ORDER BY publish_date_article DESC";
    if ($sql_article = mysqli_query( $db, $sql_request)) {
        while ($row=mysqli_fetch_object($sql_article)) {
        ?>
            
            <div class="col-md-4 col-xs-12 mx-auto">
                  <img id="image1" src="img/elAppartement.jpg" alt="" height="220" width="275"></br>
                  <span class="tag">Du 25/01/2019 au 01/02/2019</span>
                  <hr style="margin-top:64px; width:120%;">
               </div>
               <div class="col-md-8 col-xs-12 mx-auto rapprochement">
                  <h4>Description</h4>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia sint earum
                     molestias saepe cumque facere blanditiis nobis numquam totam itaque
                     alias voluptatum eius dolore, labore 
                  </p>
               
                  <p><?php $contentlength = strlen($row->contenu_article);
                      echo(substr($row->contenu_article, 0 , 89)); ?>
                     <?php if($contentlength > 30){
                    echo '...';
                }
                ?>
                </p>
                     
                    
                     <div class="iconeElement"><img class="iconeEuro" src="https://img.icons8.com/ios/50/000000/price-tag-euro.png">
                     <a href="plusInfos.php"><img class="information1" src="https://img.icons8.com/metro/52/000000/about.png"></a>
                  </div>
                  <p class="thePrice">190€/semaine <a id="plusInfos" href="plusInfos.php">+ d'information</a>
                     <a class="btn btn-primary btn-lg btnReservation" href="plusInfos.php" role="button">Réserver</a>
                     <hr style=" width:120%;">
               </div>
               
               



        <?php
        }
        $sql_article->free();
    }
// $mysqli->close();
}

?>
