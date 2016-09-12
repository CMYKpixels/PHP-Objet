<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>



<div class="container">
    <div class="content">
        <?php if(count($errors) > 0): ?>
            <div class="alert alert_danger">
        <ul>
            <?php foreach($errors->all() as $error): ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
        <?php endif; ?>
        <div class="title">Super Sonico</div>
        <div class="textarea">Form.blade.template</div>


        <?php echo e(Form::open(array('route'=>'newPaintingService'))); ?>

        <?php /*equivalent*/ ?>
        <?php /*<?php echo e(Form::open(array('url'=>'Painting/create'))); ?>*/ ?>

        <hr>
        <?php echo e(Form::label('email','Email')); ?>

        <?php echo e(Form::text('email','',
        ['class'=>'form-control ',
        'placeholder' => 'Please enter your email address'])); ?>


        <?php echo $errors->first('email',"<div class='alert alert-danger'><strong>:message</strong></div>"); ?>


        <br>
        <div class="form-signin">
            <?php echo e(Form::label('os', 'Operating System')); ?>

            <?php echo e(Form::select('os',array(
            'linux'=>'Linux',
            'mac'=>'Mac OS X',
            'Win10'=> 'Windows 10'
            ))); ?>

        </div>
        <br>
        <?php echo e(Form::label('comment', 'comment')); ?><br>
        <?php echo e(Form::textarea('comment','',array('placeholder'=>'Comments goes here Mothafuckazzz'))); ?>


        <?php echo $errors->first('comment',"<div class='alert alert-danger'><strong>:message</strong></div>"); ?>


        <br>
        <?php echo e(Form::submit('submit','',
        array(
        'class'=>'btn btn-large btn-warning'
        ),'submit'
        )); ?>


        <?php echo e(Form::close()); ?>


    </div>
</div>
</body>
</html>
