<?php

if(isset($_POST['add_coal_seller'])){
    addCoalSeller($_POST['coal_seller_name'], $_POST['coal_seller_mobile'], $_POST['coal_seller_company']);
}

// Methods
function addCoalSeller($coal_seller_name, $coal_seller_mobile, $coal_seller_company){
    require_once('../connection.php');
    $insert_query = "INSERT INTO `coal_sellers`(`coal_seller_name`, `coal_seller_mobile`, `coal_seller_company`) VALUES ('$coal_seller_name','$coal_seller_mobile','$coal_seller_company')";


    if(!coalSellerDataCheck()){
        if($conn->query($insert_query)){
            $msg = urlencode("Data inserted successfully!");
            
            header("location: ../../public/pages/coal.php?msg=".$msg);
        }
        else{
            $msg = urlencode("Data Insertion Failed! ERR:".$conn->error);
            
            header("location: ../../public/pages/coal.php?msg=".$msg);
        }
    }else{
        $msg = urlencode("required all fields!");
            
            header("location: ../../public/pages/coal.php?msg=".$msg);
    }
}

// null check 
function coalSellerDataCheck(){

    $required = array('coal_seller_name', 'coal_seller_mobile', 'coal_seller_company');
    $error = false;
    foreach($required as $field) {
    if (empty($_POST[$field])) {
        $error = true;
    }
    }
}