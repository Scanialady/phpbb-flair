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
	'MCP_FLAIR'			=> 'Profile Flair',
	'MCP_FLAIR_EXPLAIN'	=> 'Hier kannst du das Profile Flair von %s verwalten.<ul><li>Klicke auf die Schaltfläche <b>Setzen</b>, um den Zähler auf den angegebenen Wert zu einzustellen.</li><li>Klicke auf die Schaltfläche <b>&times;</b>, um ein Objekt zu entfernen.</li><li>Klicke auf die Schaltfläche <b>+</b>, um ein Objekt mit dem angegebenen Zähler.</li></ul>',

	'MCP_FLAIR_USER'	=> 'Benutzer-Flair verwalten',
	'MCP_FLAIR_FRONT'	=> 'Titelseite',

	'MCP_FLAIR_USER_FLAIR'		=> '%s’s Flair',
	'MCP_FLAIR_AVAILABLE'		=> 'Verfügbares Flair',
	'MCP_FLAIR_NO_FLAIR'		=> 'Dem Profil dieses Benutzers wurde noch kein Flair zugewiesen.',
	'MCP_FLAIR_NO_AVAILABLE'	=> 'Es sind keine Flair-Objekte verfügbar.',
	'MCP_FLAIR_ADD_TITLE'		=> 'Füge “%1$s” zum Profil von %2$s hinzu',
	'MCP_FLAIR_SET_COUNT_TITLE'	=> 'Setze den Zähler von “%1$s” auf dem Profil von %2$s.',
	'MCP_FLAIR_REMOVE_TITLE'	=> 'Entferne “%1$s” aus dem Profil von %2$s.',
	'MCP_FLAIR_REMOVE_CONFIRM'	=> 'Bist du sicher, dass du dieses Objekt entfernen möchtest?',

	'MCP_FLAIR_SET'	=> 'Setzen',
));
