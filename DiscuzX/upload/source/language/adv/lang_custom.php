<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_custom.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'custom_name' => 'カスタマ広告',
	'custom_desc' => 'テンプレートやHTMLファイルで広告コードを追加。HTMLに詳しいサイトマスターにおすすめ。<br /><br />
		<a href="javascript:;" onclick="prompt(\'以下内容(CTRL+C)をコピーし、テンプレートにペストし、広告を追加\', \'<!--{ad/custom_'.$_GET['customid'].'}-->\')" />内部调用</a>&nbsp;
		<a href="javascript:;" onclick="prompt(\'以下内容(CTRL+C)をコピーし、HTMLにペストし広告を追加\', \'&lt;script type=\\\'text/javascript\\\' src=\\\''.$_G['siteurl'].'api.php?mod=ad&adid=custom_'.$_GET['customid'].'\\\'&gt;&lt;/script&gt;\')" />外部调用</a>',
	'custom_id_notfound' => 'カスタマ広告存在しません',
	'custom_codelink' => '内部呼出',
	'custom_text' => 'カスタマ広告',
);

?>