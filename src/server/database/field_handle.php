<?php
require_once('../connection.php');
require_once('../model/Field.php');

if(isset($_POST['field_add'])){

    $single_field = new Field($_POST['field_owner'],$_POST['date'],$_POST['quantity'],$_POST['rate'],$_POST['total'],$_POST['paid'],$_POST['due']);
    
    $formatted_date = date('Y-m-d', strtotime($single_field->getdate()));

    $insert_query = "INSERT INTO `field_property`(`field_owner`, `date`, `quantity`, `rate`, `total`, `paid`, `due`) VALUES ($single_field->getFieldOwner(),'$formatted_date','$single_field->getQuantity()','$single_field->getRate()','$single_field->getTotal()','$single_field->getPaid()','$single_field->getDue()')";

    if($conn->query($insert_query)){
        echo "Data inserted successfully!";
    }else echo "something went wrong!";
}



