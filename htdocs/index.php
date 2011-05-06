<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once 'content.php';

// @todo use firstNotNull
$page = 'Das-Projekt';
if (isset($_GET['page']))
{
  $page = $_GET['page'];
}

$page = str_replace(' ', '-', $page);
$page = str_replace('/', '|', $page);
//$page = ucfirst(strtolower($page));

$path = explode( '|', $page );

$template = 'template.php';
$content = new Content(__DIR__ . '/content/' . $page . '.md');

$menu = unserialize( file_get_contents('../menu.serialize' ));

include_once $template;
