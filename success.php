<?php
/**
 * Created by PhpStorm.
 * User: jonsnow
 * Date: 9/20/17
 * Time: 3:15 AM
 */

require './vendor/autoload.php';
$con=new MongoDB\Client("mongodb://127.0.0.1:27017");

//$db = $con->cleverinvestor;  //for creating database if it does exist

//$register = $db->registration;  //for creating document named registration
$regist=array("name"=>$_POST['name'],"email"=>$_POST['email'],"password"=>$_POST['password'],"mobile"=>$_POST['mobile'],"dob"=>$_POST['dob'],"gender"=>$_POST['gender']);
echo "after";
//print_r($register);
//print_r($registration.insertOne($register));
//print_r($registration);
//$register.insertOne(['name'=>'amit','email'=>'amit321.kumar']);
echo "sucess page executed";

$db = $con->cleverinvestor;
// Creating Document
$collection = $db->registration;
// Insering Record
$collection->insertOne( $regist );
// Fetching Record
$record = $collection->find( [ 'name' =>'amit'] );
foreach ($record as $employe) {
    echo $employe['name'], ': ', $employe['email']."<br>";
}