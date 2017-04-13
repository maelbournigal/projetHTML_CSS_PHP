<html>
  <head>
    <meta charset="utf-8">
    <title>"Contactez-Nous"</title>
    <link href="../css/cssprojet.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
    <script>
        function verifierCaracteres(event) {
            var keyCode = event.which ? event.which : event.keyCode;
            var touche = String.fromCharCode(keyCode);
            var champ = document.getElementById('mon_input');
            var caracteres = "'&"; // liste des caractères interdits 
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
 
  <h1 id="contacter">Contactez nous</h1>
       <p id="contactp">Vous voulez nous contactez pour profiter de nos différentes offres, n'hésitez pas ! </p>
        <!-- On donne la même classe pour que les bloc soit sur la même ligne, et un id différent
    pour les espacer avec un margin -->
        
        <h2 class="contactus" id="demandeclient">Votre demande</h2>
<!-- Création du formulaire de contact -->
    <form method="post" class="formcontact" action="adduser.php">
        <!-- On utilisera des labels pour avoir le texte d'indication du champ au même niveau,
        par exemple Ville est au même niveau que l'endroit ou on va saisir notre ville, on l'utilise 
        aussi pour avoir des input alignés et de la même taile -->
        <div id="formulaire">
            <div id="formulairedroite">
                <h2 class="contactus" id="civilite">Vous êtes</h2>
                <label for="civilite">Sexe : <span>*</span></label>
                <select name="sexe" id="sexecss">
                   <option value="Homme">Homme</option>
                   <option value="Femme">Femme</option>
                </select>
                <br>
                <br>
                <label for="nom">Nom : <span>*</span></label>
                <input type="text" onkeypress="verifierCaracteres(event); return false;" required="required" placeholder="Nom" maxlength="20" class="inline" name="nom"> <!-- On appelle la fonction js, si on tape au clavier sur un caractère interdit, il ne se met pas dans
                le formulaire-->
                <br>
                <label for="prenom">Prénom : <span>*</span></label>
                <input type="text" onkeypress="verifierCaracteres(event); return false;" required="required" placeholder="Prénom" maxlength="20" class="inline" name="prenom">
                <br>
                <label for="societe">Société :</label>
                <input type="text" onkeypress="verifierCaracteres(event); return false;" placeholder="Société" maxlength="20" class="inline" name="societe">
                <br>
                <label for="adresse">Adresse :</label>
                <input type="text" onkeypress="verifierCaracteres(event); return false;" placeholder="Adresse" maxlength="50" class="inline" name="adresse">
                <br>
                <label for="codepostal">Code Postal :</label>
                <input type="text" onkeypress="verifierCaracteres(event); return false;" placeholder="CP" maxlength="5" class="inline" name="codepostal">
                <br>
                <label for="ville">Ville :</label>
                <input type="text" onkeypress="verifierCaracteres(event); return false;" placeholder="Ville de la société" maxlength="50" class="inline" name="ville">
                <br>
                <label for="mail" required="required">Email : <span>*</span></label>
                <input type="email" onkeypress="verifierCaracteres(event); return false;" required="required" placeholder="email valide" maxlength="50" class="inline" name="email">
                <br>
                <label for="telephone">Téléphone :</label>
                <input type="number" onkeypress="verifierCaracteres(event); return false;" placeholder="téléphone pour vous joindre" class="inline" name="telephone">
            </div>
            <div id="formulairemessage">
                <label for="objet" id="objetdumessage">Objet : <span>*</span></label>
                <input type="text" onkeypress="verifierCaracteres(event); return false;" required="required" placeholder="Objet" maxlength="30" name="objet"> <br> 
                <!-- <p id="lemessage">Message : <span>*</span> -->
                <textarea placeholder="Votre message" required="required" onkeypress="verifierCaracteres(event); return false;" maxlength="5000" id="emailformulaire" name="messageduclient"> </textarea>
                <input type="submit"  value="Valider" id="boutonvalider" />
            </div> 
        </div>
    </form>
</body>
<footer>
     <p> Ma<sup>2</sup>Sage- 3 Rue des Logis - 44430 La Remaudière, France </p>
     <p>Mail: contact@ma2sage.com Téléphone : 02 47 12 63 19</p> 
</footer>
</html>

