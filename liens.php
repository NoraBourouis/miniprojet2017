<section id="contenus">
<h2>les liens </h2>
  <article>
   <p> Le voyage dans le temps étant désormais possible, nous souhaitons sans plus attendre commencer les préparatifs pour notre prochaine mission. Nous sommes fiers de vous annoncer notre prochain défi, qui n'est autre que <b>le voyage inter-dimensionel</b>. Il nous manque toutefois plusieurs éléments avant que notre machine soit enfin opérationnelle. C'est pourquoi nous sommes preneurs de toutes informations que vous jugerez utiles. 
   Il faudrait nous aider à trouver un moyen de ne pas rester coincés dans une dimension qui n'est pas la nôtre, et nous recherchons d'ailleurs dès maintenant des cobayes à envoyer. Si vous êtes volontaire, veuillez déposer dans le récupérateur de données (ci-dessous) vos coordonnées sous forme de site perso, ainsi que vos données bancaires (Juste au cas où vous ne pourriez plus rentrer... Eh oui, il faut bien qu'elles servent à quelqu'un).</p> 
    <ul>
    <?php include "liens.html"; ?>
    </ul>
 </article>
<article>
<p>Voici notre récupérateur de données. Nous vous remercions par avance pour les liens que vous nous enverrez.</p>
           <hr/>
           
            <form name="form" id="form1" method="get" action="addlink.php">
                <label>lien</label>
                <input type="text" name="lien" value="http://" />
                <label>commentaire du lien</label>
                <input type="text" name="commentaire" />
                <input type="hidden" name="css" value="<? echo $css; ?>"/>
                <input name="submit" value="soumettre" type="submit" />
            </form>
   </article>
</section>