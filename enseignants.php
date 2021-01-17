<?php
    $nom_ens = $_GET["nom"];
    $prenom_ens = $_GET["prenom"];
    $sexe_ens = $_GET["sexe"];
    $date_ens = $_GET["date"];
    $grade_ens = $_GET["grade"];
    $adresse_ens = $_GET["adresse"];
    $telephone_ens = $_GET["telephone"];


    $servername = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "eleves";

    

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO enseignants (nom_ens, prenom_ens, sexe_ens, date_ens, grade_ens, adresse_ens, telephone_ens)
  VALUES ('$nom_ens', '$prenom_ens', '$sexe_ens', '$date_ens', '$grade_ens', '$adresse_ens', '$telephone_ens')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "enseignant ajoutee";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

    
    ?>

    