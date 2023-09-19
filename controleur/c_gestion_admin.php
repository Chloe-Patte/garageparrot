<?php
  if(isset($_REQUEST['action'])){
    $action = $_REQUEST['action'];
  }

  switch($action){
    case 'consulteradmin':
      {
        include('vues/connexion-admin.php');
        break;
      }
    case 'connexion':
      {
        if($_SESSION["logged"]){
          include('vues/dashboard/dashboard.php');
        }else{
          if(isset($_POST['email'])){
            $mail = $_POST['email'];
          }else{
            $mail = "";
          }
   
          if(isset($_POST['mdp'])){
            $mdp = $_POST['mdp'];
          }else{
            $mdp = "";
          }
  
          $mdpHash = password_hash($mdp , PASSWORD_DEFAULT);
  
          $res = $connexionGarage->getEmployeByMail($mail);
          
          if(isset($res[0]['MDP'])){
            $leMotDePasseBD = $res[0]['MDP'];
            $resultatReq = password_verify($mdp, $leMotDePasseBD);
            if($resultatReq == 1){
              //$isadmin = $res[0]['ADMINISTRATEUR'];
              $message = "Vous êtes connecté au dashboard de votre concession VPARROT Automobiles";
              if($res[0]['ADMINISTRATEUR'] == true){
                $_SESSION["admin"] = true;
                $_SESSION["logged"] = true;
              }else {
                $_SESSION["logged"] = true;
              }
              include('vues/dashboard/dashboard.php');
            }else{
              if($resultatReq == 0){
                $message = "Erreur lors de la connexion, EMAIL ou Mot de passe invalide.";
              }else{
                $message = "";
              }
              include('vues/connexion-admin.php');
            }
          }else{
            $leMotDePasseBD = "";
            $message = "";
            include('vues/connexion-admin.php');
          }
        }
        break;
      }

    case 'employe':
      {
        $lesEmployes = $connexionGarage->getEmployes();
        ?><div class="inline-flex"><?php
          include('vues/dashboard/dashboard.php');
          include('vues/dashboard/employe.php')
        ?></div><?php
        
        break;
      }

    case 'supprimeremploye':
      {
        $lesEmployes = $connexionGarage->deleteEmploye($_POST['id']);

        $lesEmployes = $connexionGarage->getEmployes();
        ?><div class="inline-flex"><?php
          include('vues/dashboard/dashboard.php');
          include('vues/dashboard/employe.php')
        ?></div><?php
        
        break;
      }
    
    case 'formaddemploye':
      {
        include('vues/dashboard/addemploye.php');
        break;
      }
    
    case 'ajouteremploye':
      {
        $add = $connexionGarage->addEmploye($_POST['nom'], $_POST['prenom'], $_POST['email'],$_POST['mdp']);

        $lesEmployes = $connexionGarage->getEmployes();
        ?><div class="inline-flex"><?php
          include('vues/dashboard/dashboard.php');
          include('vues/dashboard/employe.php')
        ?></div><?php

        break;
      } 

    case 'commentaire':
      {
        
        if(is_array($connexionGarage->getCommentaires())){
          $lesCommentaires = $connexionGarage->getCommentaires();
        }else {
          $lesCommentaires = [];
        }
        ?><div class="inline-flex"><?php
          include('vues/dashboard/dashboard.php');
          include('vues/dashboard/commentaires.php')
        ?></div><?php

        break;
      }

    case 'sauvegardercommentaire':
      {
        $saveComment = $connexionGarage->saveComment($_POST['motif'], $_POST['nom'], $_POST['prenom'],$_POST['email'],$_POST['note'],$_POST['message']);

        if(is_array($connexionGarage->getCommentaires())){
          $lesCommentaires = $connexionGarage->getCommentaires();
        }else {
          $lesCommentaires = [];
        }

        ?><div class="inline-flex"><?php
          include('vues/dashboard/dashboard.php');
          include('vues/dashboard/commentaires.php')
        ?></div><?php

        break;
      }
    
    case 'formaddcommentaire':
      {
          include('vues/dashboard/addcomm.php');
          break;
    }

    case 'ajoutercommentaire':
      {
        $add = $connexionGarage->addCommentaire($_POST['motif'], $_POST['nom'], $_POST['prenom'], $_POST['email'],$_POST['note'], $_POST['message']);

        print_r($add . "vv");

        if(is_array($connexionGarage->getCommentaires())){
          $lesCommentaires = $connexionGarage->getCommentaires();
        }else {
          $lesCommentaires = [];
        }
        ?><div class="inline-flex"><?php
          include('vues/dashboard/dashboard.php');
          include('vues/dashboard/commentaires.php');
        ?></div><?php

        break;
      } 

      case 'voiture':
        {
          
          if(is_array($connexionGarage->getVoitures())){
            $lesVoitures = $connexionGarage->getVoitures();
          }else {
            $lesVoitures = [];
          }
          ?><div class="inline-flex"><?php
            include('vues/dashboard/dashboard.php');
            include('vues/dashboard/liste-voitures.php')
          ?></div><?php
  
          break;
        }

    case 'logout':
      {
        session_destroy();
        include('vues/connexion-admin.php');
        break;
      }
    }

?>