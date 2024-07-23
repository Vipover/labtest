<?php 
include ("Connect.php");

$matricule = $_POST['lmatricule'];
$nom = $_POST['lnom'];
$prenom = $_POST['lprenom'];
$adresse = $_POST['ladresse'];
$filiere = $_POST['lfiliere'];
$date_naissance = $_POST['ldate_naissance'];
$email = $_POST['lemail'];

$sql1 = "select matricule from etudiant where matricule = '$matricule' ";
$res1 = Mysqli_Query($conn,$sql1);

$existe=false;
while ($existe == false and $row = Mysqli_Fetch_Assoc($res1)) {
    
	if ($matricule == $row['matricule']) {
        echo "matricule déjà existante!!!";
		$existe=true;
    }
}

if($existe==false) {
	$sql = "insert into etudiant (matricule, nom, prenom, adresse, ".
	" date_naissance, email, filiere) values ".
	"('$matricule','$nom','$prenom','$adresse','$date_naissance','$email','$filiere')";
		$result = Mysqli_Query($conn,$sql);
		if($result ==TRUE)
			echo "Bonjour cher étudiant ". $nom. " ".$prenom." ,".
			" ayant la matricule ". $matricule. ",vous êtes inscrit.";
		else
		{
			echo "Bonjour cher étudiant ". $nom. " ".$prenom." ,".
			" ayant la matricule ". $matricule. ",vous n'êtes pas inscrit.";
		}
}
?>