<?php

use XoopsModules\Tellafriend;

defined('XOOPS_ROOT_PATH') || exit('Restricted access');

if (empty($moduleDirName)) {
    $moduleDirName = basename(dirname(__DIR__));
}

if (!defined('XOOPS_ORETEKI')) {
    // Skip for ORETEKI XOOPS

    if (!isset($module) || !is_object($module)) {
        $module = $xoopsModule;
    } elseif (!is_object($xoopsModule)) {
        exit('$xoopsModule is not set');
    }

    // load modinfo.php if necessary (judged by a specific constant is defined)
    if (!defined('_MYMENU_CONSTANT_IN_MODINFO') || !defined(_MYMENU_CONSTANT_IN_MODINFO)) {
        $helper = Tellafriend\Helper::getInstance();
        $helper->loadLanguage('main');
    }

    require_once __DIR__ . '/menu.php';

    //  array_push( $adminObject , array( 'title' => _PREFERENCES , 'link' => '../system/admin.php?fct=preferences&op=showmod&mod=' . $module->getvar('mid') ) ) ;
    $menuitem_dirname = $module->getVar('dirname');

    if (defined('XOOPS_TRUST_PATH')) {
        // with XOOPS_TRUST_PATH and altsys

        if (file_exists(XOOPS_TRUST_PATH . '/libs/altsys/mytplsadmin.php')) {
            // mytplsadmin (TODO check if this module has tplfile)
            $title         = defined('_MD_A_MYMENU_MYTPLSADMIN') ? _MD_A_MYMENU_MYTPLSADMIN : 'tplsadmin';
            $adminObject[] = ['title' => $title, 'link' => 'admin/index.php?mode=admin&lib=altsys&page=mytplsadmin'];
        }

        if (file_exists(XOOPS_TRUST_PATH . '/libs/altsys/myblocksadmin.php')) {
            // myblocksadmin
            $title         = defined('_MD_A_MYMENU_MYBLOCKSADMIN') ? _MD_A_MYMENU_MYBLOCKSADMIN : 'blocksadmin';
            $adminObject[] = ['title' => $title, 'link' => 'admin/index.php?mode=admin&lib=altsys&page=myblocksadmin'];
        }

        if (file_exists(XOOPS_TRUST_PATH . '/libs/altsys/mylangadmin.php')) {
            // mylangadmin
            $title         = defined('_MD_A_MYMENU_MYLANGADMIN') ? _MD_A_MYMENU_MYLANGADMIN : 'langadmin';
            $adminObject[] = ['title' => $title, 'link' => 'admin/index.php?mode=admin&lib=altsys&page=mylangadmin'];
        }

        // preferences
        /** @var \XoopsConfigHandler $configHandler */
        $configHandler = xoops_getHandler('config');
        if (count($configHandler->getConfigs(new \Criteria('conf_modid', $module->mid()))) > 0) {
            if (file_exists(XOOPS_TRUST_PATH . '/libs/altsys/mypreferences.php')) {
                // mypreferences
                $title         = defined('_MD_A_MYMENU_MYPREFERENCES') ? _MD_A_MYMENU_MYPREFERENCES : _PREFERENCES;
                $adminObject[] = [
                    'title' => $title,
                    'link'  => 'admin/index.php?mode=admin&lib=altsys&page=mypreferences',
                ];
            } elseif (defined('XOOPS_CUBE_LEGACY')) {
                // Cube Legacy without altsys
                $adminObject[] = [
                    'title' => _PREFERENCES,
                    'link'  => XOOPS_URL . '/modules/legacy/admin/index.php?action=PreferenceEdit&confmod_id=' . $module->getVar('mid'),
                ];
            } else {
                // system->preferences
                $adminObject[] = [
                    'title' => _PREFERENCES,
                    'link'  => XOOPS_URL . '/modules/system/admin.php?fct=preferences&op=showmod&mod=' . $module->mid(),
                ];
            }
        }
    } elseif (defined('XOOPS_CUBE_LEGACY')) {
        // Cube Legacy without altsys
        if ($module->getVar('hasconfig')) {
            $adminObject[] = [
                'title' => _PREFERENCES,
                'link'  => XOOPS_URL . '/modules/legacy/admin/index.php?action=PreferenceEdit&confmod_id=' . $module->getVar('mid'),
            ];
        }
    } else {
        // conventinal X2
        if ($module->getVar('hasconfig')) {
            $adminObject[] = [
                'title' => _PREFERENCES,
                'link'  => XOOPS_URL . '/modules/system/admin.php?fct=preferences&op=showmod&mod=' . $module->getVar('mid'),
            ];
        }
    }

    $mymenu_uri  = empty($mymenu_fake_uri) ? $_SERVER['REQUEST_URI'] : $mymenu_fake_uri;
    $mymenu_link = mb_substr(mb_strstr($mymenu_uri, '/admin/'), 1);

    // hilight
    foreach (array_keys($adminObject) as $i) {
        if ($mymenu_link == $adminmenu[$i]['link']) {
            $adminmenu[$i]['color']          = '#FFCCCC';
            $adminMenu_hilighted             = true;
            $GLOBALS['altsysAdminPageTitle'] = $adminmenu[$i]['title'];
        } else {
            $adminmenu[$i]['color'] = '#DDDDDD';
        }
    }
    if (empty($adminMenu_hilighted)) {
        foreach (array_keys($adminObject) as $i) {
            if (false !== mb_stripos($mymenu_uri, $adminmenu[$i]['link'])) {
                $adminmenu[$i]['color']          = '#FFCCCC';
                $GLOBALS['altsysAdminPageTitle'] = $adminmenu[$i]['title'];
                break;
            }
        }
    }

    // link conversion from relative to absolute
    foreach (array_keys($adminObject) as $i) {
        if (false === mb_stripos($adminmenu[$i]['link'], XOOPS_URL)) {
            $adminmenu[$i]['link'] = XOOPS_URL . "/modules/$moduleDirName/" . $adminmenu[$i]['link'];
        }
    }

    // display
    echo "<div style='text-align:left;width:98%;'>";
    foreach ($adminObject as $menuitem) {
        echo "<div style='float:left;height:1.5em;'><nobr><a href='" . htmlspecialchars($menuitem['link'], ENT_QUOTES) . "' style='background-color:{$menuitem['color']};font:normal normal bold 9pt/12pt;'>" . htmlspecialchars($menuitem['title'], ENT_QUOTES) . "</a> | </nobr></div>\n";
    }
    echo "</div>\n<hr style='clear:left;display:block;'>\n";
}
