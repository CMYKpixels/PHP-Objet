<?php
    require_once 'includes/functions.php';

//Traitement
$msg='';
if(isset($_POST['email'])&&isset($_POST['password']))
{ 
    $email=$_POST['email'];
    $password=$_POST['password'];    
    $user=connect($email,$password);
    if($user !=false){
        $_SESSION['user']=$user;
        setcookie('user',serialize($user),time(3600));
        header("location:index.php");
    }
    else
	{
        $msg="<span class='alert'>Login ou mot de passe incorrects</span>";
    }
/*	elseif($user !=false)
	{
		$_SESSION['stillConnect']=['0'];
		setcookie('user',serializable($user),time())
	}
}*/

    include 'includes/header.php';
    echo $msg;
?>



<form class='form-inline' method="post">
    <input type='text' class='form-control' name='email' placeholder="email"/>
    <input type='password' class='form-control' name='password' placeholder="password"/>
    <input class="btn btn-success" type="submit"/>
</form>



<?php
    include 'includes/footer.php';
?>