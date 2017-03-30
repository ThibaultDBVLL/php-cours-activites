<?php

/*****************************************/
/********** Les boucles : For ************/
/*****************************************/
echo '1.Nombre de mouton : <br>';
for ($i = 0; $i <= 10; ++$i) {
  echo $i.' mouton(s)<br>';
}
echo '<br><br>';
//----------------------------------------
//for : particulièrement utile pour pacourir un tableau
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
//count est une fonction proposée par php qui sert à compter le nombre d'éléments d'un tableau
echo '2.Les couleurs : <br>';
for ($i = 0; $i < count($couleurs); ++$i) {
  echo $couleurs[$i].'<br>';
}
echo '<br><br>';

//----------------------------------------
//Parcourir un tableau depuis la fin
echo '3.Les couleurs depuis la fin: <br>';
//n'oubliez pas qu'un tableau commence à l'index 0. C'est pour ça qu'on commence notre $i à la taille du tableau moins 1
for ($i = count($couleurs) - 1; $i >= 0; --$i) {
  echo $couleurs[$i].'<br>';
}
echo '<br><br>';
//----------------------------------------
//Parcourir un tableau multidimensionnel à 2 dimensions
$couleurs = array(
  array('rouge clair', 'rouge', 'rouge fonce'),
  array('bleu clair', 'bleu', 'bleu fonce'),
  array('vert clair', 'vert', 'vert fonce'),
  array('orange clair', 'orange', 'orange fonce'),
  array('marron clair', 'marron', 'marron fonce'),
);

echo '4.Les nuances de couleurs : <br>';
for ($i = 0; $i < count($couleurs); ++$i) {
  for ($j = 0; $j < count($couleurs[$i]); ++$j) {
    echo $couleurs[$i][$j].'<br>';
  }
}

echo '<br><br>';

