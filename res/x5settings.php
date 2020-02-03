<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'http://www.katafal.by',
	'public_folder' => '',
	'salt' => 'bba4293fb52575ede2d26a6749716e4e'
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS (used only in the administration settings, in the 'test' page)
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS (used only in the administration settings, in the 'guestbooks' page)
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->setEmailType('html');
$ImMailer->setHTMLHeader('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 v10 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#211E2F" style="background-color: #211E2F;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="border-collapse: collapse; padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailHeader" style="border-collapse: collapse; text-align: right; width: 700px; border-style: solid; border-color: #200040; border-top-width: 3px; border-right-width: 3px; border-bottom-width: 0px; border-bottom: none; border-left-width: 3px; background-color: #FFFFFF; padding-bottom: 10px;" width="700px"><img src="http://www.katafal.by/images/IMG_0789.JPG" style="width: 110px; border: none;" width="110px"></td></tr>' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 9.0pt \'Palatino Linotype\'; color: #001040; background-color: #FFFFFF; text-align: left; text-decoration: none;  width: 700px;border-collapse: collapse; border-style: solid; border-color: #200040; border-top-width: 0px; border-top: none; border-right-width: 3px; border-bottom-width: 3px; border-left-width: 3px;background-color: #FFFFFF" width="700px">' . "\n\t\t");
$ImMailer->setHTMLFooter("\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 7.0pt \'Palatino Linotype\'; color: #B9B500; background-color: transparent; text-align: center; text-decoration: none;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'Это письмо-подтверждение предназначено для исключения несанкционированного использования вашего адреса электронной почты.<br>Если вы получили это сообщение по ошибке, пожалуйста, сообщите об этом отправителю и удалите это письмо, не делая копий.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>');
$ImMailer->setBodyBackground('#FFFFFF');
$ImMailer->setBodyBackgroundEven('#FFFFFF');
$ImMailer->setBodyBackgroundOdd('#F0F0F0');
$ImMailer->setBodyBackgroundBorder('#CDCDCD');
$ImMailer->setBodySeparatorBorderColor('#001040');
$ImMailer->setEmailBackground('#211E2F');
$ImMailer->setEmailContentStyle('font: normal normal normal 9.0pt \'Palatino Linotype\'; color: #001040; background-color: #FFFFFF; text-align: left; text-decoration: none; ');

// End of file x5settings.php