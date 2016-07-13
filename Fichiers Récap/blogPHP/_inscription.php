<?php
require_once('Includes/functions.php');

$msg='';
if(checkParams(
                array(
                    'firstname',
                    'lastname',
                    'email',
                    'password',
                    'check_password'
                    )
                )     
  ){
    if($_POST['password']==$_POST['check_password']){
        $success=saveUser(
                $_POST['firstname'],
                $_POST['lastname'],
                $_POST['email'],
                $_POST['password']);
        if($success)
        {
            header('location:connect.php');
        }
        else
        {
            $msg.="<p class='error'>Erreur lors de l'inscription</p>";
        }
        
    }
  }
include 'Includes/header.php';
echo $msg;
?>
<form method='post'>
    <input type='text' name='firstname' placeholder='firstname'>
    <input type='text' name='lastname' placeholder='lastname'>
    <input type='text' name='email' placeholder='email'>
    <input type='password' name='password' placeholder='password'>
    <input type='password' name='check_password' placeholder='password check'>
    <input type='submit'>
</form>

<?php
include 'Includes/footer.php';

