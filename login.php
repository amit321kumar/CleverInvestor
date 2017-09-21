<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 9/20/17
 * Time: 12:43 PM
 */
//echo "before";
require_once 'database.php';
//echo "hey";
$db=$connection->cleverinvestor;
$login=$db->registration;
//echo "hello";
$resultset=$login->findOne(["name"=>$_POST['name'],"password"=>$_POST['password']]);
//echo "world";
//print_r($resultset);
print_r($resultset['mobile']);
if($resultset['_id']!=null)
{
    echo "welcome".":".$resultset['name'];
}
else{
    echo "invalid credentials";
}


//echo "<h1>hello</h1>";

