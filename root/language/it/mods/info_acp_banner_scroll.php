<?php
/**
*
* banner_scroll [Italian]
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
	'BANNER_SCROLL_INTRO'							=> 'Questa è la pagina di configurazione della Mod Banner Scroll by Rey.',
	'BANNER_SCROLL_VERSION'							=> 'Versione',
 	'BANNER_SCROLL_CHECK'							=> 'Controlla Manualmente <a href="http://phpbb3world.com/viewtopic.php?f=19&t=854#p1050"><strong>Aggiorna</strong></a>',	
	'BANNER_SCROLL_EDIT'							=> 'Modifica banner',
	'BANNER_SCROLL_ADD'							    => 'Aggiungi banner',
	'BANNER_SCROLL_NAME'							=> 'Nome',
	'BANNER_SCROLL_NAME_EXPLAIN'					=> 'Nome del nuovo banner scroll.',
	'BANNER_SCROLL_URL'							    => 'URL',
	'BANNER_SCROLL_URL_EXPLAIN'						=> 'Inserisci l’URL del banner che desideri far conoscere agli utenti del forum',
	'BANNER_SCROLL_IMAGE'							=> 'Immagine',
	'BANNER_SCROLL_IMAGE_EXPLAIN'					=> 'Inserisci l’URL dell’immagine banner, per una migliore visuale, si consiglia di inserire le dimensini di <strong>458x50px</strong>',
	'BANNER_SCROLL_NAME_B'							=> 'Nome del banner',
	'BANNER_SCROLL_IMAGE_B'							=> 'Immagine del banner',
	'BANNER_SCROLL_URL_B'							=> 'URL del banner',
	'BANNER_SCROLL_COPYRIGHT'				        => '<strong>La Mod è stata creata da <a href="http://phpbb3world.com">phpbb3world.com</a></strong>',
	'BANNER_SCROLL_ADDED'					        => 'Il nuovo banner è stato aggiunto!',
	'BANNER_SCROLL_UDPATED'					        => 'Il Banner è stato aggiornato!',
	'BANNER_SCROLL_ENABLE'							=> 'Abilita Banner Scroll',
	'BANNER_SCROLL_ENABLE_EXPLAIN'					=> 'Abilita Banner Scroll MOD sull’indice della tua board.',
	'BANNER_SCROLL_CONF_UDPATED'				    => 'Banner Scroll MOD la configurazione è stata aggiornata con successo.',
	'BANNER_SCROLL_ERROR'				            => 'Banner Scroll MOD errore di impostazione.',
	
	'acl_a_banner'		=> array('lang' => 'Può usare Banner Scroll', 'cat' => 'misc'),
	
));

?>