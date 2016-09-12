<!DOCTYPE html>
<html>
   <head>
       <link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/slate/bootstrap.min.css" rel="stylesheet" />
        <title>Mon site</title>
        <meta charset="utf-8"/>
        <link rel='stylesheet' src="/css/bootstrap.css"/>
        <link rel='stylesheet' src="/css/bootstrap-theme.css"/>
        <link rel='stylesheet' src="/css/styles.css"/>
    </head>
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
        else{
            $msg="<span class='alert'>Login ou mot de passe incorrects</span>";
        }
    }
        echo $msg;
    ?>    
<!--Fin traitement-->
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <span class="navbar-brand">CMYKpixels</span>  
                </div>
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li><a href="index.php">Retour</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
<!--/////////////////////////////////DROPDOWN///LOGIN//START///////////////////////////////////-->
<li class="dropdown">
    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
        <span class="glyphicon glyphicon-log-in"></span> Sign In 
        <span class="caret"></span>
    </a>
    <div class="dropdown-menu">
        <form method="post" style="padding: 15px; padding-bottom: 0px;">
        <input type="email" style="margin-bottom: 15px;" type="text" name="email" size="30" placeholder="Your email" />
        <input type="password" style="margin-bottom: 15px;" name="password" size="30" placeholder="********"/>
        <input id="stillConnect" style="float: left; margin-right: 10px;" type="checkbox" value="1" name="stillConnect" />
        <label class="string optional" for="stillConnect"> Stay Connected</label>

        <input class="btn btn-success" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
        </form>
    </div>
</li>
<!--/////////////////////////////////DROPDOWN///LOGIN//END/////////////////////////////////////-->
<li class="dropdown">
    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
        <span class="glyphicon glyphicon-log-in"></span> Sign Up 
        <span class="caret"></span>
    </a>
    <div class="dropdown-menu">
        <form method="post" style="padding: 15px; padding-bottom: 0px;">
        <input style="margin-bottom: 15px;" type="text" name="firstname" size="30" placeholder="Your firstname" />
        <input type="text" style="margin-bottom: 15px;" name="lastname" size="30" placeholder="Your lastname"/>
        <input style="margin-bottom: 15px;" type="text" name="email" size="30" placeholder="Your email" />
        <input style="margin-bottom: 15px;" name="password" size="30" placeholder="******"/>
        <input id="stillConnect" style="float: left; margin-right: 10px;" type="checkbox" value="1" name="stillConnect" />
        <label class="string optional" for="stillConnect"> Stay Connected</label>
        <input class="btn btn-success" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
        </form>
    </div>
</li>
  
                </ul>
            </div>
        </nav>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/npm.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>