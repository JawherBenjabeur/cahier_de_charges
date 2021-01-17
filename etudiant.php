<?php
    $nom_eleve = $_GET["nom"];
    $prenom_eleve = $_GET["prenom"];
    $sexe_eleve = $_GET["sexe"];
    $date_eleve = $_GET["date"];
    $telephone_eleve = $_GET["telephone"];


    $servername = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "eleves";

    

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO eleve (nom_eleve,prenom_eleve,sexe_eleve,date_eleve,telephone_eleve)
  VALUES ('$nom_eleve', '$prenom_eleve', '$sexe_eleve', '$date_eleve', '$telephone_eleve')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "etudiant ajoutee";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

    
    ?>

    