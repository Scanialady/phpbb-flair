<?php
/**
 *
 * Profile Flair. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Steve Guidetti, https://github.com/stevotvr
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'UCP_FLAIR'			=> 'Profile Flair verwalten',
	'UCP_FLAIR_EXPLAIN'	=> 'Hier kannst du deine Profile Flair-Auszeichnungen verwalten.<ul><li>Klicke auf die <i class="fa fa-star"></i>/<i class="fa fa-star-o"></i> Schaltfläche, um ein Objekt als Favoriten zu wählen/abzuwählen. Favoriten werden in deinem Profil zuerst angezeigt.</li><li>Klicke auf die  <b>&times;</b> Schaltfläche, um ein Objekt zu entfernen. Diese Option ist möglicherweise nicht für alle Objekte verfügbar.</li><li>Die Tafel <b>Verfügbares Flair</b> listet die Objekte auf, die du zu deinem eigenen Profil hinzufügen kannst.</li></ul>',

	'UCP_USER_FLAIR'			=> 'Dein Flair',
	'UCP_FLAIR_AVAILABLE'		=> 'Verfügbares Flair',
	'UCP_FLAIR_NO_FLAIR'		=> 'Du hast kein Flair',
	'UCP_FLAIR_NO_AVAILABLE'	=> 'Es ist kein Flair verfügbar',
	'UCP_FLAIR_ADD'				=> '“%s” hinzufügen',
	'UCP_FLAIR_REMOVE'			=> '“%s” entfernen',
	'UCP_FLAIR_FAV'				=> '“%s” zu Favoriten hinzufügen',
	'UCP_FLAIR_UNFAV'			=> '“%s” aus Favoriten entfernen',
	'UCP_FLAIR_REMOVE_CONFIRM'	=> 'Bist du sicher, dass du dieses Objekt entfernen möchtest?',

	'UCP_FLAIR_ADD_BUTTON'	=> 'Zum Profil hinzufügen',
));
