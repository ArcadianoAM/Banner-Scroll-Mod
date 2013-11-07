<?php

/**
*
* @author Galandas (Rey)
* @package acp_banner_scroll.php, v1.0.0 2013-03-05 Galandas (Rey) $
* @copyright (c) 2013 phpbb3world.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

class acp_banner_scroll_info
{
	function module()
	{
		return array(
			        'filename'	    => 'acp_banner_scroll',
			        'title'		    => 'BANNER_SCROLL_TITLE',
			        'version'	    => '1.0.0',
			        'modes'		    => array(
				    'default'	    => array(
					'title'			=> 'BANNER_SCROLL_TITLE',
					'auth'			=> 'acl_a_banner',
					'cat'			=> array('ACP_BOARD_CONFIGURATION'),
				),
			),
		);
	}
	
	function install()
	{
	}

	function uninstall()
	{
	}
	
}

?>
