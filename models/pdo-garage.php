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
}


?>