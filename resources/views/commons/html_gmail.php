<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/config.php";

//phpmailerを使用してメール送信
//引数) $body: メール本文
function phpmailerSend($body) {
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = MAIL_HOST;
    $mail->Username = MAIL_USERNAME;
    $mail->Password = MAIL_PASSWORD;
    $mail->SMTPSecure = MAIL_ENCRPT;
    $mail->Port = SMTP_PORT;

    //メール内容設定
    $mail->CharSet = "UTF-8";
    $mail->Encoding = "base64";
    $mail->setFrom(FROM_MAIL, FROM_MAIL);
    $mail->addAddress(TO_MAIL, TO_MAIL);
    $mail->Subject = SUBJECT;
    $mail->isHTML(false);
    $mail->Body  = $body;

    //メール送信の実行
    return $mail->send();
}

//処理
$flag = phpmailerSend($body);
if(!$flag) {
    //エラー処理
    
}




require_once 'vendor/autoload.php';

$mail=new PHPmailer();
$mail->CharSet="iso-2022-jp";
$mail->Encording="7bit";

$mail->IsSMTP();
$mail->SMTPAuth  = true;
$mail->SMTPSecure= "ssl";
$mail->Host      = "smtp.gmail.com";
$mail->Port      = 465;
$mail->UserName  = "himono55@gmail.com";
$mail->Password  = "Reitax1993";

$mail->IsHTML(true);

$mail->AddAddress($contact->email);
$mail->From($user->name);

$mail->FromName = mb_encode_mimeheader(mb_convert_encording($user->name,"JIS","UTF-8"));
$mail->Subject  = mb_encode_mimeheader(mb_convert_encording($contact->title,"JIS","UTF-8"));

$html='<a href="http://www.yahoo.co.jp/">Yahoo!</a><br />' . 'このメールはHTMLメールです。<br />' . '<b>このメールは、HTMLメールです。</b>';

$mail->Body = mb_convert_encording($html,"JIS","UTF-8");

if($contact->image != null){
    $mail->AddAttachment($contact->image);
}

if($mail->Send()){
    echo("Send mail OK");
}else{
    echo("Failed to send mail");
}



