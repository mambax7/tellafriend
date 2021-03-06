<?php

define('_MI_TELLAFRIEND_MODNAME', 'Tell a Friend');
define('_MI_TELLAFRIEND_MODDESC', "MailForm for 'tell a friend' via a customized modifier of Smarty");

// The name of this module
define('_MI_TELLAFRIEND_NAME', 'Tell a Friend');
define('_MI_TELLAFRIEND_DESC', "MailForm for 'tell a friend' via a customized modifier of Smarty");

define('_MI_TELLAFRIEND_INVALIDMAILFROM', "An invalid format found in 'From' address");
define('_MI_TELLAFRIEND_INVALIDMAILTO', "An invalid format found in 'To' address");
// %s is user's name
define('_MI_TELLAFRIEND_MAILBODYNAME', "This is an introduction from %s\n");
define('_MI_TELLAFRIEND_MESSAGESENT', 'A mail has just been sent');
define('_MI_TELLAFRIEND_SENDERROR', 'An error has occurred');
// %s is sitename
define('_MI_TELLAFRIEND_DEFAULTSUBJ', 'Interesting topics found in %s');
// %s is URI of the item
define('_MI_TELLAFRIEND_DEFAULTBODY', "I've just found interesting topics \n see this: \n %s");
define('_MI_TELLAFRIEND_FORMTHFROMNAME', 'Your Name');
define('_MI_TELLAFRIEND_FORMTHFROMEMAIL', 'Your Email');
define('_MI_TELLAFRIEND_FORMTHTO', 'Mail address');
define('_MI_TELLAFRIEND_FORMTHSUBJ', 'Subject');
define('_MI_TELLAFRIEND_FORMTHBODY', 'Message body');
define('_MI_TELLAFRIEND_BUTTONSEND', 'Send it!');
define('_MI_TELLAFRIEND_FORMTITLE', 'Fill in all items, please');

define('_MI_TELLAFRIEND_MAX4GUEST', 'Max mail for a guest a day (per IP)');
define('_MI_TELLAFRIEND_MAX4USER', 'Max mail for a user a day (per uid)');
define('_MI_TELLAFRIEND_BODYEDIT', 'Allow to edit mail body');
define('_MI_TELLAFRIEND_TOOMANY', "Too many mails you've sent, today");

define('_MI_TELLAFRIEND_LOG', 'Log Admin');
define('_MI_TELLAFRIEND_GROUPADMIN', 'Group admin');

//1.07
//Help
define('_MI_TELLAFRIEND_DIRNAME', basename(dirname(__DIR__, 2)));
define('_MI_TELLAFRIEND_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
define('_MI_TELLAFRIEND_BACK_2_ADMIN', 'Back to Administration of ');
define('_MI_TELLAFRIEND_OVERVIEW', 'Overview');

//define('_MI_TELLAFRIEND_HELP_DIR', __DIR__);

//help multi-page
define('_MI_TELLAFRIEND_DISCLAIMER', 'Disclaimer');
define('_MI_TELLAFRIEND_LICENSE', 'License');
define('_MI_TELLAFRIEND_SUPPORT', 'Support');

define('_MI_TELLAFRIEND_HOME', 'Home');
define('_MI_TELLAFRIEND_ABOUT', 'About');
