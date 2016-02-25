<?php
/**
*
* info_acp_usu [English]
* @package Ultimate SEO URL phpBB SEO
* @version $$
* @copyright (c) 2006 - 2014 www.phpbb-seo.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
/**
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
	'ACP_CAT_PHPBB_SEO'	=> 'phpBB SEO',
	'ACP_MOD_REWRITE'	=> 'Ustawienia nadpisywania URL',
	'ACP_PHPBB_SEO_CLASS'	=> 'Ustawienia phpBB SEO',
	'ACP_FORUM_URL'	=> 'Zarządzanie adresami forum',
	'ACP_REWRITE_CONF' => 'Konfiguracja serwera',
	'ACP_SEO_EXTENDED' => 'Rozszerzona konfiguracja',
	'ACP_SYNC_URL' => 'Synchronizacja URL',
	'ACP_PREMOD_UPDATE' => '<h1>Release announcement</h1>
	<p>This update does only concern the premod, not the phpBB core.</p>
	<p>A new version of the phpBB SEO premod is thus available : %1$s<br/>Make sure you visit<a href="%2$s" title="The release thread"><b>the release thread</b></a> and update your installation.</p>',
	'SEO_LOG_INSTALL_PHPBB_SEO' => '<strong>phpBB SEO mod rewrite installed (v%s)</strong>',
	'SEO_LOG_INSTALL_PHPBB_SEO_FAIL' => '<strong>phpBB SEO mod rewrite install attempt failed</strong><br/>%s',
	'SEO_LOG_UNINSTALL_PHPBB_SEO' => '<strong>phpBB SEO mod rewrite uninstalled (v%s)</strong>',
	'SEO_LOG_UNINSTALL_PHPBB_SEO_FAIL' => '<strong>phpBB SEO mod rewrite uninstall attempts failed</strong><br/>%s',
	'SEO_LOG_CONFIG_SETTINGS' => '<strong>Zmieniono ustawienia klasy phpBB SEO</strong>',
	'SEO_LOG_CONFIG_FORUM_URL' => '<strong>Zmieniono URLe forum</strong>',
	'SEO_LOG_CONFIG_HTACCESS' => '<strong>Wygenerowano nowy .htaccess</strong>',
	'SEO_LOG_CONFIG_EXTENDED' => '<strong>Zmieniono rozszerzoną konfigurację phpBB SEO</strong>',
));
