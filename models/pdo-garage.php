<?php

class pdoGarage {
  private static $monPdo;
  private static $monPdoGarage;

  private function __construct(){
    self::$monPdo = new PDO ('mysql:host=localhost;dbname=GARAGEVPARROT','root','root');
    self::$monPdo->query("SET CHARACTER SET utf8");
  }

  public function __destruct(){
    self::$monPdo = null;
  }
 
  public static function getPdoGarage(){
    if(self::$monPdoGarage == null){
      self::$monPdoGarage = new pdoGarage();
    }
    return self::$monPdoGarage;
  }

  public static function getEmployeByMail($mail){
    $request = "SELECT EMAIL, MDP, ADMINISTRATEUR FROM EMPLOYES WHERE EMAIL='".$mail."'";
    $prepa = self::$monPdo->prepare($request);
    $prepa->execute();
    $result = $prepa->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
  }

  public static function getEmployes(){
    $request = "SELECT * FROM EMPLOYES";
    $prepa = self::$monPdo->prepare($request);
    $prepa->execute();
    $result = $prepa->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
  }

  public static function deleteEmploye($id){
    $request = "DELETE FROM EMPLOYES WHERE ID='".$id."'";
    $prepa = self::$monPdo->prepare($request);
    $prepa->execute();
    $result = $prepa-> rowCount();
    return $result;
  }

  public static function addEmploye($nom, $prenom, $mail, $mdp){
    $request = "INSERT INTO EMPLOYES VALUES (:id, :nom, :prenom, :mail, :mdp, :administrateur)";
    $prepa = self::$monPdo->prepare($request);

    $prepa->bindValue(':id', null);
    $prepa->bindValue(':nom',$nom);
    $prepa->bindValue(':prenom',$prenom);
    $prepa->bindValue(':mail',$mail);
    $prepa->bindValue(':mdp',$mdp);
    $prepa->bindValue(':administrateur', 0);
    $prepa->execute();
    $result = $prepa-> rowCount();
    return $result;
  }

  public static function getCommentaires(){
    $request = "SELECT * FROM COMMENTAIRES";
    $prepa = self::$monPdo->prepare($request);
    $prepa->execute();
    $result = $prepa->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
  }

  public static function saveComment ($motif, $nom, $prenom, $email, $note, $message) {
    $request = "INSERT INTO COMMENTAIRES VALUES (:id, :motif, :nom, :prenom, :email, :note, :message, :publie)";
    $prepa = self::$monPdo->prepare($request);

    $prepa->bindValue(':id', null);
    $prepa->bindValue(':motif', $motif);
    $prepa->bindValue(':nom', $nom);
    $prepa->bindValue(':prenom', $prenom);
    $prepa->bindValue(':email', $email);
    $prepa->bindValue(':note', $note);
    $prepa->bindValue(':message', $message);
    $prepa->bindValue('publie', 0);

    $prepa->execute();
    $result = $prepa->rowcount();
    return $result;
  }

  public static function addCommentaire($motif, $nom, $prenom, $mail, $note, $message){
    $request = "INSERT INTO COMMENTAIRES VALUES (:id, :motif, :nom, :prenom, :mail, :note, :msg, :publie)";
    $prepa = self::$monPdo->prepare($request);

    $prepa->bindValue(':id', null);
    $prepa->bindValue(':motif', $motif);
    $prepa->bindValue(':nom', $nom);
    $prepa->bindValue(':prenom', $prenom);
    $prepa->bindValue(':mail', $mail);
    $prepa->bindValue(':note', $note);
    $prepa->bindValue(':msg', $message);
    $prepa->bindValue(':publie', 1);

    $prepa->execute();

    $result = $prepa-> rowCount();
    return $result;
  }

  public static function getVoitures(){
    $request = "SELECT * FROM VOITURES";
    $prepa = self::$monPdo->prepare($request);
    $prepa->execute();
    $result = $prepa->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
  }

  public static function getLastVoiture(){
    $request = "SELECT ID FROM VOITURES ORDER BY ID DESC LIMIT 1;";
    $prepa = self::$monPdo->prepare($request);
    $prepa->execute();
    $result = $prepa->fetchColumn();
    return $result;
  }


