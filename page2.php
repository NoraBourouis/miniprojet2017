
<section id="contenus">
	<h2> Nos voyages</h2>
    
  <p> Dans cette rubrique, nous vous proposons de découvrir quelques photos souvenir de nos voyages dans le temps et des instruments que nous utilisons. 
    Dans ce carrousel, vous pourrez voir à quoi ressemble notre machine, nos plus belles rencontres, etc. </p>
    
<div class="slideshow-container">
  <div class="mySlides fade">
      <img src="img/charlesdegaulleetyann.jpg" style="width:100%"></div>
<br/>
<br/>
  <div class="mySlides fade">
    <img src="img/yann&steve&bill.jpg" style="width:100%">
    <div class="text"> Notre rencontre avec Steve Jobs et Bill Gates</div></div>
  </div>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span>  
</div>
<br/>
   <p>
        Peu de gens le savent, mais si l'informatique a peu devenir ce qu'elle est aujourd'hui, c'est un peu grâce à nous. Conscients du potentiel immense des PME Microsoft et Apple, nous avions pris la décision d'avertir Bill Gates et Steve Jobs des tragiques erreurs de stratégie commerciale qu'ils allaient commettre. Après avoir sympatisé autour d'un petit barbecue au fond de leur jardin, nous leur avons prodigué nos conseils bienveillants qui leur ont permis d'éviter ces pièges et de connaître le succès. De même, nous avions infiltré durant plusieurs semaines la garde du Général Charles de Gaulle afin d'empêcher son assassinat lors d'un attentat. Nous avons gardé quelques photos de ces instants mémorables, mais ce ne sont là que quelques unes de nos aventures. En fait, nous avons fait 3 films entièrement consacrés à nos expériences. <br/>
        Beaucoup de nos voyages ont été réalisables grace à un équipement de pointe bien connu des explorateurs temporels : <b>Adobe Photoshop</b>. Si vous ne disposez pas de ce logiciel et ne pouvez pas l'acquérir dans le futur proche, pas de souci : une autre technologie de pointe et open source vous permettra de voyager dans le temps : Gimp.
   </p>
   
<h3>Le reste de notre équipement :</h3>
<div class="w3-container">


    <div class="w3-content w3-display-container">

    <div class="w3-display-container mySlides1">
      <img src="img/btf-screen.jpg" style="width:100%">
    </div>

    <div class="w3-display-container mySlides1">
      <img src="img/machinela.jpg" style="width:100%">
    </div>
    
    <div class="w3-display-container mySlides1">
      <img src="img/btf-screen1.jpg" style="width:100%">
    </div>

    <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

    </div>
</div>
    
    <p>Tout voyageur temporel qui se respecte doit avoir sa propre machine. Chez nous pas de cabine téléphonique ou autres appareils douteux. Si les premiers prototypes du Doc étaient basés sur un réfrégirateur, nous avons par la suite arrêté notre choix sur une voiture. Évidemment ça consomme nettement plus, mais c'est surtout beaucoup plus confortable. Aujourd'hui toutes nos expériences s'effectuent à bord d'une DMC-12 DeLorean. Certains disent que c'est pour des raisons techniques, la structure en aluminium, etc ... Mais admettons-le, ce choix était basé sur des critères purement esthétiques.</p>

    </section>

<script>
var slideIndex = 1;
showSlides(slideIndex);


function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides1");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
