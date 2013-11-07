<?php
/**
*
* @author Galandas (Rey)
* @package install_banner_scroll.php
* @version $Id: v1.0.0 2013-03-05 Galandas (Rey) $
* @copyright (c) 2013 phpbb3world.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

// The name of the mod to be displayed during installation.
$mod_name = 'BANNER_SCROLL_TITLE';

/*
* The name of the config variable which will hold the currently installed version
* UMIL will handle checking, setting, and updating the version itself.
*/
$version_config_name = 'banner_scroll_version';


// The language file which will be included when installing
$language_file = 'mods/info_acp_banner_scroll';


/*
* Optionally we may specify our own logo image to show in the upper corner instead of the default logo.
* $phpbb_root_path will get prepended to the path specified
* Image height should be 50px to prevent cut-off or stretching.
*/
$logo_img = 'images/banner/bannercroll.png';

/*
* The array of versions and actions within each.
* You do not need to order it a specific way (it will be sorted automatically), however, you must enter every version, even if no actions are done for it.
*
* You must use correct version numbering.  Unless you know exactly what you can use, only use X.X.X (replacing X with an integer).
* The version numbering must otherwise be compatible with the version_compare function - http://php.net/manual/en/function.version-compare.php
*/
$versions = array(
	// Version 1.0.0
	'1.0.0'	=> array(

		// Configuration Settings
		'config_add' => array(
			array('bs_enable', true),
			array('banner_scroll_enable', '1'),
		),

		'table_add' => array(
			array('phpbb_banner', array(
				'COLUMNS' => array(
					'banner_id' => array('TINT:8', NULL, 'auto_increment'),
					'banner_name' => array('VCHAR', ''),
					'banner_url' => array('VCHAR', ''),
					'banner_image' => array('VCHAR', ''),
				),
				'PRIMARY_KEY'	=> 'banner_id',
				),
			)
		),

		'table_insert'	=> array(
			array('phpbb_banner', array(
				array(
					'banner_name' 	=> 'Banner.Scroll',
					'banner_url'	=> 'http://phpbb3world.com/',
					'banner_image'	=> generate_board_url() . '/images/banner/bannercroll.png',
				),
				array(
					'banner_name' 	=> 'Sexi.Social',
					'banner_url'	=> 'http://phpbb3world.com/',
					'banner_image'	=> generate_board_url() . '/images/banner/sexy.png',
				),
				array(
					'banner_name' 	=> 'Stiles.Page',
					'banner_url'	=> 'http://phpbb3world.com/',
					'banner_image'	=> generate_board_url() . '/images/banner/styles.png',
				),
				array(
					'banner_name' 	=> 'Playerbbw',
					'banner_url'	=> 'http://phpbb3world.com/',
					'banner_image'	=> generate_board_url() . '/images/banner/playerbbw.png',
				),
			),
		),
		),

		'module_add' => array(
			array('acp', 'ACP_CAT_DOT_MODS', 'ACP_CAT_BANNER_SCROLL'),

			array('acp', 'ACP_CAT_BANNER_SCROLL', array(
					'module_basename'	=> 'banner_scroll',
					'module_auth'		=> 'acl_a_banner',
				),
			),
		),
	),	
	// Version 1.0.1
	'1.0.1' => array(
	// Adjustment
		'cache_purge' => array('', 'template', 'theme'),
	),	
	// Version 1.0.2
	'1.0.2' => array(
	// Improvements
	),	
 	// Version 1.0.3
	'1.0.3'	=> array(
		// add permission settings
		'permission_add' => array(
		array('a_banner', true),
	),
  ),
	// Version 1.0.4
	'1.0.4'	=> array(
		//Order banner	
	),
  
);

// Include the UMIL Auto file, it handles the rest
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>