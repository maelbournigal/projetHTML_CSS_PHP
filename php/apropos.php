<html>
  <head>
    <meta charset="utf-8">
    <title>"a propos"</title>
    <link href="../css/cssprojet.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
  </head>
  <body>
<!--        insertion du header et du menu-->
        <?php include('../headerprojet.html'); ?>
        <?php include('../menu.html');?>
<!--        carrouselle-->
        <div id="aproposcarrousel">
          <figure>
              <div class="carouselleapropos" id="agence">
                  <h1>Présentation de notre Agence</h1>
                 <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
              </div>  
              <div class="carouselleapropos" id="equipe">
                <h1>L'équipe</h1>
                <p id="equipepres">lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <div id="contributeur">
                  <div class="collegue">
                    <img src="../img/maxime.jpg" alt="maxime" title="maxime" /><p class="nom">Maxime Grand</p>
                    <p class="nom">développeur</p>
                  </div>
                  <div class="collegue">
                    <img src="../img/samuel.jpg" alt="samuel" title="samuel"/><p class="nom">Samuel Poultier</p>
                    <p class="nom">développeur</p>
                  </div>
                  <div class="collegue">
                    <img src="../img/jeremy.jpg" alt="jeremy" title="jeremy"/>
                    <p class="nom">Jeremy Nunes</p>
                    <p class="nom">développeur</p>
                  </div>
                  <div class="collegue">
                    <img src="../img/mael.jpg" alt="mael" 
                           title="mael"/>
                    <p class="nom">Mael Bournigal</p>
                    <p class="nom">développeur</p>
                  </div>
                </div>   
              </div>
             <div class="carouselleapropos" id="locau"> 
                 <h1>Les locaux</h1>
                 <div id="adresse">
                    <h2>L'adresse postale</h2>
                     <p>Moulin de la Sainte Catherine 44430 La Remaudiere</p>
                 </div>
                 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5418.40698517486!2d-1.2544573648130382!3d47.23216533933331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1490190489133" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
             </div>
          </figure>
        </div>
    </body>
</html>