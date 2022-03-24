<?php

/**
 * @Project NUKEVIET 4.x
 * @Author truongtlt147 <truongtlt147@gmail.com>
 * @Copyright (C) 2022 truongtlt147. All rights reserved
 * @License: Not free read more
 * @Createdate Sat, 09 Mar 2022 02:20:33 GMT
 */

if (!defined('NV_IS_FILE_ADMIN')) {
    die('Stop!!!');
}

$page_title = $lang_module['addword'];

$word = [];
$error = [];
$word['wordname'] = $nv_Request->get_title('wordname', 'post', '');
$word['wordmeaning'] = $nv_Request->get_title('wordmeaning', 'post', '');
$word['type'] = $nv_Request->get_title('type', 'post', '');
$word['submit'] = $nv_Request->get_title('submit', 'post', '');


if (!empty($word['submit'])) {
    if (empty($word['wordmeaning'])) {
        $error[] = $lang_module['error_donot_empty'];
    }

    if (empty($error)) {

        $query = "SELECT * FROM " . NV_PREFIXLANG . '_' . $module_data . " WHERE wordname = " . $db->quote($word['wordname']);

        $result = $db->query($query)->fetchAll();

        if (empty($result)) {
            $query = "INSERT INTO " . NV_PREFIXLANG . '_' . $module_data . "(wordname,wordmeaning,type) VALUES (" . $db->quote($word['wordname']) . "," . $db->quote($word['wordmeaning']). "," . $db->quote($word['type']) . ")";
            $db->query($query);
        } else {
            $error[] = $lang_module['error_duplicate'];
        }
    }
}



$xtpl = new XTemplate('addword.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('NV_LANG_VARIABLE', NV_LANG_VARIABLE);
$xtpl->assign('NV_LANG_DATA', NV_LANG_DATA);
$xtpl->assign('NV_BASE_ADMINURL', NV_BASE_ADMINURL);
$xtpl->assign('NV_NAME_VARIABLE', NV_NAME_VARIABLE);
$xtpl->assign('NV_OP_VARIABLE', NV_OP_VARIABLE);
$xtpl->assign('MODULE_NAME', $module_name);
$xtpl->assign('OP', $op);
$xtpl->assign('WORD', $word);
$xtpl->assign('ERROR', implode('<br>', $error));


if (!empty($error)) {
    $xtpl->parse('main.error');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
