<?php 
include("Connect.php");
$matricule = $_POST['lmatricule'];

$sql1 = "SELECT matricule FROM etudiant WHERE matricule = '$matricule'";
$res1 = mysqli_query($conn, $sql1);

$existe = false;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Consultation</title>
    <style>
        .btn-text-right {
            text-align: center;
        }
    </style>
</head>
<body>
<?php
while ($row = mysqli_fetch_assoc($res1)) {
            if ($matricule == $row['matricule']) {
                $existe = true;
                break;
            }
        }
?>

<?php if ($existe): ?>
    <table border="2">
        <tr>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Filière</th>
            <th>Date de Naissance</th>
            <th>Email</th>
        </tr>

        <?php  
        if ($existe) {
            $sql2 = "SELECT * FROM etudiant WHERE matricule = '$matricule'";
            $res2 = mysqli_query($conn, $sql2);
			// affiche
            while ($row = mysqli_fetch_assoc($res2)) {
                echo "<tr><td>" . $row['matricule'] . "</td><td>" . $row['nom'] .
                "</td><td>" . $row['prenom'] . "</td><td>" . $row['adresse'] .
                "</td><td>" . $row['filiere'] . "</td><td>" . $row['date_naissance'] .
                "</td><td>" . $row['email'] . "</td></tr>";
            }
        }
        ?>
    </table>
	<?php else: ?>
    <p>Cette matricule n'est pas existante.</p>
<?php endif; ?>

</body>
</html>