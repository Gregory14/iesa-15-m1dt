<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
	// Tableau 1 
	$articles = array(
		"title" => "Foot - JAP - Vahid Halilhodzic appelle 31 joueurs pour ses premiers matches avec le Japon",
		"link" => "http://www.lequipe.fr/Football/Actualites/Vahid-halilhodzic-appelle-31-joueurs-pour-ses-premiers-matches-avec-le-japon/544304#xtor=RSS-1",
		"description" => "NommÃ© officiellement sÃ©lectionneur du Japon le 12 mars, Vahid... ",
		"pubDate" => "Thu, 19  Mar 2015 10:40:00 +0100"
		);

	// Tableau 2
	$articles2 ["title"] = "Foot - C1 - Concacaf - L'Impact MontrÃ©al vers la finale de la C1 Concacaf !";
	$articles2 ["link"] = "http://www.lequipe.fr/Football/Actualites/L-impact-montreal-vers-la-finale-de-la-c1-concacaf/544301#xtor=RSS-1";
	$articles2 ["description"] = "Champion du Canada, l'Impact MontrÃ©al est tout proche de se qualifier... ";
	$articles2 ["pubDate"] = "Thu, 19  Mar 2015 10:37:00 +0100";

	$articles3 = array(
		"title" => "Foot - ANG - Arsenal - Debuchy lÃ  le 11 avril ?",
		"link" => "http://www.lequipe.fr/Football/Actualites/Debuchy-la-le-11-avril/544299#xtor=RSS-1",
		"description" => "TouchÃ© Ã  une Ã©paule le 11 janvier dernier, Mathieu Debuchy n'aura pas... ",
		"pubDate" => "Thu, 19  Mar 2015 10:27:00 +0100"
		);

	$articles4 ["title"] = "Foot - ALL - Bayern - Patrick Vieira futur entraÃ®neur des moins de 23 ans du Bayern Munich?";
	$articles4 ["link"] = "http://www.lequipe.fr/Football/Actualites/Nabil-fekir-va-t-il-etre-appele-par-didier-dechamps-pour-les-prochains-matches-des-bleus/544293#xtor=RSS-1";
	$articles4 ["description"] = "Une semaine aprÃ¨s avoir optÃ© pour l'Ã©quipe de France, Nabil Fekir... ";
	$articles4 ["pubDate"] = "Thu, 19  Mar 2015 10:00:00 +0100";

	$articles5 = array(
		"title" => "Foot - ANG - Un Anglais a Ã©tÃ© arrÃªtÃ© pour avoir filmÃ© des matches de Premier League avec un drone",
		"link" => "http://www.lequipe.fr/Football/Actualites/Un-anglais-a-ete-arrete-pour-avoir-filme-des-matches-de-premier-league-avec-un-drone/544285#xtor=RSS-1",
		"description" => "Un Anglais de 43 ans a Ã©tÃ© arrÃªtÃ© par la police londonienne pour... ",
		"pubDate" => "Thu, 19  Mar 2015 08:44:00 +0100"
		);

var_dump($articles);
var_dump($articles2);
var_dump($articles3);
var_dump($articles4);
var_dump($articles5);

// Afficher la news sous forme de liste
function buildHtmlNews($articles) {
		return "<ul>".
			"<li>".$articles['title']."</li>".
			"<li>".$articles['link']."</li>".
			"<li>".$articles['description']."</li>".
			"<li>".$articles['pubDate']."</li>".
		"</ul>";
}

echo buildHtmlNews($articles);

// Affichage de la news sous forme de tableau
function buildTableNews($articles2) {
		return "<table>".
			"<tr><td>Titre : </td><td>".$articles2['title']."</td></tr>".
			"<tr><td>Lien : </td><td>".$articles2['link']."</td></tr>".
			"<tr><td>Description : </td><td>".$articles2['description']."</td></tr>".
			"<tr><td>Publié le : </td><td>".$articles2['pubDate']."</td></tr>".
		"</table>";
}

echo buildTableNews($articles2);

// Utilisation de foreach
function buildRow($news) {
	$row;
	foreach ($news as $key => $value) {
		$row .= "<tr><td>".$key." : </td><td>".$value."</td></tr>";
	}
	return $row;
}

echo "<table>".buildRow($articles4)."</table>";

?>

</body>
</html>