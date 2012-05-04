<?php
/**
*
* @author Original Author Michael O'Toole@www.stargate-portal.com
*
* @package {k_referrals.php}
* @version $Id:$ 3.2.0
* @note: Do not remove this copyright. Just append yours if you have modified it,
*        this is part of the Stargate Portal copyright agreement...
* @copyright (c) 2005 phpbireland
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_K_REFERRALS'               => 'Referrals',
	'ACP_K_ADMIN_REFERRALS'         => 'Manage HTTP referrals',
	'DISABLE_MARKED'                => 'Disable_marked',
	'ENABLE_MARKED'                 => 'Enable marked',
	'FIRST_VISIT'                   => 'First visit',
	'HITS'                          => 'Hits',
	'HOST'                          => 'Host',
	'NO_DISABLED_REFERRALS'         => 'No <b>DISABLED</b> Referrals in your database, yet!',
	'NO_ENABLED_REFERRALS'          => 'No <b>ENABLED</b> Referrals in your database, yet!',
	'NO_ITEMS_MARKED'               => 'No items marked.',
	'NO_REFERRALS'                  => 'No Referrals in your database, yet!',
	'NO_UPDATE_HTTP_REFERRALS'      => 'Could not update referrals',
	'ORDER'                         => 'Order',
	'PLEASE_CONFIRM'                => 'Please confirm.',
	'REFERER_HOST'                  => 'Host',
	'REFERER_HITS'                  => 'Hits',
	'REFERRALS_MANAGEMENT'          => 'Referrals management.',
	'REFERRALS_MANAGEMENT_EXPLAIN'  => 'Here you can manage HTTP Referrals stored in your database.',
	'REFERRALS_COUNT'               => 'Referrals count',
	'REFERRALS_COUNT_EXPLAIN'       => 'Specify how many referrals you wish to show in referrals block.',
	'SELECT_FILTER'                 => 'Select filter',
	'SELECT_SORT_METHOD'            => 'Select sort method',
	'SORT'                          => 'Sort',
	'SORT_ASCENDING'                => 'Ascending',
	'SORT_DESCENDING'               => 'Descending',
	'TITLE'                         => 'Referrals management',
	'TITLE_EXPLAIN'                 => 'Use this form to manage HTTP Referrals stored in your database.  Total number of records: ',
));

?>