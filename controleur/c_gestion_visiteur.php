<?php
  if(isset($_REQUEST['action'])){
    $action = $_REQUEST['action'];
  }

  switch($action){
    case 'consultervo':
      {
        $lesVoitures = $connexionGarage->getVoitures();
        //$lesVoitures = json_encode($lesVoitures);
        

        $lesHoraires = $connexionGarage->getHoraires();

        include('vues/header.php');
        include('vues/vehicules_occasion.php');
        include('./vues/footer.php');
        break;
      }
    case 'consulterqsn':
      {
        $lesHoraires = $connexionGarage->getHoraires();

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

    case 'consulterfcv':
      {
        $voitureComment = $connexionGarage->getVoitureComment($_REQUEST['marque'], $_REQUEST['modele'], $_REQUEST['annee']);
        $marque = $_REQUEST['marque'];
        $modele = $_REQUEST['modele'];
        $annee = $_REQUEST['annee'];

        $voitureInfo = array(
          'marque' => $marque,
          'modele' => $modele,
          'annee' => $annee
        );

        include('./vues/formcontactvoiture.php');
        break;
      }

    case 'sendmail':{
      // Multiple recipients
      $to = 'patte.chloe.cp@gmail.com'; // note the comma

      // Subject
      $subject = $_POST['subject'];

      // Message
      $message = "
      <html>
      <head>
        <title>".$_POST['subject']."</title>
      </head>
      <body>
        <p>Sujet : ".$_POST['message']."</p>
        <p>Nom : ".$_POST['message']."</p>
        <p>Prénom : ".$_POST['message']."</p>
        <p>Mail : ".$_POST['message']."</p>
        <p>Tel : ".$_POST['message']."</p>
        <p>Message : ".$_POST['message']."</p>

      </body>
      </html>
      ";

      // To send HTML mail, the Content-type header must be set
      $headers[] = 'MIME-Version: 1.0';
      $headers[] = 'Content-type: text/html; charset=iso-8859-1';

      // Additional headers
      $headers[] = 'From: Birthday Reminder <noreply@vparrot.com>';

      if (mail($to, $subject, $message, implode("\r\n", $headers))) {
          echo "E-mail envoyé avec succès";
      } else {
          echo "Échec de l'envoi de l'e-mail";
      }
      
      include('./vues/formcontactvoiture.php');
      break;
    }

    case 'consultercomment':
      {
        include('./vues/comentary.php');
        break;
      }

    case 'consultervoitures':
      {
        $lesHoraires = $connexionGarage->getHoraires();

        $voiture = $connexionGarage->getVoiture($_REQUEST['id']);
        include('./vues/header.php');
        include('./vues/slider-voitures.php');
        include('./vues/voitures.php');
        include('./vues/footer.php');
        break;
      }
    
    case 'majstock':{
      $lesVoitures = $connexionGarage->getVoituresByParam($_POST['prixMin'], $_POST['prixMax'], $_POST['anneeMin'], $_POST['anneeMax'], $_POST['kmMin'], $_POST['kmMax']);
      //$lesVoitures = json_encode($lesVoitures);      

      $lesHoraires = $connexionGarage->getHoraires();

      include('vues/header.php');
      include('vues/vehicules_occasion.php');
      include('./vues/footer.php');
      break;
    }

    case 'sauvegardercommentaire':{
      $saveComment = $connexionGarage->saveComment($_POST['motif'], $_POST['nom'], $_POST['prenom'],$_POST['email'],$_POST['note'],$_POST['message']);

      if(is_array($connexionGarage->getCommentaires())){
        $lesCommentaires = $connexionGarage->getCommentaires();
      }else {
        $lesCommentaires = [];
      }

      include('./vues/comentary.php');
      break;
    }
      
    default:
      {
        $lesHoraires = $connexionGarage->getHoraires();

        include('vues/header.php');
        include('vues/footer.php');
        break;}
  }