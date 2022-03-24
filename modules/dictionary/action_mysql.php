<?php

/**
 * @Project Module Nukeviet 4.x
 * @Author Webvang.vn (hoang.nguyen@webvang.vn)
 * @copyright 2014 J&A.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @createdate 08/10/2014 09:47
 */
if (!defined('NV_IS_FILE_MODULES'))
    die('Stop!!!');

$sql_drop_module = array();
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data;

$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "(
    id mediumint(5) unsigned NOT NULL AUTO_INCREMENT,
    wordname varchar(50) NOT NULL,
    wordmeaning varchar(50) NOT NULL,
    type int not null,
    PRIMARY KEY (id),
    UNIQUE KEY wordname (wordname),
)ENGINE=MyISAM  DEFAULT CHARSET=utf8";


$sql_create_module[] = "UPDATE `nv4_config` SET `config_value` = 'script-src &#039;self&#039; *.google.com *.google-analytics.com *.googletagmanager.com *.gstatic.com *.facebook.com *.facebook.net *.twitter.com *.zalo.me *.zaloapp.com *.tawk.to &#039;unsafe-inline&#039; &#039;unsafe-hashes&#039; &#039;unsafe-eval&#039;;object-src &#039;self&#039;;style-src &#039;self&#039; *.google.com *.googleapis.com *.tawk.to &#039;unsafe-inline&#039;;img-src &#039;self&#039; data: *.twitter.com *.google.com *.googleapis.com *.gstatic.com *.facebook.com tawk.link *.tawk.to static.nukeviet.vn;media-src &#039;self&#039; *.tawk.to;frame-src &#039;self&#039; *.google.com *.youtube.com *.facebook.com *.facebook.net *.twitter.com *.zalo.me;font-src &#039;self&#039; *.googleapis.com *.gstatic.com *.tawk.to;connect-src &#039;self&#039; wss://*.moneycap.io *.zalo.me *.tawk.to wss://*.tawk.to;form-action &#039;self&#039; *.google.com;base-uri &#039;self&#039;;' WHERE `nv4_config`.`lang` = 'sys' AND `nv4_config`.`module` = 'site' AND `nv4_config`.`config_name` = 'nv_csp'";
