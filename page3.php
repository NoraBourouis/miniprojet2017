
<section id="contenus">
<h2> Le manuel d'utilisation </h2>	
   <article>
   <h3> Les techniques pour voyager dans le temps</h3>
    <p> 
	Voyager dans le temps n'a jamais été aussi accessible que de nos jours. Nous, Nora Mcfly et Yann Brown, l'avons testé.
    Nous vous proposons de découvrir les nombreuses techniques. 
    Tout d'abord, plusieurs languages ont du être mis à profit. Notamment, le CSS3 et le HTML5, création révolutionaire offrant des milliers de possibilités. 
    Mais pas seulement. la technique utilisée pour le caroussel aka retour sur nos voyages: 
        - Javascript. 
    La technique utilisé pour la sidebar aka technique du futur
        - CSS et HTML
        
    Pour pouvoir vous montrer nos differents voyages, et les differentes images de ce site,  plusieurs techniques tout droit sorties du laboratoire de Yann ont été utilisés: Adobe Illustrator et photoshop. 
    
    Mais le plus important pour pouvoir voyager dans le temps et surtout dans le futur du web, c'est d'être mobile first: d'avoir un "responsive design".
    </p>
    </article>
    
     <article>
    <h3> Qu'est-ce que le "responsive web design" ? </h3>

        <p>En quelques mots, c’est faire un design de site qui s'adapterait en fonction de la largeur de l’écran. En général, on essaie de découper un site en 2 ou 3 CSS spécifiques : “desktop” (superieur à 1024px de large), tablette (de 600px à 1000px de large) et mobile (inférieur à 600px de large).</p>
        
        <p>Idéalement, lorsqu'on fait des maquettes et que l'on commence à coder, on débute avec le design pour mobile. Seulement après avoir fait cela, on ajoute du contenu et des fonctionnalités au fur et à mesure que l'écran s'étend. Si on a déjà un site web, et que l'on peut pas se permettre de refaire son siteweb entièrement, on peut utiliser ce que l'on appele : les Medias queries </p>
        
       <p> Les media queries font partie des nouveautés de CSS3. Il ne s'agit pas de nouvelles propriétés mais de règles que l'on peut appliquer dans certaines conditions. Concrètement, vous allez pouvoir dire « Si la résolution de l'écran du visiteur est inférieure à tant, alors applique les propriétés CSS suivantes ». Cela vous permet de changer l'apparence du site dans certaines conditions : vous pourrez augmenter la taille du texte, changer la couleur de fond, positionner différemment votre menu dans certaines résolutions, etc. Contrairement à ce qu'on pourrait penser, les media queries ne concernent pas que les résolutions d'écran. Vous pouvez changer l'apparence de votre site en fonction d'autres critères comme le type d'écran (smartphone, télévision, projecteur…), le nombre de couleurs, l'orientation de l'écran (portrait ou paysage), etc. Les possibilités sont très nombreuses ! </p>
</article>
       <article><h3>Les médias queries</h3>
        <img src="img/responsive_web.png" alt="illustration des medias queries" />
        
        <div><p>Afin de rendre son site visible et responsible sur le mobile, on commence par ajouter ajoute la ligne de code suivante dans son index.php :</p> <code>meta name="viewport" content="width=device-width, initial-scale=1" </code> <p>On essaie également de donner les tailles en % et d'éviter les px. 
            Après avoir fait ça on peut faire les modifications necessaires en fonction de la taille des écrans. On insère des médias queries directement dans les feuilles CSS que l'on souhaite modifier. Voilà une ligne de code type:</p><code> @media screen and (max-width: ...px){élément{propriété à modifier: ...;} }</code><p> Par exemple, si l'on souhaite annuler une animation sur tablette on écrira : </p><code>@media screen and (max-width:768px){ nomdelelement{animation:none;} }</code>.
        
       <p>Lorsqu'on code pour les medias queries pour tablette ou pour mobile, il ne faut pas oublier de transformer nos display:inline-block en display:block; et nos float: left; / float:right; etc en float:none;.De nombreuses choses devront être changées sur mobile et tablette, on essaie d'éviter les effets hover, les animations, les information superflues qui ralentisseront le temps de chargement de la page et qui feront fuir les internautes. Sur petit écran, afin d'améliorer la navigation, on pourra augmenter la taille du texte, des zones cliquables, faire passer le contenu sur une seule colonne, masquer certains éléments, changer la couleur de fond, positionner différemment le menu à partir d’une certaine résolution de l’écran, etc.
        L’avantage des Media Queries, c’est que la plupart des navigateurs actuels, y compris pour smartphones, sont compatibles avec elles : Firefox, Firefox Mobile, Chrome, Safari, Safari Mobile, IOS, Safari, Androïd, Opera Mini, Opera Mobile et Blackberry.
        Comme toujours, le plus en retard reste Internet Explorer, qui ne supporte les Media Queries qu’à partir de sa version 9. Pour ne pas provoquer de bug sur les vieux navigateurs, on indiquera ainsi les propriétés de Media Queries en CSS: @media only screen. Ainsi, les anciens navigateurs chargeront la feuille de style par défaut.</p></div>

       </article>
        </section>