  public static function addVoiture($marque, $modele, $annee, $energie, $trans, $prix, $motor, $km, $porte, $place, $couleur, $cvfisc, $cvdin, $equip1, $equip2, $equip3, $equip4, $equip5, $equip6, $equip7, $equip8, $equip9, $equip10){
    $connexionGarage = pdoGarage::getPdoGarage();
    $request = "INSERT INTO `VOITURES` (`ID`, `MARQUE`, `MODELE`, `ANNEE`, `ENERGIE`, `TRANSMISSION`, `MOTORISATION`, `PRIX`, `KILOMETRAGE`, `PORTES`, `PLACES`, `COULEUR`, `CVFISC`, `CVR`) 
      VALUES (:id, :marque, :modele, :annee, :energie, :trans, :motor, :prix, :km, :porte, :place, :couleur, :cvfisc, :cvdin);";

    $prepa = self::$monPdo->prepare($request);

    $prepa->bindValue(':id', null);
    $prepa->bindValue(':marque', $marque);
    $prepa->bindValue(':modele', $modele);
    $prepa->bindValue(':annee', $annee);
    $prepa->bindValue(':energie', $energie);
    $prepa->bindValue(':trans', $trans);
    $prepa->bindValue(':motor', $motor);
    $prepa->bindValue(':prix', $prix);
    $prepa->bindValue(':km', $km);
    $prepa->bindValue(':porte', $porte);
    $prepa->bindValue(':place', $place);
    $prepa->bindValue(':couleur', $couleur);
    $prepa->bindValue(':cvfisc', $cvfisc);
    $prepa->bindValue(':cvdin', $cvdin);

    $prepa->execute();

    $result = $prepa-> rowCount();

    $resReqGet = $connexionGarage->getLastVoiture();

    $request = "INSERT INTO `EQUIPEMENTS` (`ID`, `LIBELLE`, `VOITURE_ID`) VALUES (NULL, :equip1, :id),(NULL, :equip2, :id),(NULL, :equip3, :id),(NULL, :equip4, :id),(NULL, :equip5, :id),(NULL, :equip6, :id),(NULL, :equip7, :id),(NULL, :equip8, :id),(NULL, :equip9, :id),(NULL, :equip10, :id);";

    $prepa = self::$monPdo->prepare($request);

    $prepa->bindValue(':id', $resReqGet);
    $prepa->bindValue(':equip1', $equip1);
    $prepa->bindValue(':equip2', $equip2);
    $prepa->bindValue(':equip3', $equip3);
    $prepa->bindValue(':equip4', $equip4);
    $prepa->bindValue(':equip5', $equip5);
    $prepa->bindValue(':equip6', $equip6);
    $prepa->bindValue(':equip7', $equip7);
    $prepa->bindValue(':equip8', $equip8);
    $prepa->bindValue(':equip9', $equip9);
    $prepa->bindValue(':equip10', $equip10);

    $prepa->execute();

    $result = $prepa-> rowCount();

    return $result;
  }

