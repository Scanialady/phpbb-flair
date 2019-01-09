<?php
/**
 *
 * Profile Flair. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Steve Guidetti, https://github.com/stevotvr
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
	'ACP_FLAIR_TITLE'	=> 'Profile Flair',

	'ACP_FLAIR_SETTINGS'					=> 'Einstellungen',
	'ACP_FLAIR_SETTINGS_TITLE'				=> 'Profile Flair Einstellungen',
	'ACP_FLAIR_OPTIONS'						=> 'Allgemeine Optionen',
	'ACP_FLAIR_NOTIFY_USERS'				=> 'Benachrichtigungen aktivieren',
	'ACP_FLAIR_NOTIFY_USERS_EXPLAIN'		=> 'Aktiviere dies, um zu erlauben, dass Benutzer Benachrichtigungen erhalten, wenn eine neue Profile Flair Auszeichnung ihrem Profil hinzugefügt wurde.',
	'ACP_FLAIR_DISPLAY_OPTIONS'				=> 'Optionen anzeigen',
	'ACP_FLAIR_SHOW_ON_PROFILE'				=> 'In Profilen anzeigen',
	'ACP_FLAIR_SHOW_ON_PROFILE_EXPLAIN'		=> 'Aktiviere dies, um die Profile Flair-Auszeichnungen auf den Profilseiten angezeigt zu bekommen.',
	'ACP_FLAIR_SHOW_ON_POSTS'				=> 'In Beiträgen anzeigen',
	'ACP_FLAIR_SHOW_ON_POSTS_EXPLAIN'		=> 'Aktiviere dies, um die Profile Flair-Auszeichnungen im Benutzerinfo-Bereich jedes Beitrages angezeigt zu bekommen.',
	'ACP_FLAIR_DISPLAY_LIMIT'				=> 'Anzeige begrenzen',
	'ACP_FLAIR_DISPLAY_LIMIT_EXPLAIN'		=> 'Begrenzt die Anzahl der Flair-Objekte, die in Beiträgen angezeigt werden können. Gib 0 ein, wenn keine Begrenzung gelten soll.',
	'ACP_FLAIR_SETTINGS_SAVED'				=> 'Profile Flair-Optionen erfolgreich gespeichert',

	'ACP_FLAIR_MANAGE_CATS'				=> 'Kategorien verwalten',
	'ACP_FLAIR_MANAGE_CATS_EXPLAIN'		=> 'Flairobjekte können in Kategorien gruppiert werden, welche hier verwaltet werden.',
	'ACP_FLAIR_CATS_EMPTY'				=> 'Keine Kategorien',
	'ACP_FLAIR_ADD_CAT'					=> 'Flairkategorie hinzufügen',
	'ACP_FLAIR_CATS_ADD_SUCCESS'		=> 'Flairkategorie erfolgreich hinzugefügt',
	'ACP_FLAIR_EDIT_CAT'				=> 'Flairkategorie bearbeiten',
	'ACP_FLAIR_CATS_EDIT_SUCCESS'		=> 'Details der Flairkategorie erfolgreich gespeichert',
	'ACP_FLAIR_CAT_DETAILS'				=> 'Kategoriedetails',
	'ACP_FLAIR_DELETE_CAT'				=> 'Kategorie löschen',
	'ACP_FLAIR_CATS_DELETE_SUCCESS'		=> 'Flairkategorie erfolgreich gelöscht',
	'ACP_FLAIR_CATS_DELETE_ERRORED'		=> 'Bei dem Versuch die Flairkategorie zu löschen, ist ein Fehler aufgetreten.',
	'ACP_FLAIR_DELETE_FLAIR_CONFIRM'	=> 'Bist du sicher, dass du dieses Objekt löschen möchtest?',
	'ACP_FLAIR_FORM_CAT_NAME'			=> 'Kategoriename',
	'ACP_FLAIR_FORM_DELETE_ALL_FLAIR'	=> 'Lösche alle Flair-Auszeichnungen',
	'ACP_FLAIR_FORM_MOVE_FLAIR_TO'		=> 'Verschiebe Flair nach ',

	'ACP_FLAIR_MANAGE'				=> 'Flair verwalten',
	'ACP_FLAIR_MANAGE_EXPLAIN'		=> 'Hier kannst du Flairobjekte hinzufügen, bearbeiten oder löschen.',
	'ACP_FLAIR_EMPTY'				=> 'Keine Flairobjekte',
	'ACP_FLAIR_ADD'					=> 'Flairobjekt hinzufügen',
	'ACP_FLAIR_ADD_SUCCESS'			=> 'Flairobjekt erfolgreich hinzugefügt',
	'ACP_FLAIR_EDIT'				=> 'Flairobjekt bearbeiten',
	'ACP_FLAIR_EDIT_SUCCESS'		=> 'Details des Flair-Objekts erfolgreich gespeichert',
	'ACP_FLAIR_DETAILS'				=> 'Flairdetails',
	'ACP_FLAIR_APPEARANCE'			=> 'Flairdarstellung',
	'ACP_FLAIR_AUTO_ASSIGN'			=> 'Flair-Autozuordnung',
	'ACP_FLAIR_DELETE_SUCCESS'		=> 'Flairobjekt erfolgreich gelöscht',
	'ACP_FLAIR_DELETE_ERRORED'		=> 'Bei dem Versuch das Flairobjekt zu löschen, ist ein Fehler aufgetreten.',
	'ACP_FLAIR_TYPE'				=> 'Flairtyp',
	'ACP_FLAIR_FORM_CAT'			=> 'Flairkategory',
	'ACP_FLAIR_FORM_NAME'			=> 'Flairname',
	'ACP_FLAIR_FORM_DESC'			=> 'Flairbeschreibung',
	'ACP_FLAIR_FORM_PREVIEW'		=> 'Flairvorschau',
	'ACP_FLAIR_FORM_COLOR'			=> 'Flairfarbe',
	'ACP_FLAIR_FORM_ICON'			=> 'Flairsymbol',
	'ACP_FLAIR_FORM_ICON_COLOR'		=> 'Flairsymbolfarbe',
	'ACP_FLAIR_FORM_IMG'			=> 'Flairbild',
	'ACP_FLAIR_NO_IMGS'				=> 'Keine Bildersätze gefunden in <b>images/flair</b>.',
	'ACP_FLAIR_FORM_FONT_COLOR'		=> 'Flairschriftfarbe',
	'ACP_FLAIR_FORM_GROUPS'			=> 'Gruppenzuordnungen',
	'ACP_FLAIR_FORM_GROUPS_AUTO'	=> 'Automatisch zu Gruppen zuordnen',

	'ACP_FLAIR_DESC_EXPLAIN'		=> 'Eine optionale Kurzbeschreibung, die in der Flairlegende erscheinen wird.',
	'ACP_FLAIR_COLOR_EXPLAIN'		=> 'Die Hintergrundfarbe des Objekts. Lass dies frei, wenn kein Hintergrund gewünscht wird.',
	'ACP_FLAIR_ICON_EXPLAIN'		=> 'Gib hier einen optionalen Font Awesome Icon Identifier an, der dieses Objekt repräsentieren soll. [&nbsp;<a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Liste der Font Awesome Icons</a>&nbsp;]',
	'ACP_FLAIR_ICON_COLOR_EXPLAIN'	=> 'Die Farbe des Symbols, falls vorhanden.',
	'ACP_FLAIR_IMG_EXPLAIN'			=> 'Die benutzerdefinierte Bilddatei.',
	'ACP_FLAIR_FONT_COLOR_EXPLAIN'	=> 'Die Farbe des Flair-Zählertextes, wenn ein Benutzer mehrere gleiche Objekte besitzt. Lass dies frei, um den Zähler zu verbergen.',
	'ACP_FLAIR_GROUPS_EXPLAIN'		=> 'Mitglieder der hier gewählten Gruppen haben automatisch Zugriff auf dieses Flairobjekt.',
	'ACP_FLAIR_GROUPS_AUTO_EXPLAIN'	=> 'Wenn dies aktiviert ist, wird Mitgliedern der oben ausgewählten Gruppen dieses Objekt automatisch dem Profil hinzugefügt.   Andernfalls können Gruppenmitglieder dieses Element ihrem eigenen Profil im UCP zuordnen.',

	'ACP_FLAIR_TRIGGER_POST_COUNT'				=> 'Beitragszähler',
	'ACP_FLAIR_TRIGGER_POST_COUNT_EXPLAIN'		=> 'Stelle hier das Beitragsminimum ein, welches ein Benutzer haben muss, um dieses Objekt automatisch zu empfangen. Lasse das Feld leer, um es zu deaktivieren.',
	'ACP_FLAIR_TRIGGER_MEMBERSHIP_DAYS'			=> 'Tage registriert',
	'ACP_FLAIR_TRIGGER_MEMBERSHIP_DAYS_EXPLAIN'	=> 'Stelle hier die minimale Anzahl an Tagen ein, die ein Benutzer registriert sein muss, um automatisch dieses Objekt zu empfangen. Lass das Feld frei, um es zu deaktivieren.',

	'ACP_FLAIR_IMAGES'						=> 'Bilder verwalten',
	'ACP_FLAIR_IMAGES_EXPLAIN'				=> 'Hier können Sie benutzerdefinierte Symbolbilder anzeigen, hochladen oder löschen. Du kannst keine Bilder löschen, die gerade von einem oder mehreren Flairobjekten verwendet werden.',
	'ACP_FLAIR_IMGS_EMPTY'					=> 'Es wurden keine benutzerdefinierten Bildersätze gefunden.',
	'ACP_FLAIR_ADD_IMG'						=> 'Bild hinzufügen',
	'ACP_FLAIR_ADD_IMGS'					=> 'Bilder hinzufügen',
	'ACP_FLAIR_IMG_TABLE_EXPLAIN'			=> 'Du kannst deine benutzerdefinierten Symbole nach <b>images/flair</b> hochladen. SVG-Bilder können hochgeladen werden wie sie sind. Jedes Symbol im Format GIF, PNG, oder JPEG erfordert folgende Dateien:',
	'ACP_FLAIR_IMG_TABLE_NAME'				=> 'Dateiname',
	'ACP_FLAIR_IMG_TABLE_SIZE'				=> 'Empfohlene Höhe',
	'ACP_FLAIR_IMG_TABLE_PLACEHOLDER'		=> 'icon_name',
	'ACP_FLAIR_IMG_TABLE_PX'				=> 'px',
	'ACP_FLAIR_IMG_UPLOADING'				=> 'Automatisches Hochladen von Bildern',
	'ACP_FLAIR_UPLOAD_IMG'					=> 'Bild hochladen',
	'ACP_FLAIR_IMG_ADD_SUCCESS'				=> 'Benutzerdefiniertes Bild erfolgreich hinzugefügt',
	'ACP_FLAIR_IMG_DELETE_SUCCESS'			=> 'Benutzerdefiniertes Bild erfolgreich gelöscht',
	'ACP_FLAIR_IMG_DELETE_ERRORED'			=> 'Bei dem Versuch, das benutzerdefinierte Bild zu löschen, ist ein Fehler aufgetreten.',
	'ACP_FLAIR_DELETE_IMG_CONFIRM'			=> 'Bist du sicher, dass du dieses Objekt löschen möchtest?',
	'ACP_FLAIR_FORM_IMG_FILE'				=> 'Bilddatei',
	'ACP_FLAIR_FORM_IMG_FILE_EXPLAIN'		=> 'Wähle das Quellbild aus. Du kannst jede GIF, PNG, JPEG, oder SVG Datei auswählen. Empfohlen wird ein quadratisches Bild von mindestens 66px in der Höhe.',
	'ACP_FLAIR_FORM_IMG_OVERWRITE'			=> 'Vorhandenes überschreiben',
	'ACP_FLAIR_FORM_IMG_OVERWRITE_EXPLAIN'	=> 'Aktiviert dauerhaftes Überschreiben jedes mit dem gleichen Namen vorhandenen Bildes.',

	'ACP_FLAIR_NAME'		=> 'Name',
	'ACP_FLAIR_DISPLAY_ON'	=> 'Anzeigen in',
	'ACP_FLAIR_PROFILE'		=> 'Profil',
	'ACP_FLAIR_POSTS'		=> 'Beiträgen',

	'ACP_FLAIR_TYPE_FA'		=> 'Font Awesome',
	'ACP_FLAIR_TYPE_IMG'	=> 'Benutzerdefiniertes Bild',

	'ACP_ERROR_APPEARANCE_REQUIRED'	=> 'Du musst entweder eine Farbe oder ein Symbol für das Flairobjekt festlegen.',
	'ACP_ERROR_IMG_REQUIRED'		=> 'Du musst ein Bild für das Flairobjekt festlegen.',
	'ACP_ERROR_NOT_WRITABLE'		=> 'Der Ordner <b>images/flair</b> ist nicht beschreibbar.',
	'ACP_ERROR_NO_IMG_LIB'			=> 'Du musst Imagemagick (empfohlen) oder GD installieren/aktivieren, um diese Funktion mit Rasterbildern zu verwenden. Nur SVG-Bilder werden verwendbar sein.',
	'ACP_ERROR_UPLOAD_INVALID'		=> 'Die von dir ausgewählte Datei ist keine zugelassene Bilddatei.',
	'ACP_ERROR_NOT_UPLOADED'		=> 'Das Hochladen des Bildes ist fehlgeschlagen.',
));
