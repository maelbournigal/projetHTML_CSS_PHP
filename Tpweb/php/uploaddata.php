<?php 
$dossier = '../upload/'; /*on spécifie le chemin d'accès du fichier pour la variable dossier*/
$fichier = basename($_FILES['mon_fichier']['name']); /*variable d'environnement $_File qui récupère le nom du fichier*/
$taille_maxi =2097152; /* taille du fichier en octets = 2MO dans ce cas 
(car 1 048 576 octets = 1MO = 2^20 octets), on utilise les bases de 2 */
$taille = filesize($_FILES['mon_fichier']['tmp_name']); /*utilisation de la variable d'environnement pour récupérer le chemin temporaire du fichier*/
$nomfichier=$_POST['titrefichier'];  /* on récupère les données du titre du fichier */
$descriptionfichier=$_POST['descriptionfichier']; /* variable qui récupère les données dans le text area utilisé pour la description du fichier */

	if(move_uploaded_file($_FILES['mon_fichier']['tmp_name'], $dossier . $fichier)) //on utilise la variable d'environnement pour récupérer le chemin temporaire du fichier,c'est là ou il est pour l'instant. Puis on l'upload vers le chemin d'accès spécifié dans la variable dossier, et on lui donne pour nom, son nom d'origine.
     {
          echo 'Upload du fichier '."'".$fichier."'".' effectué avec succès !'; /* on récupère les données du titre du fichier pour afficher quel fichier à été envoyé*/
          echo '<br />'; /* saut de ligne */
          echo "description : ";
          echo '<br />';
          echo $descriptionfichier; /* on affiche la description du fichier */
     }
     elseif($taille>$taille_maxi)//Sinon (la fonction renvoie FALSE).
     {
          echo "Echec de l'upload !";
          echo '<br />';
          echo " le fichier est trop volumineux";  
     }
     else{
     	echo "echec de l'upload fichier trop gros";
     }    