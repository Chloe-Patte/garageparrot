<?php
  if(isset($_REQUEST['action'])){
    $action = $_REQUEST['action'];
  }

  switch($action){
    case 'consultervo':
      {
        if(is_array($connexionGarage->getVoitures())){
          $lesVoitures = $connexionGarage->getVoitures();
        }else {
          $lesVoitures = [];
        }
        include('vues/header.php');
        include('vues/vehicules_occasion.php');
        include('./vues/footer.php');
        break;
      }
    case 'consulterqsn':
      {
        include('./vues/header.php');
        include('./vues/qui_sommes_nous.php');
        include('./vues/footer.php');
        break;
      } 
    case'consulterfdc':
      {
        include('./vues/formulaire-contact.php');
        break;
      }
    case 'consultercomment':
      {
        include('./vues/comentary.php');
        break;
      }

    case 'consultervoitures':
      {
        $voiture = $connexionGarage->getVoiture($_REQUEST['id']);
        include('./vues/header.php');
        include('./vues/slider-voitures.php');
        include('./vues/voitures.php');
        include('./vues/footer.php');
        break;
      }

    default:
      {include('vues/header.php');
        include('vues/footer.php');
        break;}
  }