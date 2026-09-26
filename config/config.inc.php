<?php

# Database management system to use
$DBMS = 'MySQL';

$_DVWA = array();
$_DVWA[ 'db_server' ]   = getenv('DB_SERVER')   ?: 'db';
$_DVWA[ 'db_database' ] = getenv('DB_DATABASE') ?: 'dvwa';
$_DVWA[ 'db_user' ]     = getenv('DB_USER')     ?: 'dvwa';
$_DVWA[ 'db_password' ] = getenv('DB_PASSWORD'); // No plaintext fallback
$_DVWA[ 'db_port' ]     = getenv('DB_PORT')     ?: '3306';

$_DVWA[ 'recaptcha_public_key' ]  = getenv('RECAPTCHA_PUBLIC_KEY')  ?: '';
$_DVWA[ 'recaptcha_private_key' ] = getenv('RECAPTCHA_PRIVATE_KEY') ?: '';

$_DVWA[ 'default_security_level' ] = 'impossible';
$_DVWA[ 'default_locale' ] = "en";

?>
