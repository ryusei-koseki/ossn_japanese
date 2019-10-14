﻿<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$ja = array(
    'groups' => 'グループ',
    'add:group' => 'グループを追加',
    'requests' => 'リクエスト',

    'members' => 'メンバー',
    'member:add:error' => '何かがうまくいきませんでした！ 後でもう一度やり直してください。',
    'member:added' => 'メンバーシップリクエストが承認されました！',

    'member:request:deleted' => 'メンバーシップリクエストは承認されませんでした',
    'member:request:delete:fail' => 'メンバーシップリクエストを拒否できません！ 後でもう一度やり直してください。',
    'membership:cancel:succes' => '会員リクエストはキャンセルされました',
    'membership:cancel:fail' => 'メンバーシップリクエストをキャンセルできません！ 後でもう一度やり直してください。',

    'group:added' => 'グループを作成しました！',
    'group:add:fail' => 'グループを作成できません。後でもう一度試してみてください。',

    'memebership:sent' => 'リクエストを送信しました！',
    'memebership:sent:fail' => 'リクエストを送信できません！ 後でもう一度やり直してください。',

    'group:updated' => 'グループが更新されました！',
    'group:update:fail' => 'グループを更新できません！ 後でもう一度やり直してください。',

    'group:name' => 'グループの名前',
    'group:desc' => 'グループの説明',
    'privacy:group:public' => '誰でもこのグループとその投稿を見ることができます。 メンバーのみがこのグループに投稿できます。',
    'privacy:group:close' => '誰でもこのグループを見ることができます。 メンバーのみが投稿を投稿できます。',

    'group:memb:remove' => '削除する',
    'group:memb:make:owner' => 'グループ所有者にする',
    'group:memb:make:owner:confirm' => 'Attention! This action will make >> %s << the new owner of the group and you will lose all of your group admin privileges. Are you sure to proceed?',
    'group:memb:make:owner:admin:confirm' => 'Attention! This action will make >> %s << the new owner of the group and the former owner will lose all of his group admin privileges. Are you sure to proceed?',
    'leave:group' => 'グループを離れる',
    'join:group' => 'グループに参加する',
    'total:members' => '総会員',
    'group:members' => "Members (%s)",
    'view:all' => 'すべて見る',
    'member:requests' => 'REQUESTS (%s)',
    'about:group' => 'グループについて',
    'cancel:membership' => '会員キャンセルl',

    'no:requests' => 'リクエストがありません。代わりに私がリクエストしてあげましょうか？ By Admin',
    'approve' => '承認する',
    'decline' => '承認しない',
    'search:groups' => 'グループを検索',

    'close:group:notice' => 'このグループに参加して、投稿、写真、コメントをご覧ください。',
    'closed:group' => '非公開グループ',
    'group:admin' => '管理者',
	
	'title:access:private:group' => 'グループの登校',

	// #186 group join request message var1 = user, var2 = name of group
	'ossn:notifications:group:joinrequest' => '%s has requested to join %s',
	'ossn:group:by' => 'By:',
	
	'group:deleted' => 'グループおよびグループのコンテンツが削除されました',
	'group:delete:fail' => 'グループを削除できませんでした',	
);
ossn_register_languages('ja', $ja); 
