<?php

/**
 * @Project NUKEVIET 4.x
 * @Author truongtlt147 <truongtlt147@gmail.com>
 * @Copyright (C) 2022 truongtlt147. All rights reserved
 * @License: Not free read more
 * @Createdate Sat, 09 Mar 2022 02:20:33 GMT
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE') or !defined('NV_IS_MODADMIN')) {
    die('Stop!!!');
}

define('NV_IS_FILE_ADMIN', true);

$allow_func = ['main', 'addword'];