/*****************************************/
/********** Les boucles : Foreach ********/
/*****************************************/
//parcourir un tableau simple
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
echo '5.Les couleurs : <br>';
foreach ($couleurs as $couleur) {
  echo $couleur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif
$vehicule = array(
  //clé => valeur
  'nom' => 'Aventador LP 700-4',
  'marque' => 'Lamborghini',
  'puissance' => 700,
  'prix' => 200000,
);
echo '6.Specificite de ma voiture : <br>';
//syntax : foreach($tableau as $cle => $valeur )
foreach ($vehicule as $propriete => $valeur) {
  echo $propriete.':'.$valeur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif multidimensionnel
$vehiculeConcession = array(
  'Bas de gamme' => array(
    'nom' => 'C1',
    'marque' => 'Citroen',
    'puissance' => 70,
    'prix' => 10000,
  ),
  'Milieu de gamme' => array(
    'nom' => 'Golf',
    'marque' => 'VW',
    'puissance' => 140,
    'prix' => 270000,
  ),
  'Haut de gamme' => array(
    'nom' => 'Aventador LP 700-4',
    'marque' => 'Lamborghini',
    'puissance' => 700,
    'prix' => 200000,
  ),
);
echo '7.Les voitures dans la concession :';
foreach ($vehiculeConcession as $gamme => $vehicule) {
  echo '<br>'.$gamme;
  foreach ($vehicule as $propriete => $valeur) {
    echo $propriete.' : '.$valeur.'<br>';
  }
}
echo '<br><br>';

/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/

//----------------------------------------
//Créer un tableau pour les mois de l'année et affiché tous les mois de Janvier à Décembre
//modifier et/ou remplacer les éléments ci-dessous
echo "8.Les mois depuis le debut de l'annee : <br>";
$mois = ['Janvier ', 'Février ', 'Mars ', 'Avril ', 'Mai ', 'Juin ', 'Juillet ', 'Août ', 'Septembre ', 'Octobre ', 'Novembre ', 'Décembre '];
foreach($mois as $month){
  echo $month;
}

echo '<br><br>';

//Afficher les mois de la fin de l'année jusqu'au début de l'année
//modifier et/ou remplacer les éléments ci-dessous
echo "9.Les mois depuis la fin de l'annee : <br>";
for ($i = 12; $i >= 0; $i--) {
  echo $mois[$i]."\n";
}
echo '<br><br>';
//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
$college = array(
  'Sixieme' => array(
    array('Nom' => 'Payet', 'Prenom' => 'Mickael'),
    array('Nom' => 'Hoareau', 'Prenom' => 'Christine'),
    array('Nom' => 'Maillot', 'Prenom' => 'Laure'),
  ),
  'Cinquieme' => array(
    array('Nom' => 'Bourdon', 'Prenom' => 'Didier'),
    array('Nom' => 'Legitimus', 'Prenom' => 'Pascal'),
    array('Nom' => 'Campan', 'Prenom' => 'Bernard'),
    array('Nom' => 'Fois', 'Prenom' => 'Marina'),
    array('Nom' => 'Floresti', 'Prenom' => 'Florence'),
  ),
  'Quatrieme' => array(
    array('Nom' => 'Willis', 'Prenom' => 'Bruce'),
    array('Nom' => 'Lawrence', 'Prenom' => 'Laurence'),
    array('Nom' => 'Johannson', 'Prenom' => 'Scarlett'),
    array('Nom' => 'Jackson', 'Prenom' => 'Samuel'),
  ),
  'Troisième' => array(
    array('Nom' => 'Xavier', 'Prenom' => 'Charles'),
    array('Nom' => 'Scott', 'Prenom' => 'Cyclope'),
    array('Nom' => 'Logan', 'Prenom' => 'Wolverine'),
    array('Nom' => 'Kirt', 'Prenom' => 'Diablo'),
  ),
);

echo '10.Les eleves du college : <br>';
foreach ($college as $classe => $eleves){
  echo $classe."</br>";
  foreach ($eleves as $key => $value){
    foreach ($value as $value){
      echo $value."</br>";
    }
    echo'</br>';
  }
}
echo '<br><br>';

//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
//reprenez le tableau ci-dessus, ajoutez des éléves pour la classe de troisième et réaffichez tout
echo '11.Les eleves du college (avec les nouveaux arrivants): <br>';


//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
  array(
    'nom' => 'Independance day',
    'date' => 1996,
    'realisateur' => 'Roland Emmerich',
    'acteurs' => array(
      'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
    ),
  ),
  array(
    'nom' => 'Bienvenue a Gattaca',
    'date' => 1998,
    'realisateur' => 'Andrew Niccol',
    'acteurs' => array(
      'Ethan Hawke', 'Uma Thurman', 'Jude Law',
    ),
  ),
  array(
    'nom' => 'Forrest Gump',
    'date' => 1994,
    'realisateur' => 'Robert Zemeckis',
    'acteurs' => array(
      'Tom Hanks', 'Gary Sinise',
    ),
  ),
  array(
    'nom' => '12 hommes en colere',
    'date' => 1957,
    'realisateur' => 'Sidney Lumet',
    'acteurs' => array(
      'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
    ),
  ),
);

echo '12.Mes films : <br>';
//ajoutez votre code ici
echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//d'informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';
//ajoutez votre code ici
$videotheque = array(
  array(
    'nom' => 'Independance day',
    'date' => 1996,
    'realisateur' => 'Roland Emmerich',
    'acteurs' => array(
      'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
    ),
  ),
  array(
    'nom' => 'Bienvenue a Gattaca',
    'date' => 1998,
    'realisateur' => 'Andrew Niccol',
    'acteurs' => array(
      'Ethan Hawke', 'Uma Thurman', 'Jude Law',
    ),
  ),
  array(
    'nom' => 'Forrest Gump',
    'date' => 1994,
    'realisateur' => 'Robert Zemeckis',
    'acteurs' => array(
      	'Tom Hanks', 'Gary Sinise',
    ),
  ),
  array(
    'nom' => '12 hommes en colere',
    'date' => 1957,
    'realisateur' => 'Sidney Lumet',
    'acteurs' => array(
      	'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
    ),
  ),
  array(
    'nom' => 'Matrix',
    'date' => '1999',
    'realisateur' => 'Wachoswki',
    'acteurs' => array(
      'Keanu Reeves', 'Laurence Fishburne', 'Hugo Weaving',
    ),
    'synopsis' => 'Thomas A. Anderson, un jeune informaticien connu dans le monde du hacking sous le pseudonyme de Neo, est contacté via son ordinateur par ce qu’il pense être un groupe de hackers. Ils lui font découvrir que le monde dans lequel il vit n’est qu’un monde virtuel dans lequel les êtres humains sont gardés sous contrôle.
    Morpheus, le capitaine du Nebuchadnezzar, contacte Néo et pense que celui-ci est l’Élu qui peut libérer les êtres humains du joug des machines et prendre le contrôle de la matrice.',
  ),
  array(
    'nom' => 'Constantine',
    'date' => 2005,
    'realisateur' => 'Francis Lawrence',
    'acteurs' => array(
      'Keanu Reeves ', 'Rachel Weisz ', 'Tilda Swinton ',
    ),
    'synopsis' => "John Constantine est inspecteur du paranormal et exorciste. Il est atteint d'un cancer du poumon en phase terminale et promis à l'enfer, en raison d'une tentative de suicide dans sa jeunesse. Après avoir manqué d'échouer lors d'une mission, en chassant un démon du corps d'une enfant, il fait la rencontre d'Angela Dodson, une femme policier dont la sœur jumelle vient de se suicider. Elle se refuse pourtant à y croire, persuadée qu'on l'a assassinée. Constantine et Dodson, aidés de Chas Kramer et de Papa Midnight, vont tenter d'élucider ce mystère. Mais au Mexique un mineur a découvert la Lance du destin et, sous l'influence de son pouvoir, part pour Los Angeles libérer le fils de Satan. Le démon tentera de s'incarner à travers le corps d'Angela, la mission de Constantine sera de l'en empêcher."
  ),
  array(
    'nom' => 'Seigneur des anneaux : La communeauté de lanneau',
    'date' => 2001,
    'realisateur' => 'Peter Jackson',
    'acteurs' => array(
      'Elijaw Wood', 'Kate Blanchette', 'Hugo Weaving', 'Ian McKellen',
    ),
    'synopsis' => "Dans ce chapitre de la trilogie, le jeune et timide Hobbit, Frodon Sacquet, hérite d'un anneau. Bien loin d'être une simple babiole, il s'agit de l'Anneau Unique, un instrument de pouvoir absolu qui permettrait à Sauron, le Seigneur des ténèbres, de régner sur la Terre du Milieu et de réduire en esclavage ses peuples. À moins que Frodon, aidé d'une Compagnie constituée de Hobbits, d'Hommes, d'un Magicien, d'un Nain, et d'un Elfe, ne parvienne à emporter l'Anneau à travers la Terre du Milieu jusqu'à la Crevasse du Destin, lieu où il a été forgé, et à le détruire pour toujours. Un tel périple signifie s'aventurer très loin en Mordor, les terres du Seigneur des ténèbres, où est rassemblée son armée d'Orques maléfiques... La Compagnie doit non seulement combattre les forces extérieures du mal mais aussi les dissensions internes et l'influence corruptrice qu'exerce l'Anneau lui-même.
    L'issue de l'histoire à venir est intimement liée au sort de la Compagnie."
  )
);

foreach ($videotheque as $key => $film){
  echo "</br></br>";
  foreach ($film as $key1 => $value){
    if(!is_array($value)){
    echo $value." "."</br>";
  }
    foreach ($value as $value){
      echo $value;
    }
  }
}
echo '<br><br>';
