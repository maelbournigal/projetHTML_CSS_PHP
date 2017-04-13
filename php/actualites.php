<html>
    
  <head>
    <meta charset="utf-8">
    <title>Actualités</title>
    <link href="../css/cssprojet.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
  </head>
    
  <body id="grey">
      
    <!--        insertion du header et du menu-->
    <?php include('../headerprojet.html');
        include('../menu.html');
      
        $bdd = new PDO('mysql:host=localhost;dbname=ma2sage;charset=utf8', 'root', '');

        $titles=$bdd->query('SELECT titres FROM actu');
        $stories=$bdd->query('SELECT histoires FROM actu');
        $authors=$bdd->query('SELECT auteurs FROM actu');
        $pictures=$bdd->query('SELECT pictures FROM actu');
    ?>
    <p>Actualités :</p>
    <ul>
    <?php 
        while ($title= $titles->fetch() AND $story= $stories->fetch() AND $author= $authors->fetch() AND $pictures= $picture->fetch()) { 
    ?>
	<li>
    <?php 
        echo $title['titre'];
        echo $story['histoire'];
        echo $author['auteur'];
        echo $picture['image'];
    ?>
    </li>
    <?php } 
    ?>
    </ul>
    
    </body>
</html>