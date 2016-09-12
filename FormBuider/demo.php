<!--

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Demo</title>
    <link rel="stylesheet" href="./assets/bower_components/bootstrap/dist/css/bootstrap-theme.css" type="text/css"/>
    <link rel="stylesheet" href="./assets/bower_components/bootstrap/dist/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="../FormGenerator/assets/style.css" type="text/css"/>
    <style type="text/css">
        form, fieldset {
            width: 400px;
            margin-bottom: 2em;
            }
    </style>
</head>
<body>
<div class="container">

-->


    <?php
        function loadMyClass($formBuilder)
        {
            //Je vérifie que la classe n'a pas été déclarée

            if(class_exists($formBuilder) === FALSE) {
                //Si elle n'est pas déclarée je vérifie qu'elle existe bien dans le dossier "model"
                //à vous de changer ce dossier par le votre

                $string = $formBuilder.'.php';
                if(file_exists($string) === TRUE) {
                    require $string;
                }
            }
        }

        spl_autoload_register('loadMyClass');


        $form = new formBuilder('post');

        $form->addLabel('Username');
        $form->addInput('text','inputEmail','form-control', 'Username', '', 'Username');

        $form->addLabel('Password');
        $form->addInput('password','inputPassword','form-control', 'password', 'Password', 'password');

        $form->addLabel('Email');
        $form->addInput('email','inputEmail','form-control', 'inputEmail', ' ', 'Your eMail Address');

///*        $form->addLabel('Pseudo : ');
//        $form->addInput('textarea','textarea','form-control', 'pseudo', " ", 'pseudo');*/

        $form->addInput('submit','btn','btn btn-lg btn-danger btn-block', 'submit_login', 'submit', 'submit');


        $formHTML = $form->generateForm();
        print $formHTML;
    ?>
</div>

<script src="../FormGenerator/assets/bower_components/jquery/dist/jquery.js"></script>
<script src="../FormGenerator/assets/bower_components/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>
