<?php
include ("Connect.php");
$matricule = $_POST['lmatricule'];
$deletesql="DELETE FROM etudiant WHERE matricule='$matricule'";
$selectsql="select * from etudiant where matricule='$matricule'";
$res = mysqli_query($conn,$selectsql);   
if ($row = Mysqli_Fetch_Assoc($res)) {
	$nom = $row['nom'];
	$prenom = $row['prenom'];
$result = mysqli_query($conn,$deletesql);
if($result ==TRUE)
			echo "L'étudiant ". $nom. " ".$prenom." ".
			" ayant la matricule ". $matricule. " a été supprimé avec succés.";
		else
		{
			echo "L'étudiant ". $nom. " ".$prenom." ,".
			" ayant la matricule ". $matricule. ",n'a pas été supprimé.";
		}
}
else
{
	echo "L'étudiant ayant la matricule ". $matricule. ",n'existe pas.";
}
?>
