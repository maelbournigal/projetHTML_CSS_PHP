<html>
  <head>
    <meta charset="utf-8">
    <title>"a propos"</title>
    <link href="../css/cssprojet.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
</head>
<body>      
    <? php include('../headerprojet.html') ?>
    <h1 id="contacter">Merci pour votre message :)</h1>
    <!-- On utilise une div pour ne pas avoir le texte collé à gauche et caché sous le menu -->
    <div class="reponsecontact">Bonjour 
    <?php
     if (isset($_POST['prenom'])) {
               $prenom = $_POST['prenom']; /* si le champ prenom est rempli, la variable prenom prend la valeur saisi par l'utilisateur */
    }
    echo $prenom; // on affiche le prénom de l'utilisateur.
    ?>
    <p>, votre message à bien été envoyé, nous répondrons au plus vite. </p>
    </div>
    <footer>
        <p> TEST</p>
    </footer>
</body>
</html>

<!-- Code php pour envoyer à la base de donnée, les données du formulaire -->

<?php 
            // Simple quote fait beuger formulaire 
            if (isset($_POST['sexe'])){
                $sexe = htmlspecialchars($_POST['sexe']);
            }

            if (isset($_POST['nom'])) {
               $nom = htmlspecialchars($_POST['nom']);
            }
            if (isset($_POST['prenom'])) {
               $prenom = htmlspecialchars($_POST['prenom']); 
    
            if (isset($_POST['societe'])) {
               $societe = htmlspecialchars($_POST['societe']); 
            }

            if (isset($_POST['adresse'])) {
               $adresse = htmlspecialchars($_POST['adresse']); 
            }

            if (isset($_POST['codepostal'])) {
               $codepostal = htmlspecialchars($_POST['codepostal']); 
            }

            if (isset($_POST['ville'])) {
               $ville = htmlspecialchars($_POST['ville']); 
            }

            if (isset($_POST['email'])) {
               $email = htmlspecialchars($_POST['email']); 
            }

            if (isset($_POST['telephone'])) {
               $telephone = htmlspecialchars($_POST['telephone']); 
            }

            if (isset($_POST['objet'])) {
               $objet = htmlspecialchars($_POST['objet']); 
            }

            if (isset($_POST['messageduclient'])) {
               $messageduclient = htmlspecialchars($_POST['messageduclient']); 
            }
           $server="localhost"; //Le nom du serveur
           $user="root"; //Nom d'utilisateur du serveur
           $password=""; //Mot de passe du serveur
           $data_base="ma2sage"; //Le nom de la base de données
           $connect = new mysqli($server, $user, $password, $data_base);  // on se connecte au serveur en mysqli grâce au données fournis ci-dessus.        
           $sql = "INSERT INTO contact 
             (Civilite,Nom,Prenom,Societe,Adresse,Codepostal,Ville,Mail,Telephone,Objet,Message) VALUES ('$sexe','$nom','$prenom','$societe','$adresse','$codepostal','$ville','$email','$telephone','$objet','$messageduclient')";
           /* on insère les valeurs renseignés par l'utilisateur dans la base de donnée */
           if ($connect->connect_error) {die("Connection failed: " . $connect->connect_error);}

           if ($connect->query($sql) === TRUE) 
           {
            echo '';
           }
           else {
               echo "Erreur de connexion à la base de donnée" . $sql . "<br>" . $connect->error;
           }
           $connect->close();    
           }   
?>