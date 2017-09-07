<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @copyright      {@link https://xoops.org/ XOOPS Project}
 * @license        {@link http://www.gnu.org/licenses/gpl-2.0.html GNU GPL 2 or later}
 * @package
 * @since
 * @author         XOOPS Development Team
 */

// defined('XOOPS_ROOT_PATH') || exit('Restricted access.');

$moduleDirName = basename(__DIR__);

$modversion['version']             = 1.07;
$modversion['module_status']       = 'Beta 1';
$modversion['release_date']        = '2017/04/23';
$modversion['name']                = _MI_TELLAFRIEND_MODNAME;
$modversion['description']         = _MI_TELLAFRIEND_MODDESC;
$modversion['credits']             = 'PEAK Corp. http://www.peak.ne.jp/';
$modversion['author']              = 'GIJOE';
$modversion['help']                = 'page=help';
$modversion['license']             = 'GNU GPL 2.0 or later';
$modversion['license_url']         = 'www.gnu.org/licenses/gpl-2.0.html';
$modversion['official']            = 0; //1 indicates supported by Xoops CORE Dev Team, 0 means 3rd party supported
$modversion['image']               = 'assets/images/logoModule.png';
$modversion['dirname']             = basename(__DIR__);
$modversion['modicons16']          = 'assets/images/icons/16';
$modversion['modicons32']          = 'assets/images/icons/32';
$modversion['release_file']        = XOOPS_URL . '/modules/' . $modversion['dirname'] . '/docs/changelog.txt';
$modversion['module_website_url']  = 'www.xoops.org';
$modversion['module_website_name'] = 'XOOPS';
$modversion['min_php']             = '5.5';
$modversion['min_xoops']           = '2.5.9';
$modversion['min_admin']           = '1.2';
$modversion['min_db']              = ['mysql' => '5.5'];

// Sql file
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';

// Tables created by sql file
$modversion['tables'][0] = 'tellafriend_log';

//Admin things
$modversion['hasAdmin']    = 1;
$modversion['system_menu'] = 1;
$modversion['adminindex']  = 'admin/index.php';
$modversion['adminmenu']   = 'admin/menu.php';

// Menu
$modversion['hasMain'] = 1;

// ------------------- Help files ------------------- //
$modversion['helpsection'] = [
    ['name' => _MI_TELLAFRIEND_OVERVIEW, 'link' => 'page=help'],
    ['name' => _MI_TELLAFRIEND_DISCLAIMER, 'link' => 'page=disclaimer'],
    ['name' => _MI_TELLAFRIEND_LICENSE, 'link' => 'page=license'],
    ['name' => _MI_TELLAFRIEND_SUPPORT, 'link' => 'page=support'],
];

// Config Settings
$modversion['hasconfig'] = 1;

$modversion['config'][1] = [
    'name'        => 'max4guest',
    'title'       => '_MI_TELLAFRIEND_MAX4GUEST',
    'description' => '',
    'formtype'    => 'textbox',
    'valuetype'   => 'int',
    'default'     => '5',
    'options'     => []
];

$modversion['config'][] = [
    'name'        => 'max4user',
    'title'       => '_MI_TELLAFRIEND_MAX4USER',
    'description' => '',
    'formtype'    => 'textbox',
    'valuetype'   => 'int',
    'default'     => '10',
    'options'     => []
];

$modversion['config'][] = [
    'name'        => 'can_bodyedit',
    'title'       => '_MI_TELLAFRIEND_BODYEDIT',
    'description' => '',
    'formtype'    => 'yesno',
    'valuetype'   => 'int',
    'default'     => true,
    'options'     => []
];

// Templates
$modversion['templates'][1]['file']        = 'tellafriend_form.tpl';
$modversion['templates'][1]['description'] = 'Tell a Friend Form';
