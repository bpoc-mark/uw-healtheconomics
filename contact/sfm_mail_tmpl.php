<?php

/*--------------------------------------------------------------------------

	フォームメール - sformmmail2　管理者宛に送信されるメールです

--------------------------------------------------------------------------*/

// 受け取る時のSubject（件名）
$mailSubject = '[株式会社●●●●] お問合わせを受け付けました';

//送信メッセージ
$mailMessage = <<< EOD
以下の内容が「お問い合わせフォーム」より送信されました。
内容を確認の上、速やかにお客様へ連絡してください。
────────────────────────────────────

■お名前
{$sfm_mail->name}

■ふりがな
{$sfm_mail->furigana}

■性別
{$sfm_mail->gender}

■生年月日
{$sfm_mail->year}-{$sfm_mail->month}-{$sfm_mail->day}

■最終学歴
{$sfm_mail->education}

■TEL
{$sfm_mail->tel}

■メールアドレス
{$sfm_mail->email}

■ご住所
〒{$sfm_mail->zip}
{$sfm_mail->address}

■採用形態
{$sfm_mail->recruitment}

■お問い合わせ内容
{$sfm_mail->message}


────────────────────────────────────

□ユーザー情報
$sfm_userinfo
EOD;
