<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| EMAIL CONFIG SETTINGS
| -------------------------------------------------------------------*/
$config['useragent'] 		= 'YESSS';
$config['protocol'] 		= 'smtp';
#$config['mailpath'] 		= '/usr/sbin/sendmail';
$config['smtp_host'] 		= 'mail.erlangga.co.id';
$config['smtp_user'] 		= 'it.info@erlangga.co.id';
$config['smtp_pass'] 		= 'ErlInfo101';
$config['smtp_port'] 		= 587;
$config['smtp_timeout'] 	= 5;
$config['wordwrap'] 		= TRUE;
$config['wrapchars'] 		= 76;
$config['mailtype'] 		= 'html';
$config['charset'] 			= 'utf-8';
$config['validate'] 		= FALSE;
$config['priority'] 		= 3;
$config['crlf'] 			= "\r\n";
$config['newline'] 			= "\r\n";
$config['bcc_batch_mode'] 	= FALSE;
$config['bcc_batch_size'] 	= 200;

/* End of file email.php */
/* Location: ./application/config/email.php */