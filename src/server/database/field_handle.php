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
    require_once('../../server/connection.php');
        $query = "SELECT * from `field_owners` WHERE `id`=".$_GET['delete'];


        $result = $conn->query($query);

            if($result->num_rows>0){
                $delete_query = "DELETE FROM `field_owners` WHERE `id`=".$_GET['delete'];
                if($conn->query($delete_query)==TRUE){
                    $msg = urlencode("Data Deleted!");
                    header("location: ../../public/pages/field.php?msg=".$msg);
                }
            }
            else{
                $msg="Data Deletion Failed!";
                header("location: ../../public/pages/field.php?msg=".$msg);
            }
}

if(isset($_POST['edit_owner'])){
    updateOwnerById($_POST['owner_id'],$_POST['owner_name'],$_POST['owner_mobile'], $_POST['owner_address']);
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

function updateOwnerById($id,$owner_name, $owner_mobile, $owner_address){
    require_once('../connection.php');
    $update_query = "UPDATE `field_owners` SET `owner_name`='$owner_name',`owner_mobile`='$owner_mobile',`owner_address`='$owner_address' WHERE `id`='$id'";

    if(!owner_dataCheck()){
        if($conn->query($update_query)){
            $msg = urlencode("Data updated");
            
            header("location: ../../public/pages/field.php?msg=".$msg);
        }else{
            
            header("location: ../../public/pages/field.php?msg=".$msg.$conn->error);
        }
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



