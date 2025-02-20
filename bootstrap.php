<?php
declare(strict_types=1);
const INCLUDES_DIR = __DIR__.'/includes';
const ROUTES_DIR = __DIR__.'/routes';
const TEMPLATES_DIR = __DIR__.'/templates';
const STYLE_DIR = TEMPLATES_DIR.'/css';
const SECTIONS_DIR = TEMPLATES_DIR.'/sections//';
require_once INCLUDES_DIR.'/router.php';
require_once INCLUDES_DIR.'/view.php';

error_reporting(E_ALL);
ini_set('display_errors',1);

?>