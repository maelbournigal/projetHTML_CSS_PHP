<html>
    
  <head>
    <meta charset="utf-8">
    <title>"Nos services"</title>
    <link href="../css/cssprojet.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
  </head>
    
  <body>
      
    <!--        insertion du header et du menu-->
    <?php include('../headerprojet.html'); 
        include('../menu.html');
    ?>
      <!-- JÉRÉMY NUNES

             Résolution : 1366*768 -->

        <div id="title_ref">
        	<h1> Nos références </h1>
        	<p> Vous êtes nombreux à avoir fait confiance à notre agence web et nous vous en remercions. <br/>
            Grâce à vous et à vos projets toujours plus ambitieux, nous améliorons sans cesse nos compétences, <br/> 
            dans le but de vous proposer des créations toujours plus innovantes. <br/>
            Nous vous invitons à en découvrir quelques-unes </p>
        </div>


	    <div id="wrapper">
	    	<div id="plan"> <!-- Includes the carousel div -->
			    <div class="plan p1"> <!-- div class="plan p1" -> p1 = subclass of plan --> <img src="../img/HBC_Avocats.png" width="450" height="250" alt="HBC_Avocats"> </div>
				<div class="plan p2"> <img src="../img/Proximis.jpg" width="450" height="250" alt="Proximis"> </div>
				<div class="plan p3"> <img src="../img/Usine_5_pattes.png" width="450" height="250" alt="L'usine à 5 pattes"> </div>
				<div class="plan p4"> <img src="../img/Bodycross.png" width="450" height="250" alt="Bodycross"> </div>
				<div class="plan p5"> <img src="../img/Millenium_Hotel.png" width="450" height="250" alt="Millenium_Hotel"> </div>
				<div class="plan p6"> <img src="../img/Moon_Event.png" width="450" height="250" alt="Moon_Event"> </div>
				<div class="plan p7"> <img src="../img/Jeannot_Leconte.png" width="450" height="250" alt="Jeannot_Leconte"> </div>
				<div class="plan p8"> <img src="../img/Paris_Seine.png" width="450" height="250" alt="Paris_Seine"> </div>
			</div>
		</div>

        <!-- JÉRÉMY NUNES : End of work for this part --> 
     <div id="our_services">
         
            <h1 id="services">Nos services</h1><!-- Titre du thème de la page -->
            <div id="servicesvig"> <!-- Création de la div pour exposer les services proposés par l'agence -->
                
                <div class="lien_vignette" id="computer">  <!-- création d'un div pour un des service proposé -->
                    <svg class="svgservices" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve"><g><path d="M90.449,71.013H9.552c-0.796,0-1.439-0.639-1.439-1.429V24.428C8.113,23.639,8.756,23,9.552,23h80.897   c0.796,0,1.439,0.639,1.439,1.428v45.156C91.889,70.374,91.245,71.013,90.449,71.013z M10.992,68.156H89.01V25.857H10.992V68.156z"/></g><g><path d="M82.468,71.013H17.532c-0.796,0-1.439-0.639-1.439-1.429V33.339c0-0.79,0.644-1.429,1.439-1.429h64.936   c0.796,0,1.439,0.639,1.439,1.429v36.245C83.907,70.374,83.264,71.013,82.468,71.013z M18.972,68.156h62.057V34.768H18.972V68.156z   "/></g><g><path d="M90.042,77H9.958C5.846,77,2.5,73.68,2.5,69.599c0-0.789,0.644-1.428,1.439-1.428h92.121c0.796,0,1.439,0.639,1.439,1.428   C97.5,73.68,94.154,77,90.042,77z M5.611,71.026c0.604,1.809,2.325,3.117,4.348,3.117h80.083c2.021,0,3.741-1.309,4.349-3.117   H5.611z"/></g><g><path d="M51.32,30.313H48.68c-0.795,0-1.439-0.639-1.439-1.429c0-0.789,0.645-1.428,1.439-1.428h2.641   c0.795,0,1.439,0.639,1.439,1.428C52.76,29.673,52.115,30.313,51.32,30.313z"/></g><g><path d="M59.646,41.89l-6.974-1.855l-5.106,5.069l1.14,4.213L39.2,58.749c-0.954,0.948-0.954,2.482,0,3.432   c0.954,0.945,2.502,0.945,3.457,0l9.505-9.433l4.245,1.13l5.108-5.066L59.646,41.89z M55.227,49.498l-2.562-0.681l-0.686-2.542   l1.875-1.861l2.561,0.681l0.687,2.542L55.227,49.498z"/></g></svg>  
                    <h2>Création d'un site web</h2><!-- Titre du service proposé -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo mi, sodales vitae purus eu, cursus blandit leo. Aenean semper fringilla erat sagittis egestas.</p> <!-- Description du service proposé --> 
                </div>
                
                <div class="lien_vignette" id="phone">
                  <svg class="svgservices" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve"><path fill="#000000" d="M72.78,20.246H27.22c-0.949,0-1.72-0.771-1.72-1.722V16.66C25.5,10.23,30.752,5,37.207,5h25.586  C69.248,5,74.5,10.23,74.5,16.66v1.864C74.5,19.475,73.729,20.246,72.78,20.246z M28.94,16.803h42.12V16.66  c0-4.531-3.709-8.218-8.267-8.218H37.207c-4.558,0-8.267,3.687-8.267,8.218V16.803z"/><path fill="#000000" d="M62.793,95H37.207C30.752,95,25.5,89.77,25.5,83.339v-7.377c0-0.95,0.771-1.722,1.72-1.722H72.78  c0.949,0,1.72,0.771,1.72,1.722v7.377C74.5,89.77,69.248,95,62.793,95z M28.94,77.684v5.655c0,4.532,3.709,8.219,8.267,8.219h25.586  c4.558,0,8.267-3.687,8.267-8.219v-5.655H28.94z"/><circle fill="#000000" cx="50" cy="84.232" r="3.287"/><path fill="#000000" d="M41.83,12.623c0,0.611,0.495,1.106,1.105,1.106h14.129c0.61,0,1.105-0.495,1.105-1.106l0,0  c0-0.611-0.495-1.106-1.105-1.106H42.936C42.325,11.517,41.83,12.012,41.83,12.623L41.83,12.623z"/><path fill="#000000" d="M72.78,77.684H27.22c-0.949,0-1.72-0.771-1.72-1.722V18.524c0-0.95,0.771-1.722,1.72-1.722H72.78  c0.949,0,1.72,0.771,1.72,1.722v57.438C74.5,76.912,73.729,77.684,72.78,77.684z M28.94,74.24h42.12V20.246H28.94V74.24z"/><path fill="#000000" d="M60.292,36.944l-7.442-1.996l-5.446,5.454l1.217,4.532L38.477,55.083c-1.017,1.021-1.017,2.671,0,3.692  c1.02,1.018,2.67,1.018,3.689,0l10.14-10.148l4.529,1.215l5.449-5.451L60.292,36.944z M55.576,45.13l-2.732-0.732l-0.731-2.734  l2-2.003l2.732,0.732l0.732,2.734L55.576,45.13z"/></svg>
                  <h2>Création d'une application mobile</h2>
                  <p>Cras at sem ac massa gravida rutrum nec quis arcu. Duis scelerisque vehicula dolor quis ullamcorper. Etiam facilisis tortor ut elementum euismod.</p>
                </div>
                
                <div class="lien_vignette" id="stats">
                  <svg class="svgservices svgservices2" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 100 125" x="0px" y="0px"><title>Essential Icons</title><path d="M28,88H9a3,3,0,0,1-3-3V60a3,3,0,0,1,3-3H28a3,3,0,0,1,3,3V85A3,3,0,0,1,28,88ZM12,82H25V63H12Z"/><path d="M59,88H40a3,3,0,0,1-3-3V40a3,3,0,0,1,3-3H59a3,3,0,0,1,3,3V85A3,3,0,0,1,59,88ZM43,82H56V43H43Z"/><path d="M90,88H71a3,3,0,0,1-3-3V20a3,3,0,0,1,3-3H90a3,3,0,0,1,3,3V85A3,3,0,0,1,90,88ZM74,82H87V23H74Z"/></svg>
                  <h2>Suivi des performances</h2>
                  <p>Quisque ornare facilisis orci sed dapibus. Nulla sed blandit lorem, eu sagittis justo. Mauris elit diam, finibus a viverra ut, gravida eu urna.</p>
                </div>
                
                <div class="lien_vignette" id="advices">
                    <svg class="svgservices svgservices2" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" viewBox="0 0 582.55902 911.5421125" version="1.1" x="0px" y="0px"><g transform="translate(-60.908004,-118.659)"><path style="" d="m 352.55,118.659 c -93.588,0 -172.55,62.005 -198.305,147.154 -2.73,-1.118 -5.743,-1.818 -8.971,-1.818 -13.281,0 -24.122,10.779 -24.122,24.121 l 0,75.638 c 0.07,13.405 10.841,24.122 24.122,24.122 9.186,0 16.874,-5.156 20.971,-12.728 -3.538,-14.585 -5.455,-29.822 -5.455,-45.213 0,-56.91 25.099,-110.538 68.729,-147.154 43.567,-36.554 101.15,-51.752 158.185,-41.698 77.576,13.777 140.964,77.633 154.184,155.397 4.903,29.044 3.382,57.799 -3.879,84.487 1.303,1.178 2.632,2.22 4.122,3.15 l 0,51.033 -47.154,47.153 c -8.936,0.247 -16.12,7.485 -16.12,16.484 0,9.062 7.361,16.486 16.485,16.486 9.061,0 16.423,-7.304 16.485,-16.365 l 50.547,-50.425 c 2.235,-2.234 3.393,-5.32 3.393,-8.486 l 0,-55.394 c 7.386,-4.096 12.607,-11.788 12.607,-20.849 l 0,-75.638 c 0,-13.342 -10.778,-24.121 -24.121,-24.121 -1.18,0 -2.216,0.541 -3.395,0.727 C 524.73,180.07 445.769,118.659 352.55,118.659 Z m -8.848,31.515 c -0.379,0.02 -0.711,0.222 -1.091,0.243 -13.493,0.744 -26.489,2.869 -39.03,6.424 -12.368,3.506 -24.265,8.132 -35.395,14.061 -57.388,30.1 -96.73,90.101 -96.73,159.398 0,62.682 32.135,117.613 80.729,149.699 15.64,10.365 14.292,34.15 -3.272,40.728 C 139.125,562.06 60.908004,667.21 60.908004,791.52 182.046,838.493 303.172,856.114 424.309,844.37 c 44.212,-4.287 88.398,-12.985 132.61,-25.092 4.244,-1.162 8.483,-1.917 12.728,-3.151 24.225,-7.01 48.501,-15.248 72.729,-24.607 0.362,-0.14 0.728,-0.224 1.091,-0.363 0.05,-124.31 -78.276,-229.46 -188.125,-270.794 -17.379,-6.454 -19.154,-30.186 -3.637,-40.364 56.848,-37.361 91.273,-105.804 78.424,-181.458 -12.348,-72.861 -71.688,-132.854 -144.486,-145.7 -14.244,-2.522 -28.327,-3.333 -41.941,-2.667 z" fill="#000000"/></g></svg>
                    <h2>Conseils</h2>
                    <p>Maecenas ex lectus, cursus sit amet lacus a, laoreet porta velit. Proin sem tellus, dictum eu dapibus id, dapibus sed nulla. Vestibulum maximus pellentesque velit vel ullamcorper.</p>
                </div>
            </div>
        </div>
    </body>
</html>