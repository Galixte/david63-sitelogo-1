<?php
/**
 *
 * Site Logo. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2017 david63>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'BANNER_HEIGHT'						=> 'Hauteur de la bannière',
	'BANNER_HEIGHT_EXPLAIN'				=> 'Permet de saisir les dimensions de la zone dédiée à l’image de la bannière du forum/site. Il peut être nécessaire que l’image actuelle soit redimensionnée afin de s’adapter à cet espace, auquel cas contraire elle ne pourra s’afficher correctement.',
	'BANNER_OPTIONS'					=> 'Options de la bannière',
	'BANNER_RADIUS'						=> 'Arrondir la bannière',
	'BANNER_RADIUS_EXPLAIN'				=> 'Permet de définir le nombre de pixels pour l’arrondissement des angles de la bannière. Saisir 0 pour attribuer des angles droits à la bannière.',

	'CLICK_TO_SELECT'					=> 'Cliquer dans le cadre pour sélectionner une couleur',

	'EXTENDED_SITE_DESCRIPTION'			=> 'Description avancée',
	'EXTENDED_SITE_DESCRIPTION_EXPLAIN'	=> 'Permet de saisir une description du forum/site dépassant la limite standard des 255 caractères.<br /><strong>Note :</strong> Cela étant dit, si le nombre de caractères saisis est trop grand, il peut y avoir des « effets secondaires » nuisibles visuellement - la plupart d’entre eux pouvant être résolus en ajustant certaines des autres options.',

	'HEADER_COLOUR'						=> 'Couleur de l’entête',
	'HEADER_COLOUR_EXPLAIN'				=> 'Permet de sélectionner une couleur pour l’arrière-plan de l’entête.<br />Si cette option est paramétrée, et dans la mesure du possible, le même dégradé que celui utilisé sur la couleur d’arrière-plan du style « prosilver » sera appliqué.<br /><em>Par défaut la valeur est définie à : #12A3EB</em>.',
	'HEADER_OPTIONS'					=> 'Options de l’entête',

	'LOGO_CENTRE'						=> 'Centre',
	'LOGO_LEFT'							=> 'Gauche',
	'LOGO_RIGHT'						=> 'Droite',

	'OVERRIDE_COLOUR'					=> 'Remplacer la couleur',
	'OVERRIDE_COLOUR_EXPLAIN'			=> 'Permet de sélectionner une couleur pour le « Nom du site » et la « Description du site » remplaçant celle définie dans le style.',

	'PIXELS'							=> 'px',

	'REMOVE_HEADER_BAR'					=> 'Masquer l’entête',
	'REMOVE_HEADER_BAR_EXPLAIN'			=> 'Permet de ne pas afficher l’entête du forum/site.',
	'REPEAT_BACKGROUND'					=> 'Répéter l’arrière-plan',
	'REPEAT_BACKGROUND_EXPLAIN'			=> 'Permet d’appliquer une répétition sur l’affichage de l’arrière-plan.',

	'SEARCH_OPTIONS'					=> 'Options de la boite de recherche',
	'SITE_BACKGROUND'					=> 'Arrière-plan',
	'SITE_BACKGROUND_IMAGE'				=> 'Chemin de l’arrière-plan',
	'SITE_BACKGROUND_IMAGE_EXPLAIN'		=> 'Laisser le champ vide pour utiliser l’arrière-plan par défaut.<br />Permet d’utiliser une image distante comme arrière-plan personnalisé en saisissant l’adresse URL complète, autrement, just enter the location of the image.<br /><em>Par exemple : images/mon_arriere_plan.jpg - ou<br />http://unsite_site.fr/nouveau_arriere_plan.png</em>.',
	'SITE_LOGO_EXPLAIN'					=> 'Sur cette page il est possible de paramétrer les options de personnalisation de certains éléments du forum/site, tels que : le logo, la bannière, le nom, la description, l’entête et l’arrière-plan.<br /><br /><strong>Note :</strong> Toutes les options ci-dessous ne fonctionnent pas forcément de concert, l’utilisation de certaines options combinées à d’autres peut produire des résultats non désirés.',
	'SITE_LOGO_BANNER_IMAGE'			=> 'Chemin de la bannière',
	'SITE_LOGO_BANNER_IMAGE_EXPLAIN'	=> 'Laisser le champ vide pour utiliser la bannière par défaut.<br />Permet d’utiliser une image distante comme bannière personnalisée en saisissant l’adresse URL complète de l’image, autrement, par le chemin de cette dernière.<br /><em>Par exemple : images/ma_banniere.jpg - ou<br />http://unsite.fr/nouvelle_banniere.png</em>.',
	'SITE_LOGO_HEIGHT'					=> 'Hauteur du logo',
	'SITE_LOGO_HEIGHT_EXPLAIN'			=> 'Laisser le champ vide pour utiliser la hauteur par défaut.<br /><em>La hauteur par défaut du logo est de 52px</em>.',
	'SITE_LOGO_IMAGE'					=> 'Chemin vers le logo personnalisé',
	'SITE_LOGO_IMAGE_EXPLAIN'			=> 'Laisser le champ vide pour utiliser le logo par défaut.<br />Permet d’utiliser une image distante comme logo personnalisé en saisissant l’adresse URL complète, autrement, par le chemin de ce dernier.<br /><em>Par exemple : images/mon_logo.jpg - ou<br />http://unsite.fr/nouveau_logo.png</em>.',
	'SITE_LOGO_LEFT'					=> 'Coins à gauche',
	'SITE_LOGO_LEFT_EXPLAIN'			=> 'Permet d’arrondir les coins du côté gauche pour correspondre à la bannière.',
	'SITE_LOGO_OPTIONS'					=> 'Options du logo',
	'SITE_LOGO_PIXELS'					=> 'Arrondir le logo',
	'SITE_LOGO_PIXELS_EXPLAIN'			=> 'Permet de définir le nombre de pixels pour l’arrondissement des angles du logo.<br /><em>La valeur par défaut sous le style « prosilver » est de : 7px.</em>',
	'SITE_LOGO_POSITION'				=> 'Emplacement du logo',
	'SITE_LOGO_REMOVE'					=> 'Masquer le logo',
	'SITE_LOGO_REMOVE_EXPLAIN'			=> 'Permet de ne pas afficher le logo du forum/site.',
	'SITE_LOGO_RESPONSIVE'				=> 'Affichage adaptatif',
	'SITE_LOGO_RESPONSIVE_EXPLAIN'		=> 'Permet aux options liées au logo d’avoir un affichage adaptatif selon les périphériques utilisées telles que les téléphones mobiles et les tablettes.',
	'SITE_LOGO_RIGHT'					=> 'Coins à droite',
	'SITE_LOGO_RIGHT_EXPLAIN'			=> 'Permet d’arrondir les coins du côté droit pour correspondre à la bannière.',
	'SITE_LOGO_SIZE_EXPLAIN'			=> '<strong>Permet de saisir les dimensions de la zone dédiée à l’image du logo du forum/site. Il peut être nécessaire que l’image actuelle soit redimensionnée afin de s’adapter à cet espace, auquel cas contraire elle ne pourra s’afficher correctement.',
	'SITE_LOGO_URL'						=> 'Lien du logo',
	'SITE_LOGO_URL_EXPLAIN'				=> 'Laisser le champ vide pour utiliser lien par défaut.<br />Permet de saisir l’adresse URL vers laquelle l’utilisateur sera redirigé lors du clic sur le logo du forum/site.<br /><em>Par exemple : mon_site/ma_page.php - ou<br />http://unsite.fr/une_page.html</em>.',
	'SITE_LOGO_WIDTH'					=> 'Largeur du logo',
	'SITE_LOGO_WIDTH_EXPLAIN'			=> 'Laisser le champ vide pour utiliser la largeur par défaut.<br /><em>La largeur par défaut du logo est de 149px</em>.',
	'SITE_NAME_BELOW'					=> 'Nom & description en dessous du logo',
	'SITE_NAME_BELOW_EXPLAIN'			=> 'Permet de déplacer le « Nom du site » et la « Description du site » en dessous du logo. Ainsi, la boite de recherche est déplacée dans la barre de navigation supérieure. Le texte est positionné à gauche, au centre ou à droite comme le logo.',
	'SITE_NAME_SUPRESS'					=> 'Masquer le texte',
	'SITE_NAME_SUPRESS_EXPLAIN'			=> 'Permet de ne pas afficher le « Nom du site » et la « Description du site ».',
	'SITE_SEARCH_IN_NAVBAR'				=> 'Déplacer la boite de recherche dans la barre de navigation',
	'SITE_SEARCH_IN_NAVBAR_EXPLAIN'		=> 'Permet de modifier l’emplacement de la boite de recherche dans la barre de navigation supérieure.<br />Ceci peut être utile lors de l’utilisation d’une bannière personnalisée.',
	'SITE_SEARCH_REMOVE'				=> 'Masquer la boite de recherche',
	'SITE_SEARCH_REMOVE_EXPLAIN'		=> 'Permet de ne pas afficher la boite de recherche dans le haut du forum/site.',

	'TEXT_OPTIONS'						=> 'Options du texte',

	'USE_BANNER'						=> 'Utiliser une bannière personnalisée',
	'USE_BANNER_EXPLAIN'				=> 'Permet de remplacer la bannière par défaut dans l’entête du forum/site.',
	'USE_EXTENED_SITE_DESC'				=> 'Utiliser une description avancée',
	'USE_EXTENED_SITE_DESC_EXPLAIN'		=> 'Permet de saisir une description plus longue en caractères que celle par défaut de l’entête du forum/site.',
	'USE_HEADER_COLOURS'				=> 'Utiliser des couleurs personnalisées',
	'USE_HEADER_COLOURS_EXPLAIN'		=> 'Permet de remplacer les couleurs par défaut de l’entête du forum/site.<br /><strong>Note :</strong> Cette option n’a aucun effet si « <em>Masquer l’entête</em> » est activée.',
	'USE_SOLID_HEADER_COLOURS'			=> 'Utiliser des couleurs unies',
	'USE_SOLID_HEADER_COLOURS_EXPLAIN'	=> 'Permet d’utiliser des couleurs unies en lieu et place du dégradé de l’entête du forum/site.<br /><strong>Note :</strong> Cette option requiert que « <em>Utiliser des couleurs personnalisées</em> » soit activée.',
	'USE_OVERRIDE_COLOUR'				=> 'Remplacer la couleur du texte',
	'USE_OVERRIDE_COLOUR_EXPLAIN'		=> 'Permet de remplacer la couleur par défaut des textes « Nom du site » et « Description du site » de l’entête du forum/site.',
	'USE_SITE_BACKGROUND'				=> 'Utiliser un arrière-plan',
	'USE_SITE_BACKGROUND_EXPLAIN'		=> 'Permet d’ajouter une image en arrière-plan du forum/site.',
));
