<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_admincp_login.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'login_title' => 'ログイン管理',
	'login_username' => 'ID',
	'login_password' => 'PW',

	'submit' => '送信',
	'forcesecques' => '必須項目',
	'security_question' => '質問',
	'security_answer' => '回 答',
	'security_question_0' => 'セキュリティ質問なし',
	'security_question_1' => 'お母さんの名前',
	'security_question_2' => 'お父さんの名前',
	'security_question_3' => 'ペットの名前',
	'security_question_4' => '大好きな人の名前',
	'security_question_5' => '自分の誕生日',
	'security_question_6' => '大好きなレストランの名前',
	'security_question_7' => '免許番号の最後の４桁',

	'login_tips' => 'Discuz! は <a href="http://www.tencent.com" target="_blank">テンセントグループ</a> 下 <a href="http://www.comsenz.com" target="_blank">Comsenz</a> の無料でサイトを作成するサービスです。',
	'login_nosecques' => '権限がありません、管理者にお問い合わせください。 <a href="forum.php?mod=memcp&action=profile&typeid=1" target="_blank">ここをクリックし</a> セキュリティ質問を設定してください。',

	'login_cplock' => 'ログイン管理画面がロックされました! <br>しばらくしてから<b> {ltime} </b>秒後にもう一回ログインしてください',
	'login_user_lock' => 'パスワードを間違えた回数が多くため、15分後もう一回ログインしてください',
	'login_cp_noaccess' => '<b>権限がありません、</b><br><br>管理者にお問い合わせください',
	'noaccess' => '権限がありません、管理者にお問い合わせください',


);

?>