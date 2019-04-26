<?php
$page=$_GET['page'];
$css=$_GET['css'];
$titre=$_GET['titre'];
if (($page=='')||(substr($page,0,7)=='http://'))
{
$page = "home";
$titre = "Accueil";
$css="timetraveler";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <link rel="icon" type="image/png" href="img/logo1.png" />
    <link href="animate.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Bungee|Permanent+Marker|Jura|Lobster|Open+Sans" rel="stylesheet">
    <title>Retour vers le futur du WEB</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
<?php echo '<link href="'.$css.'.css"'. ' rel="stylesheet" type="text/css">'; ?>
</head>   

<body>
    <?php include "haut.php";//haut de page
    echo "\n"; 
    include "navig.php";//haut de page
    echo "\n";
    include $page.".php"; //page à inclure en fonction de la valeur de $page
    include "bas.php"; // bas de page ?> 

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("contenus").style.marginLeft = "250px";
    document.getElementById("bas").style.marginLeft = "250px";
    document.body.style.backgroundColor = "#1c1c1c7d";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("contenus").style.marginLeft= "auto";
    document.getElementById("bas").style.marginLeft = "auto";
    document.body.style.backgroundColor = "#03051c";
}
</script>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");

var sticky = navbar.offsetTop;
    
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
} 
    </script>
</body>
</html>