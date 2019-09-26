<?php
//modulo delle KEYs per funzionamento dei bot (da non committare)

//Telegram
define('TELEGRAM_BOT','932908472:AAF_9vuU0c7dLhW9HP_jRtTeX6tUzDgVXA4');
define('BOT_WEBHOOK', '');
define('LOG_FILE', 'telegram.log');

// Your database
$db_path=dirname(__FILE__).'/./db.sqlite';
define ('DB_NAME', "sqlite:". $db_path);
define('DB_TABLE',"user");
define('DB_TABLE_GEO',"segnalazioni");
define('DB_CONF', 0666);
define('DB_ERR', "errore database SQLITE");


?>
