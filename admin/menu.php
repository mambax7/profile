<?php
/**
 * Extended User Profile
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package             profile
 * @since               2.3.0
 * @author              Jan Pedersen
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 */

// defined('XOOPS_ROOT_PATH') || exit('XOOPS root path not defined');

$path = dirname(dirname(dirname(__DIR__)));
include_once $path . '/mainfile.php';

$pathIcon32 = \Xmf\Module\Admin::menuIconPath('');

$dirname         = basename(dirname(__DIR__));
/** @var XoopsModuleHandler $moduleHandler */
$moduleHandler  = xoops_getHandler('module');
$module          = $moduleHandler->getByDirname($dirname);
$pathModuleAdmin = $module->getInfo('dirmoduleadmin');
$pathLanguage    = $path . $pathModuleAdmin;

if (!file_exists($fileinc = $pathLanguage . '/language/' . $GLOBALS['xoopsConfig']['language'] . '/' . 'main.php')) {
    $fileinc = $pathLanguage . '/language/english/main.php';
}
include_once $fileinc;

$adminmenu[] = array(
    'title' => _PROFILE_MI_HOME,
    'link'  => 'admin/index.php',
    'icon'  => $pathIcon32 . '/home.png'
);

$adminmenu[] = array(
    'title' => _PROFILE_MI_USERS,
    'link'  => 'admin/user.php',
    'icon'  => $pathIcon32 . '/users.png'
);

$adminmenu[] = array(
    'title' => _PROFILE_MI_CATEGORIES,
    'link'  => 'admin/category.php',
    'icon'  => $pathIcon32 . '/category.png'
);

$adminmenu[] = array(
    'title' => _PROFILE_MI_FIELDS,
    'link'  => 'admin/field.php',
    'icon'  => $pathIcon32 . '/index.png'
);

$adminmenu[] = array(
    'title' => _PROFILE_MI_STEPS,
    'link'  => 'admin/step.php',
    'icon'  => $pathIcon32 . '/stats.png'
);

$adminmenu[] = array(
    'title' => _PROFILE_MI_PERMISSIONS,
    'link'  => 'admin/permissions.php',
    'icon'  => $pathIcon32 . '/permissions.png'
);

$adminmenu[] = array(
    'title' => _PROFILE_MI_ABOUT,
    'link'  => 'admin/about.php',
    'icon'  => $pathIcon32 . '/about.png'
);
