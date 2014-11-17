<?php
/***********************
 * handler.php
 * This provides a smarty handler class and set some path for smarty.
 * ********************/
session_start();
include_once("class/Smarty.class.php");
define('__SITE_ROOT', '.');

class Handler extends Smarty
{
    public function __construct($title="", $content="")
    {
        parent::__construct();
        $this->template_dir = __SITE_ROOT . "/templates/";
        $this->compile_dir = __SITE_ROOT . "/templates_c/";
        $this->config_dir = __SITE_ROOT . "/configs/";
        $this->cache_dir = __SITE_ROOT . "/cache/";
        $this->left_delimiter = '<{';
        $this->right_delimiter = '}>';

        if(isset($_SESSION['id']))
            $this->assign("login",true);
        if(isset($_SESSION['teacher']))
            $this->assign("teacher",true);
        if(isset($_SESSION['student']))
            $this->assign("student",true);
        $title = "Fake Moodle: ".$title;  // TITLE COULD BE RESET
        $this->assign("title", $title);
        $this->assign("content", $content);

    }
}

?>
