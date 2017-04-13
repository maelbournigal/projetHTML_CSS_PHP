<html>
  <head>
    <meta charset="utf-8"> <!--encodage permettant de bien lire les accents et caractères spéciaux-->
    <title>"Contactez-Nous"</title>  <!--Titre de l'onglet sur le navigateur-->
    <link href="../css/cssprojet.css" rel="stylesheet"/> <!-- on lie le css à la page-->
    <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet"> <!--Import de la police Concert One 
    source: google font-->
       <link rel="icon" type="image/png" href="../img/masaje-favicon.png" />
<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="../img/masaje-favicon.png" /><![endif]-->
    <script>
        // script javascript utilisé pour empêcher la saisi d'une simple quote (lors d'une
      //  tel saisi les donnes ne sont pas envoyés)
        // script pris sur internet
         function verifierCaracteres(event) {
            var keyCode = event.which ? event.which : event.keyCode; // crée la variable KeyCode 
            var touche = String.fromCharCode(keyCode); // crée la variable touch
            var champ = document.getElementById('mon_input'); // crée la variable champ 
            var caracteres = "'"; // liste des caractères interdits 
            if (caracteres.indexOf(touche) == -1) {
                champ.value += touche;
            }
        }
    </script>
</head>
<body>
<!--        insertion du header et du menu-->
        <?php include('../headerprojet.html'); include('../menu.html');?>
<!--        carrouselle-->
    <img src="../img/contact.png" alt="image pour contact" title="contact"/>
    <h1 id="contacter">Contactez nous</h1> <!--div utilisez pour le titre en haut de la page-->
       <p id="contactp">Vous voulez profiter de nos services ? Vous avez un projet à réaliser ?<br>N'hésitez pas à nous contacter en remplissant le formulaire ci joint. <br> Vous pouvez également nous contacter par téléphone au 02 47 12 63 19.</p>
        <!--On utilise une div pour que le paragraphe d'introduction de la page
            soit bien placé-->
        <!-- On donne la même classe pour que les bloc soit sur la même ligne, et un id différent
    pour les espacer avec un margin -->
        
<!-- Création du formulaire de contact -->
    <form method="post" class="formcontact" action="adduser.php">
       <!--On crée un formulaire qui renvoie vers adduser.php (page php permettant d'ajouter les
   utilisateurs grâce au données saisi au préalable-->
        <!-- On utilisera des labels pour avoir le texte d'indication du champ au même niveau,
        par exemple Ville est au même niveau que l'endroit ou on va saisir notre ville, on l'utilise 
        aussi pour avoir des input alignés et de la même taile -->
        <div id="formulaire">
            <div id="formulairedroite">
                <h2 class="contactus" id="civilite">Vous êtes</h2>
                <label for="civilite">Sexe : <span>*</span></label>
                <select class="inputdroite" name="sexe" id="sexecss"> <!--On utilise la balise select pour faire une liste déroulante-->
                   <option value="Homme">Homme</option> <!--la balise option permet d'ajouter un élément à la liste-->
                   <option value="Femme">Femme</option>
                </select>
                <br>
                <br>
                <label class="labedroite" for="nom">Nom : <span>*</span></label>
                <!--Les longueurs définis sont arbitraire, elles peuvent évoluer si besoin est-->
                <input class="inputdroite" type="text" onkeypress="verifierCaracteres(event); return false;" required="required" placeholder="Nom" maxlength="20" class="inline" name="nom"> 
                <!--Le champ doit être obligatoirement rempli grâce à l'attribut required-->
                <!-- On appelle la fonction js, si on tape au clavier sur un caractère interdit, il ne se met pas dans
                le formulaire-->
                <br>
                <label class="labedroite" for="prenom">Prénom : <span>*</span></label>
                <input class="inputdroite" type="text" onkeypress="verifierCaracteres(event); return false;" required="required" placeholder="Prénom" maxlength="20" class="inline" name="prenom">
                <br>
                <label class="labedroite" for="societe">Société :</label>
                <input class="inputdroite" type="text" onkeypress="verifierCaracteres(event); return false;" placeholder="Société" maxlength="20" class="inline" name="societe">
                <br>
                <label class="labedroite" for="adresse">Adresse :</label>
                <input class="inputdroite" type="text" onkeypress="verifierCaracteres(event); return false;" placeholder="Adresse" maxlength="50" class="inline" name="adresse">
                <br>
                <label class="labedroite" for="codepostal">Code Postal :</label>
                <input class="inputdroite" type="text" onkeypress="verifierCaracteres(event); return false;" placeholder="CP" maxlength="5" class="inline" name="codepostal">
                <br>
                <label class="labedroite" for="ville">Ville :</label>
                <input class="inputdroite" type="text" onkeypress="verifierCaracteres(event); return false;" placeholder="Ville de la société" maxlength="50" class="inline" name="ville">
                <br>
                <label class="labedroite" for="mail" required="required">Email : <span>*</span></label>
                <input class="inputdroite" type="email" onkeypress="verifierCaracteres(event); return false;" required="required" placeholder="email valide" maxlength="50" class="inline" name="email">
                <br>
                <label class="labedroite" for="telephone">Téléphone :</label>
                <input class="inputdroite" type="number" onkeypress="verifierCaracteres(event); return false;" placeholder="téléphone pour vous joindre" class="inline" name="telephone">
            </div>
            <div id="formulairemessage">
                <h2 class="contactus" id="demandeclient">Votre demande</h2>
                <label for="objet" id="objetdumessage">Objet : <span>*</span></label>
                <input class="inputdroite" type="text" onkeypress="verifierCaracteres(event); return false;" required="required" placeholder="Objet" maxlength="30" name="objet"> <br> 
                <!-- <p id="lemessage">Message : <span>*</span> -->
                <textarea placeholder="Votre message" required="required" onkeypress="verifierCaracteres(event); return false;" maxlength="5000" id="emailformulaire" name="messageduclient"> </textarea>
                <input type="submit"  value="Valider" id="boutonvalider" />
                <!--bouton permettant de valider le formulaire-->
            </div> 
        </div>
    </form>
</body>
<footer> <!--Pied de page-->
    <p> Ma<sup>2</sup>Sage- 3 Rue des Logis - 44430 La Remaudière, France
        <br> Mail: contact@ma2sage.com | Téléphone : 02 47 12 63 19
        <br> Agence crée le 1<sup>er</sup> Janvier 2017 - ouverture le 27 Avril 2017 </footer>
</html>

