# iesa-15-m1dt

## Sites utiles
* http://daringfireball.net/projects/markdown/syntax;
* https://pragprog.com/ : The pragmatic programmer;
* http://jenkins-ci.org/ : Mise en place intégration continue;
* http://www.seleniumhq.org/ : Test utilisateur automatisé;

## Javascript
* Google map : pour afficher la map mettre des dimensions dans la DIV
* Fonction : function nomMéthode(arguments)
* Attention à l'ordre de l'incrementation.
  * a++ = Affiche le nombre puis incrémente
  * ++a = Incrémente puis affiche le nombre
* Le ternaire
  * var nomVariable = (condition) ? ValeurAssignéSiVrai : ValeurAssignéSiFaux;
* Console
  * console.log
  * console.debug
  * console.info
  * console.warn
  * console.error
* Boucle
  * Break : intérrompt la boucle
  * Continue : permet de continuer ailleurs. 
  * /!\ Largement à éviter !
* Tout ce qui est apres le return n'est pas pris en compte
* Tableau
  * values.reverse(); -> Inverse les tableaux
  * values.join("_"); -> ajoute élément entre les valeurs
  * values.sort();
  * Penser a initialiser le tableau dans la variable;
* Les dates
  * .getTime() permet de comparer 2 dates;

## Tests unitaires
* Attention à l'ordre des arguments (Valeur testé, Valeur attendu, Message d'erreur);

## TDD
* Test Driven Developpement
  * On ecrit le test
  * Puis on code


## PHP
* global : va chercher les variables en dehors d'une function
* $$a : Le double $$ est une variable de variable (variable dynamique)
* Constante : Toujours en MAJUSCULE
* Type:
  * Scalaire : boolene / integer / float (i.e. double) / string
  * Composés : array / objet 
  * Spéciaux : ressource / NULL
* Connaitre les infos d'une variable : var_dump / echo gettype($variable)

## Info 
* Dotted : s'affiche en carré sur Chrome uniquement
* GIT : checkout -> annuler les dernières modifications
* Sublime text : raccourcis cmd+shft+/ pour les commentaires
