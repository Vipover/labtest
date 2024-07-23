<?php
include ("Connect.php");
$matricule = $_POST['lmatricule'];
$nom = $_POST['lnom'];
$prenom = $_POST['lprenom'];
$adresse = $_POST['ladresse'];
$filiere = $_POST['lfiliere'];
$date_naissance = $_POST['ldate_naissance'];
$email = $_POST['lemail'];

$updatesql="UPDATE etudiant SET ".
	"nom='$nom',prenom='$prenom', adresse='$adresse', ".
	"filiere='$filiere',date_naissance='$date_naissance', email='$email' ".
	" WHERE matricule='$matricule'";
$result = mysqli_query($conn,$updatesql);

if($result ==TRUE)
			echo "Bonjour cher étudiant ". $nom. " ".$prenom." ,".
			" ayant la matricule ". $matricule. ",tes informations ".
			" ont été modifiées.";
		else
		{
			echo "Bonjour cher étudiant ". $nom. " ".$prenom." ,".
			" ayant la matricule ". $matricule. ",tes informations ".
			" n'ont pas été modifiées.";
		}

?>