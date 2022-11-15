<?php
session_start();

include './includ/function.php';

if($_SERVER['REQUEST_METHOD'] != $_POST && empty($_POST))
die('you are not allowed to acces this');
 echo var_dump($_SERVER['REQUEST_METHOD']);

$_SESSION['error']= null;
$email=isset($_POST['email'])? $_post['email'] :null;
$password=isset($_POST['password'])? $_POST['password']:null;

$error=false;
$error_msg='';
 
if (!empty($email) && !empty ($password)) {
    $users=file_get_contents('./data_app/user.json');
    $users=json_decode($users);
    $valid_user='';
   
    foreach ($users as $user) {
        if ($user->email == $email) {
            $valid_user =$user;
            break;
        }
    }

    if(!empty( $valid_user)) {
         if ( $password !=  $valid_user->password) {  
         $error=true;
         $error_msg='your email or password is incorected';
          } 
    }else{
        $error=true;
        $error_msg='your email or password is incorected';


    }

}else{
    $error=true;
    $error_msg='you have to enter information';
}
if($error){
    $_SESSION['error']=$error_msg;
    animl_redirect('./');
}else{
    $_SESSION['user'] = array(
            'display_name' => $valid_user ->display_name
        );
        animl_redirect('./home.php');
}
