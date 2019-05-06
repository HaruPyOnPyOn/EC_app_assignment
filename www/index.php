<?php

require_once dirname(__FILE__) . '/../app/Yururi_Controller.php';

/**
 * If you want to enable the UrlHandler, comment in following line,
 * and then you have to modify $action_map on app/Yururi_UrlHandler.php .
 *
 */
// $_SERVER['URL_HANDLER'] = 'index';

/**
 * Run application.
 */
Yururi_Controller::main('Yururi_Controller', 'index');

