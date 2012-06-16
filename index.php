<?php
include_once("libs/Smarty-3.1.10/libs/Smarty.class.php");

$smarty = new Smarty;

// assign some content. This would typically come from
// a database or other source, but we'll use static
// values for the purpose of this example.
$smarty->assign('name', 'george smith');
$smarty->assign('address', '45th & Harris');

// display it
try{

$smarty->display('header.tpl');

}catch($e)
{
    print_r($e);
}

?>
