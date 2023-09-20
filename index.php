<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage V.Parrot</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#d22027',
          }
          }
        }
    }
    </script>
    <link rel="stylesheet" href="./style/flickity.css" media="screen">
    <link rel="stylesheet" href="./style/slider.css">
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/0c39fbe230.js" crossorigin="anonymous"></script>
    <script src="./scripts/flickity.js"></script>
    <script src='./scripts/testimonials.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    
  </head>
  
  <?php
    session_start();
    require_once("models/pdo-garage.php");
    $connexionGarage = pdoGarage::getPdoGarage();
    if(!isset($_REQUEST['controleur'])){
      $controleur = 'accueil';
    }else{
      $controleur = $_REQUEST['controleur'];
    }

    switch($controleur){
      case 'accueil':
        {
          $lesHoraires = $connexionGarage->getHoraires();
          if(is_array($connexionGarage->getCommentaire())){
            $lesCommentaires = $connexionGarage->getCommentaire();
          }else {
            $lesCommentaires = [];
          }
          include('./vues/header.php');
          include('./vues/slider-accueil.php');
          include('./vues/cards.php');
          include('./vues/testimonials.php');
          include('./vues/footer.php');
          break;}
      case 'gestionvisiteur':
        {
          include('./controleur/c_gestion_visiteur.php');
          break;}
      case 'gestionadmin':
        {
          include('./controleur/c_gestion_admin.php');
          break;}
    }
  ?>
 
</html>