<?php
  if(isset($_REQUEST['action'])){
    $action = $_REQUEST['action'];
  }

  switch($action){
    case 'consultervo':
      {
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