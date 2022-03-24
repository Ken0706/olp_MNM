<?php

/**
 * @Project NUKEVIET 4.x
 * @Author truongtlt147 <truongtlt147@gmail.com>
 * @Copyright (C) 2022 truongtlt147. All rights reserved
 * @License: Not free read more
 * @Createdate Sat, 09 Mar 2022 02:20:33 GMT
 */

if (!defined('NV_IS_MOD_SAMPLES')) {
    die('Stop!!!');
}

$page_title = $module_info['site_title'];
$key_words = $module_info['keywords'];

$array_data = [];

$contents = nv_theme_samples_main($array_data);

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
