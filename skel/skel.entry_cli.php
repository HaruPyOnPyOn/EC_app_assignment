<?php
/**
 *  {$action_name}.php
 *
 *  @author     {$author}
 *  @package    Yururi
 */
chdir(dirname(__FILE__));
require_once '{$dir_app}/Yururi_Controller.php';

ini_set('max_execution_time', 0);

Yururi_Controller::main_CLI('Yururi_Controller', '{$action_name}');
