<?php
require_once('connection.php');
require_once('./model/User.php');
$username = $_POST['username'];
$password = $_POST['password'];


$query ="select * from `users` where `user_name`= '$username' AND `user_password`= '$password'";
if(!empty($username) && !empty($password)){
    $result =$conn->query($query);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $user=new User($row['user_name'], $row['user_mobile'], $row['user_role'], $row['user_password']);
        header("location: ../public/index.php?username=".$user->getUserName()."&role=".$user->getUserRole());
    }else{
        $errMsg = urlencode("Password or username did not matched ");
        
        header("location: ../public/pages/login.php?loginError=".$errMsg);
    }
}else{
    $errMsg = urlencode("one or more field is empty");
        
        header("location: ../public/pages/login.php?loginError=".$errMsg);
}
function get_session(){
    return $_SESSION['login'];
}

function user_logout(){
    $_SESSION['login'] = FALSE;
    session_destroy();
}