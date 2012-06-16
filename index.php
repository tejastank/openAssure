<?php
error_reporting(E_ALL);
include_once("libs/Smarty-3.1.10/libs/Smarty.class.php");

$smarty = new Smarty;

$smarty->setTemplateDir('./templates/');
$smarty->setCompileDir('./templates_c/');
$smarty->setConfigDir('./configs/');
$smarty->setCacheDir('./cache/');
//   $smarty->testInstall(); # testing installation of smarty.
/*  please note that tempalates_c dicrecotry must have persmission to create / write too..
 * 
 */

//
// assign some content. This would typically come from
// a database or other source, but we'll use static
// values for the purpose of this example.
$smarty->assign('name', 'george smith');
$smarty->assign('address', '45th & Harris');

// display it
$smarty->display('templates/header.tpl');

?>
