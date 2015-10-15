<?php
/**
 * This file is called directly after the pimcore startup (/pimcore/config/startup.php)
 * Here you can do some modifications before the dispatch process begins, this includes some Zend Framework plugins
 * or some other things which should be done before the initialization of pimcore is completed, below are some examples.
 * IMPORTANT: Please rename this file to startup.php to use it!
 */

/*
// register a custom ZF controller plugin
$front = Zend_Controller_Front::getInstance();
$front->registerPlugin(new Website_Controller_Plugin_Custom(), 700);
*/

/*
// register a custom ZF route
$router = $front->getRouter();
$routeCustom = new Zend_Controller_Router_Route(
    'custom/:controller/:action/*',
    array(
        'module' => 'custom',
        "controller" => "index",
        "action" => "index"
    )
);
$router->addRoute('custom', $routeCustom);
$front->setRouter($router);
*/
if (!defined("PIMCORE_BLOG_PATH"))  define("PIMCORE_BLOG_PATH", PIMCORE_PLUGINS_PATH . "/Blog");
if (!defined("PIMCORE_BLOGSCRIPT_PATH"))  define("PIMCORE_BLOGSCRIPT_PATH", PIMCORE_BLOG_PATH . "/views/scripts");
if (!defined("PIMCORE_WEBSITE_LAYOUTS"))  define("PIMCORE_WEBSITE_LAYOUTS",  "/website/views/layouts");
if (!defined("HOST_PATH"))  define("HOST_PATH","http://".$_SERVER['HTTP_HOST']);
if (!defined("PIMCORE_LAYOUTS_DIRECTORY"))  define("PIMCORE_LAYOUTS_DIRECTORY", PIMCORE_WEBSITE_PATH . "/views/layouts");
if (!defined("PIMCORE_SCRIPTS_DIRECTORY"))  define("PIMCORE_SCRIPTS_DIRECTORY", PIMCORE_WEBSITE_PATH . "/views/scripts");
if (!defined("PIMCORE_TMP_DIRECTORY"))  define("PIMCORE_TMP_DIRECTORY", PIMCORE_WEBSITE_PATH . "/var/tmp");