  public static function updateVoiture($id, $marque, $modele, $annee, $energie, $trans, $prix, $motor, $km, $porte, $place, $couleur, $cvfisc, $cvdin, $equip1, $equip2, $equip3, $equip4, $equip5, $equip6, $equip7, $equip8, $equip9, $equip10){
    $connexionGarage = pdoGarage::getPdoGarage();

    $request = "UPDATE `VOITURES` SET `MARQUE` = :marque, `MODELE` = :modele, `ANNEE` = :annee, `ENERGIE` = :energie, `TRANSMISSION` = :trans, `MOTORISATION` = :motor, `PRIX` = :prix, `KILOMETRAGE` = :km, `PORTES` = :porte, `PLACES` = :place, `COULEUR` = :couleur, `CVFISC` = :cvfisc, `CVR` = :cvdin WHERE `VOITURES`.`ID` = :id;";
    $prepa = self::$monPdo->prepare($request);

    $prepa->bindValue(':marque', $marque);
    $prepa->bindValue(':modele', $modele);
    $prepa->bindValue(':annee', $annee);
    $prepa->bindValue(':energie', $energie);
    $prepa->bindValue(':trans', $trans);
    $prepa->bindValue(':motor', $motor);
    $prepa->bindValue(':prix', $prix);
    $prepa->bindValue(':km', $km);
    $prepa->bindValue(':porte', $porte);
    $prepa->bindValue(':place', $place);
    $prepa->bindValue(':couleur', $couleur);
    $prepa->bindValue(':cvfisc', $cvfisc);
    $prepa->bindValue(':cvdin', $cvdin);
    $prepa->bindValue(':id', $id);

    $prepa->execute();

    $result = $prepa-> rowCount();

    $equipement = $connexionGarage->getEquipement($id);

    print_r($equipement);

    $request = "UPDATE `EQUIPEMENTS` SET `LIBELLE` = :equip10 WHERE `EQUIPEMENTS`.`ID` = $equipement[0]['ID']; 
    UPDATE `EQUIPEMENTS` SET `LIBELLE` = :equip1 WHERE `EQUIPEMENTS`.`ID` = $equipement[1]['ID']; 
    UPDATE `EQUIPEMENTS` SET `LIBELLE` = :equip2 WHERE `EQUIPEMENTS`.`ID` = $equipement[2]['ID']; 
    UPDATE `EQUIPEMENTS` SET `LIBELLE` = :equip3 WHERE `EQUIPEMENTS`.`ID` = $equipement[3]['ID']; 
    UPDATE `EQUIPEMENTS` SET `LIBELLE` = :equip4 WHERE `EQUIPEMENTS`.`ID` = $equipement[4]['ID']; 
    UPDATE `EQUIPEMENTS` SET `LIBELLE` = :equip5 WHERE `EQUIPEMENTS`.`ID` = $equipement[5]['ID']; 
    UPDATE `EQUIPEMENTS` SET `LIBELLE` = :equip6 WHERE `EQUIPEMENTS`.`ID` = $equipement[6]['ID']; 
    UPDATE `EQUIPEMENTS` SET `LIBELLE` = :equip7 WHERE `EQUIPEMENTS`.`ID` = $equipement[7]['ID']; 
    UPDATE `EQUIPEMENTS` SET `LIBELLE` = :equip8 WHERE `EQUIPEMENTS`.`ID` = $equipement[8]['ID']; 
    UPDATE `EQUIPEMENTS` SET `LIBELLE` = :equip9 WHERE `EQUIPEMENTS`.`ID` = $equipement[9]['ID'];";

    $prepa = self::$monPdo->prepare($request);

    $prepa->bindValue(':equip1', $equip1);
    $prepa->bindValue(':equip2', $equip2);
    $prepa->bindValue(':equip3', $equip3);
    $prepa->bindValue(':equip4', $equip4);
    $prepa->bindValue(':equip5', $equip5);
    $prepa->bindValue(':equip6', $equip6);
    $prepa->bindValue(':equip7', $equip7);
    $prepa->bindValue(':equip8', $equip8);
    $prepa->bindValue(':equip9', $equip9);
    $prepa->bindValue(':equip10', $equip10);

    $prepa->execute();

    $result = $prepa-> rowCount();

    return $result;
  }

  public static function deleteVoiture($id){
    $request = "DELETE FROM VOITURES WHERE ID='".$id."'";
    $prepa = self::$monPdo->prepare($request);
    $prepa->execute();

    $request = "DELETE FROM EQUIPEMENTS WHERE VOITURE_ID='".$id."'";
    $prepa = self::$monPdo->prepare($request);
    $prepa->execute();

    $result = $prepa-> rowCount();
    return $result;
  }


  public static function getVoiture($id){
    $request = "SELECT* FROM VOITURES WHERE ID = $id";
    $prepa = self::$monPdo->prepare($request);
    $prepa->execute();
    $result = $prepa->fetchAll(\PDO::FETCH_ASSOC);
    return $result[0];
    
  }
}


?>