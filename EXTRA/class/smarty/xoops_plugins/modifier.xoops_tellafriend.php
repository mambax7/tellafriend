<?php

/**
 * @param string $string
 * @param string $subject
 * @return string
 */
function smarty_modifier_xoops_tellafriend($string, $subject = '')
{
    if (false !== mb_stripos($subject, '%')) {
        $subject = rawurldecode($subject);
    }
    if (false !== mb_stripos($string, '%3F')) {
        $string = rawurldecode($string);
    }

    if (preg_match('/(' . preg_quote(XOOPS_URL, '/') . '.*)$/i', $string, $matches)) {
        $target_uri = str_replace('&amp;', '&', $matches[1]);
    } else {
        $target_uri = XOOPS_URL . $_SERVER['REQUEST_URI'];
    }

    return XOOPS_URL . '/modules/tellafriend/index.php?target_uri=' . rawurlencode($target_uri) . '&amp;subject=' . rawurlencode($subject);
}
