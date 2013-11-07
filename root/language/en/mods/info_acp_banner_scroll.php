<?php
/**
*
* banner_scroll [English]
*
* @author Galandas (Rey)
* @package info_acp_banner_scroll.php, v1.0.0 2013-03-05 Galandas (Rey) $
* @copyright (c) 2013 phpbb3world.com
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

$lang = array_merge($lang, array(
    'ACP_CAT_BANNER_SCROLL'					        => 'Banner Scroll MOD',
	'BANNER_SCROLL_TITLE'							=> 'Banner Scroll',
	'ACP_BANNER_SCROLL_IMAGE'						=> '<img src="images/bannercroll.png" style="width: 458px; height: 50px;">',	
	'BANNER_SCROLL_INTRO'							=> 'This is configuration page for the Banner Scroll Mod by Rey.',
	'BANNER_SCROLL_VERSION'							=> 'Version',
 	'BANNER_SCROLL_CHECK'							=> 'Check Manually <a href="http://phpbb3world.com/viewtopic.php?f=19&t=854#p1050"><strong>Update</strong></a>',	
	'BANNER_SCROLL_EDIT'							=> 'Edit banner',
	'BANNER_SCROLL_ADD'							    => 'Add banner',
	'BANNER_SCROLL_NAME'							=> 'Name',
	'BANNER_SCROLL_NAME_EXPLAIN'					=> 'Name of new banner scroll.',
	'BANNER_SCROLL_URL'							    => 'URL',
	'BANNER_SCROLL_URL_EXPLAIN'						=> 'Enter the URL of the banner you want to make known to the users of the forum',
	'BANNER_SCROLL_IMAGE'							=> 'Image',
	'BANNER_SCROLL_IMAGE_EXPLAIN'					=> 'URL of image of banner scroll. for a correct visual insert images of size <strong>458x50px</strong>',
	'BANNER_SCROLL_NAME_B'							=> 'Name of the banner',
	'BANNER_SCROLL_IMAGE_B'							=> 'Image of the banner',
	'BANNER_SCROLL_URL_B'							=> 'URL of the banner',
	'BANNER_SCROLL_COPYRIGHT'				        => '<strong>The Mod was created by <a href="http://phpbb3world.com">phpbb3world.com</a></strong>',
	'BANNER_SCROLL_ADDED'					        => 'New banner has been added!',
	'BANNER_SCROLL_UDPATED'					        => 'Banner has been updated!',
	'BANNER_SCROLL_ENABLE'							=> 'Enable Banner Scroll',
	'BANNER_SCROLL_ENABLE_EXPLAIN'					=> 'Enable Banner Scroll MOD on index board.',
	'BANNER_SCROLL_CONF_UDPATED'				    => 'Banner Scroll MOD configuration was succesfully updated.',
	'BANNER_SCROLL_ERROR'				            => 'Banner Scroll MOD setting error.',
	
	'acl_a_banner'		=> array('lang' => 'Can use Banner Scroll', 'cat' => 'misc'),
	
));

?>