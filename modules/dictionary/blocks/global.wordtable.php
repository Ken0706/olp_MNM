
<?php
if (!nv_function_exists('nv_dictionary_wordtable')) {
    function nv_dictionary_wordtable()
    {
        global $global_config, $lang_global, $db, $module_file;
        $xlpt = new XTemplate('global.wordtable.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/dictionary/');
        $xlpt->assign('LANG', $lang_global);

        // $query = "SELECT * FROM " . NV_PREFIXLANG . '_' . 'dictionary' . " WHERE 1";
        $query = "SELECT * FROM `nv4_vi_dictionary` ";
        $result = $db->query($query)->fetchAll();

        if (!empty($result)) {
            foreach ($result as $row) {
                $xlpt->assign('NAME', $row['wordname']);
                $xlpt->assign('VALUE', $row['wordmeaning']);
                $xlpt->assign('TYPE', $row['type'] == 1 ? 'EN-VI' : 'VI-EN');
                $xlpt->parse('main.wordloop');
            }
        }
        return $xlpt->text('main'); 
    }


    $content = nv_dictionary_wordtable();
}
if (defined('NV_SYSTEM')) {
    $content = nv_dictionary_wordtable();
}
