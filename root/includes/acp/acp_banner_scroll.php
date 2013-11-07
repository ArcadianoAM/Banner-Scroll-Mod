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

class acp_banner_scroll
{
	var $u_action;

	function main($id, $mode)
	{
		global $config, $db, $user, $auth, $template, $cache;
		global $phpbb_root_path, $phpbb_admin_path, $phpEx, $table_prefix;

		$user->add_lang('mods/info_acp_banner_scroll');

		$this->page_title = $user->lang['BANNER_SCROLL_TITLE'];
		$this->tpl_name = 'acp_banner_scroll';

		add_form_key('acp_banner_scroll');

        $sql = 'SELECT *
            FROM ' . BANNER_SCROLL_TABLE . '
            ORDER BY banner_name ASC';
        $result = $db->sql_query($sql);
        while( $row = $db->sql_fetchrow($result) )
		{
			$template->assign_block_vars('scroll', array(
				'B_NAME'			=> $row['banner_name'],
				'B_URL'			    => $row['banner_url'],
				'B_IMAGE'			=> $row['banner_image'],
				'U_EDIT'			=> $this->u_action . "&amp;id=" . $row['banner_id'] . "&amp;action=edit",
				'U_DELETE'			=> $this->u_action . "&amp;id=" . $row['banner_id'] . "&amp;action=delete"
			));
		}
		$db->sql_freeresult($result);

		$sql = 'SELECT COUNT(banner_id) as banners_count
			FROM ' . BANNER_SCROLL_TABLE;
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$template->assign_vars(array(
			'S_ROW_COUNT'			    => $row['banners_count'],
			'S_BANNER_SCROLL_ENABLED'   => $config['banner_scroll_enable'],
			'BANNER_VERSION'			=> $config['banner_scroll_version']	
		));
		$db->sql_freeresult($result);

		$submit = (isset($_POST['submit'])) ? true : false;
		$enable_submit = (isset($_POST['enable_submit'])) ? true : false;
		
		$edit = (isset($_POST['edit'])) ? true : false;
		$edit_id = request_var('edit', 0);
		
		$enabled = request_var('enable_banner_scroll', 0);
		
		if ($submit && !check_form_key('acp_banner_scroll') && !$edit)
		{
			trigger_error($user->lang['FORM_INVALID']);
		}
		if ($enable_submit && !check_form_key('acp_banner_scroll'))
		{
			trigger_error($user->lang['FORM_INVALID']);
		}
		
		if ($submit)
		{
			$name = utf8_normalize_nfc(request_var('name', ''));
			$url = request_var('url', '');
			$image = request_var('image', '');

			if($name != '' and $url != '' and $image != '' and !$edit)
			{
				$sql_array = array(
					'banner_name'		=> $name,
					'banner_url'		=> $url,
					'banner_image'		=> $image
				);

				$sql = 'INSERT INTO ' . BANNER_SCROLL_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_array);
				$db->sql_query($sql);
				trigger_error($user->lang['BANNER_SCROLL_ADDED'] . adm_back_link($this->u_action));
			}
			else if($name != '' and $url != '' and $image != '' and isset($edit) and $edit_id != 0 )
			{
				$sql_array = array(
				'banner_name'		    => $name,
				'banner_url'		    => $url,
				'banner_image'		    => $image
				);

				$sql = 'UPDATE ' . BANNER_SCROLL_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_array) . ' WHERE banner_id = ' . $edit_id;
				$db->sql_query($sql);
				trigger_error($user->lang['BANNER_SCROLL_UDPATED'] . adm_back_link($this->u_action));
			}
			else
			{
				trigger_error($user->lang['BANNER_SCROLL_ERROR'] . adm_back_link($this->u_action . '&amp;action=add'), E_USER_WARNING);
			}
		}
		
		if ($enable_submit)
		{
		  set_config('banner_scroll_enable', $enabled);
			trigger_error($user->lang['BANNER_SCROLL_CONF_UDPATED'] . adm_back_link($this->u_action));
		}

		$action = (isset($_GET['action']) or isset($_POST['action'])) ? true : false;
		$id_banner = request_var('id', 0);
		if($action && $id_banner != 0)
		{
			$action = request_var('action', '');
			switch ($action)
			{
				case 'edit':
					$sql = 'SELECT *
						FROM ' . BANNER_SCROLL_TABLE . '
						WHERE banner_id = ' . $id_banner;
					$result = $db->sql_query($sql);
					$row = $db->sql_fetchrow($result);
					$template->assign_vars(array(
						'B_NAME'			=> $row['banner_name'],
						'B_URL'			    => $row['banner_url'],
						'B_IMAGE'			=> $row['banner_image'],
						'B_EDIT'			=> $row['banner_id'],
					));
					$db->sql_freeresult($result);
				break;
				case 'delete':
					if (confirm_box(true))
					{
						$sql = 'DELETE FROM
							' . BANNER_SCROLL_TABLE . '
							WHERE banner_id = ' . $id_banner;
						$db->sql_query($sql);
						redirect($this->u_action);
					}
					else
					{
						confirm_box(false, $user->lang['CONFIRM_OPERATION'], build_hidden_fields(array(
							'action'		=> $action,
							'id'	        => $id_banner))
						);
					}
				break;
			}
		}
	}
}

?>