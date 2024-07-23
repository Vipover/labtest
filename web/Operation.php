<?php
//une deuxième variante en utilisant une base de données pour stocker 
// les données + un tableau html pour afficher ces données:
// dans ce script, on verifie le type de l'operation selectionnée 
// par l'utilisateur:
$bouton = $_POST['Submit'];
if($bouton == "Add")
{
    include("Add.php");
}
if($bouton == "Update")
{
    include("Update.php");
}
if($bouton == "Delete")
{
    include("Delete.php");
}
if($bouton == "Select")
{
    include("Select.php");
}