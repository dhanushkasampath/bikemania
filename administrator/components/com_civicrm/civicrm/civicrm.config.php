<?php
define('CIVICRM_SETTINGS_PATH', 'C:\wamp64\www\Joomla_3\administrator\components\com_civicrm\civicrm.settings.php');
$error = @include_once( 'C:\wamp64\www\Joomla_3\administrator\components\com_civicrm\civicrm.settings.php' );
if ( $error == false ) {
    echo "Could not load the settings file at: C:\wamp64\www\Joomla_3\administrator\components\com_civicrm\civicrm.settings.php
";
    exit( );
}

// Load class loader
require_once $civicrm_root . '/CRM/Core/ClassLoader.php';
CRM_Core_ClassLoader::singleton()->register();