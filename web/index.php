
<?php include ("Connect.php") ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaire de Gestion d'un étudiant</title>
	<style>
		
		#ldate{
			float: left;
		}
		#lfiliere{
			float: left;
		}
		body{
			float: center;
		}

	</style>
</head>
<body>
<div align=center >
    <h1>Formulaire de Gestion d'un étudiant</h1>
    <form action="Operation.php" method="post">
<table border="2" align="center">
  <tr>
    <td>Matricule</td>
    <td><input type="text" id="fMatricule" name="lmatricule" ></td>
    
  </tr>
  <tr>
    <td>Nom</td>
    <td><input type="text" id="lname" name="lnom" ></td>
    
  </tr>
  <tr>
    <td>Prénom</td>
    <td><input type="text" id="lSurName" name="lprenom"><br></td>
  </tr>
  <tr>
    <td>Adresse</td>
    <td><input type="text" id="lAdresse" name="ladresse"></td>
  </tr>
  <tr>
    <td>Filiere</td>
    <td>
      <?php  
        $sql = "SELECT * FROM filiere";
        $res = mysqli_query($conn, $sql);
      ?>
      <select name="lfiliere" id="lfiliere">
      <?php 
        while ($row = mysqli_fetch_assoc($res)) { ?>
        <option value="<?php echo $row['NomF']; ?>">
      <?php echo $row['NomF']; ?>
      </option>
    <?php } ?>        
</select>     
</td>  
  </tr>
  <tr>
    <td>Date de Naissance</td>
    <td><input type="date" id="ldate" name="ldate_naissance"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="Email" id="lEmail" name="lemail"></td>
  </tr>
</table><br>
<input type="submit" name="Submit" value="Add">
<input type="submit" name="Submit" value="Update">
<input type="submit" name="Submit" value="Delete">
<input type="submit" name="Submit" value="Select">
</form>
<div>
</body>
</html>