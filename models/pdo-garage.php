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

<<<<<<< Updated upstream
=======
  

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

    $request = "UPDATE `EQUIPEMENTS` SET `LIBELLE` = 
    CASE 
        WHEN `ID` = :id1 THEN :equip1
        WHEN `ID` = :id2 THEN :equip2
        WHEN `ID` = :id3 THEN :equip3
        WHEN `ID` = :id4 THEN :equip4
        WHEN `ID` = :id5 THEN :equip5
        WHEN `ID` = :id6 THEN :equip6
        WHEN `ID` = :id7 THEN :equip7
        WHEN `ID` = :id8 THEN :equip8
        WHEN `ID` = :id9 THEN :equip9
        WHEN `ID` = :id10 THEN :equip10
    END
    WHERE `ID` IN (:id1, :id2, :id3, :id4, :id5, :id6, :id7, :id8, :id9, :id10);";

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

>>>>>>> Stashed changes
  public static function getVoiture($id){
    $request = "SELECT* FROM VOITURES WHERE ID = $id";
    $prepa = self::$monPdo->prepare($request);
    $prepa->execute();
    $result = $prepa->fetchAll(\PDO::FETCH_ASSOC);
    return $result[0];
    
  }
}


?>