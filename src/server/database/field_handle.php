<?php

if(isset($_POST['field_add'])){
    // echo strval($single_field->getFieldOwner());
    $formatted_date = date('Y-m-d', strtotime($_POST['date']));
    addField($_POST['field_owner'], $formatted_date, $_POST['quantity'], $_POST['rate'], $_POST['total'], $_POST['paid'], $_POST['due']);
}

if(isset($_POST['owner_add'])){
    addOwner($_POST['owner_name'],$_POST['owner_mobile'], $_POST['owner_address']);
}

if(isset($_GET['delete']) && $_GET['delete']>0){
    echo $_GET['delete'];
}

if(isset($_GET['edit']) && $_GET['edit']>0){
    echo $_GET['edit'];
}


function addField($field_owner, $date, $quantity, $rate, $total, $paid, $due){
    require_once('../connection.php');
    $insert_query = "INSERT INTO `field_property`(`field_owner`, `date`, `quantity`, `rate`, `total`, `paid`, `due`) VALUES ('$field_owner','$date','$quantity','$rate','$total','$paid','$due')";


    if(!dataCheck()){
        if($conn->query($insert_query)){
            $msg = urlencode("Data inserted successfully!");
            
            header("location: ../../public/pages/field.php?msg=".$msg);
        }
        else{
            $msg = urlencode("Data Insertion Failed! ERR:".$conn->error);
            
            header("location: ../../public/pages/field.php?msg=".$msg);
        }
    }else{
        $msg = urlencode("required all fields!");
            
            header("location: ../../public/pages/field.php?msg=".$msg);
    }
}

function addOwner($owner_name, $owner_mobile, $owner_address){
    require_once('../connection.php');
    $insert_query = "INSERT INTO `field_owners`(`owner_name`, `owner_mobile`, `owner_address`) VALUES ('$owner_name','$owner_mobile','$owner_address')";


    if(!owner_dataCheck()){
        if($conn->query($insert_query)){
            $msg = urlencode("Data inserted successfully!");
            
            header("location: ../../public/pages/field.php?msg=".$msg);
        }
        else{
            $msg = urlencode("Data Insertion Failed! ERR:".$conn->error);
            
            header("location: ../../public/pages/field.php?msg=".$msg);
        }
    }else{
        $msg = urlencode("required all fields!");
            
            header("location: ../../public/pages/field.php?msg=".$msg);
    }
}

function dataCheck(){

    $required = array('field_owner', 'date', 'quantity', 'rate', 'total', 'paid', 'due');
    $error = false;
foreach($required as $field) {
  if (empty($_POST[$field])) {
    $error = true;
  }
}

return $error;
}


function owner_dataCheck(){

    $required = array('owner_name', 'owner_mobile', 'owner_address');
    $error = false;
foreach($required as $field) {
  if (empty($_POST[$field])) {
    $error = true;
  }
}

return $error;
}



