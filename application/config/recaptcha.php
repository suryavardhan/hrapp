<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Add this lines to your config.php files end.

 /**
 * The reCAPTCHA server URL's
 */
$config['recaptcha']['apiserver']="http://www.google.com/recaptcha/api";
$config['recaptcha']['apisecureserver']="https://www.google.com/recaptcha/api";
$config['recaptcha']['verifyserver']="www.google.com";

$config['recaptcha']['publickey']="6LeUKcoSAAAAAMfermam_68Pa863_2NBHa1Jg06H";
$config['recaptcha']['privatekey']="6LeUKcoSAAAAABR3uz6dbLeSG9URANcUJmLF6P4s";
$config['recaptcha']['language']="En";//Interface Language
$config['recaptcha']['theme']="clean";//Interface Theme
$config['recaptcha']['mailhide']['publickey']="yourpublicemailhidekey";
$config['recaptcha']['mailhide']['privatekey']="yourprivateemailhidekey";