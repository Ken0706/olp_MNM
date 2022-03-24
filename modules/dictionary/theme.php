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

/**
 * nv_theme_samples_main()
 * 
 * @param mixed $array_data
 * @return
 */
function nv_theme_samples_main($array_data)
{
    global $module_info, $lang_module, $lang_global, $op, $db, $module_data;

    $xtpl = new XTemplate($op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_info['module_theme']);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('GLANG', $lang_global);
    


    $xtpl->parse('main');
    return $xtpl->text('main');
}
