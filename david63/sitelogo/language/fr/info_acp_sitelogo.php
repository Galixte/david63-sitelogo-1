<?php
/**
*
* Site Logo extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'BANNER_OPTIONS'					=> 'Options de la bannière',
	'BANNER_RADIUS'						=> 'Arrondir la bannière',
	'BANNER_RADIUS_EXPLAIN'				=> 'Permet de définir le nombre de pixels pour l’arrondissement des angles de la bannière. En paramétrant sur 0 la bannière aura des angles droits.',

	'EXTENDED_SITE_DESCRIPTION'			=> 'Description du site avancée',
	'EXTENDED_SITE_DESCRIPTION_EXPLAIN'	=> 'Permet de créer une description du site dépassant la limite standard des 255 caractères.<br /><strong>Note :</strong> Cela étant dit, si le nombre de caractères saisis est trop grand, il peut y avoir des « effets secondaires » nuisibles visuellement - la plupart d’entre eux pouvant être résolus en ajustant certaines des autres options.',

	'LOGO_CENTRE'						=> 'Centre',
	'LOGO_LEFT'							=> 'Gauche',
	'LOGO_RIGHT'						=> 'Droite',

	'OVERRIDE_COLOUR'					=> 'Remplacer la couleur',
	'OVERRIDE_COLOUR_EXPLAIN'			=> 'Permet de paramétrer une couleur pour le « Nom du site » et la « Description du site » remplaçant celle définie dans le style.',

	'PIXELS'							=> 'px',

	'SEARCH_OPTIONS'					=> 'Options de la boite de recherche',

	'SITE_LOGO'							=> 'Logo du site personnalisé',
	'SITE_LOGO_EXPLAIN'					=> 'Sur cette page il est possible de paramétrer les options de personnalisation du logo du site afin de remplacer celui par défaut, ainsi que de personnaliser une bannière et la description du forum.',
	'SITE_LOGO_BANNER_IMAGE'			=> 'Chemin vers la bannière personnalisée',
	'SITE_LOGO_BANNER_IMAGE_EXPLAIN'	=> 'Laisser vide pour utiliser le logo par défaut.<br />Pour utiliser une image distante comme bannière saisir l’adresse URL complète de l’image, autrement, par le chemin de cette dernière sur le site.<br /><i>Voici deux exemples : images/ma_banniere.jpg<br />http://monsite.fr/nouvelle_banniere.png</i>',
	'SITE_LOGO_HEIGHT'					=> 'Hauteur du logo',
	'SITE_LOGO_HEIGHT_EXPLAIN'			=> 'Laisser vide pour utiliser la hauteur par défaut du logo.<br /><i>La hauteur par défaut du logo est de 52px</i>.',
	'SITE_LOGO_IMAGE'					=> 'Chemin vers le logo personnalisé',
	'SITE_LOGO_IMAGE_EXPLAIN'			=> 'Permet d’utiliser le logo par défaut en laissant le champ vide.<br />Pour utiliser une image distante comme logo, saisir l’adresse URL complète, autrement, par le chemin de ce dernier sur le site.<br /><i>Voici deux exemples : images/mon_logo.jpg<br />http://monsite.fr/nouveau_logo.png</i>',
	'SITE_LOGO_LEFT'					=> 'Coins à gauche',
	'SITE_LOGO_LEFT_EXPLAIN'			=> 'Permet d’arrondir les coins du côté gauche pour correspondre à la bannière.',
	'SITE_LOGO_LOG'						=> '<strong>Les options du logo du site personnalisé ont été mises à jour</strong>',
	'SITE_LOGO_MANAGE'					=> 'Gérer le logo du site',
	'SITE_LOGO_OPTIONS'					=> 'Options du logo',
	'SITE_LOGO_PIXELS'					=> 'Arrondir le logo',
	'SITE_LOGO_PIXELS_EXPLAIN'			=> 'Permet de définir le nombre de pixels pour l’arrondissement des angles du logo.',
	'SITE_LOGO_POSITION'				=> 'Position du logo du site',
	'SITE_LOGO_REMOVE'					=> 'Retirer le logo du site',
	'SITE_LOGO_REMOVE_EXPLAIN'			=> 'Permet de ne pas afficher le logo du site.',
	'SITE_LOGO_RIGHT'					=> 'Coins à droite',
	'SITE_LOGO_RIGHT_EXPLAIN'			=> 'Permet d’arrondir les coins du côté droit pour correspondre à la bannière.',
	'SITE_LOGO_WIDTH'					=> 'Largeur du logo',
	'SITE_LOGO_WIDTH_EXPLAIN'			=> 'Laisser vide pour utiliser la largeur par défaut du logo.<br /><i>La largeur par défaut du logo est de 149px</i>.',

	'SITE_NAME_BELOW'					=> 'Nom & description du site en dessous du logo',
	'SITE_NAME_BELOW_EXPLAIN'			=> 'Permet de déplacer le « Nom du site » et la « Description du site » en dessous du logo. Ainsi, la boite de recherche est déplacée dans la barre de navigation supérieure. Le texte est positionné à gauche, au centre ou à droite comme le logo.',
	'SITE_NAME_SUPRESS'					=> 'Désactiver l’affichage du texte',
	'SITE_NAME_SUPRESS_EXPLAIN'			=> 'Permet de ne pas afficher le « Nom du site » et la « Description du site ».',

	'SITE_SEARCH_IN_NAVBAR'				=> 'Déplacer la boite de recherche dans la barre de navigation',
	'SITE_SEARCH_IN_NAVBAR_EXPLAIN'		=> 'Permet de modifier l’emplacement de la boite de recherche dans la barre de navigation supérieure.<br />Ceci peut être utile lors de l’utilisation d’une bannière personnalisée.',
	'SITE_SEARCH_REMOVE'				=> 'Retirer la boite de recherche',
	'SITE_SEARCH_REMOVE_EXPLAIN'		=> 'Permet de ne pas afficher la boite de recherche dans le haut du forum.',

	'TEXT_OPTIONS'						=> 'Options du texte',

	'USE_BANNER'						=> 'Utiliser une bannière personnalisée',
	'USE_BANNER_EXPLAIN'				=> 'Permet d’ajouter une bannière personnalisée dans l’entête du forum.',
	'USE_EXTENED_SITE_DESC'				=> 'Utiliser une description du site avancée',
	'USE_EXTENED_SITE_DESC_EXPLAIN'		=> 'Permet de remplacer la description du site standard par une description plus longue.',
	'USE_OVERRIDE_COLOUR'				=> 'Remplacer la couleur par défaut',
	'USE_OVERRIDE_COLOUR_EXPLAIN'		=> 'Permet de modifier la couleur à utiliser dans le « Nom du site » et la « Description du site ».',
));
