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
        @if (count($errors) > 0)
            <div class="alert alert_danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
        @endif
        <div class="title">Super Sonico</div>
        <div class="textarea">Form.blade.template</div>


        {{Form::open(array('route'=>'newPaintingService'))}}
        {{--equivalent--}}
        {{--{{Form::open(array('url'=>'Painting/create'))}}--}}

        <hr>
        {{Form::label('email','Email')}}
        {{Form::text('email','',
        ['class'=>'form-control ',
        'placeholder' => 'Please enter your email address'])}}

        {!! $errors->first('email',"<div class='alert alert-danger'><strong>:message</strong></div>") !!}

        <br>
        <div class="form-signin">
            {{Form::label('os', 'Operating System')}}
            {{Form::select('os',array(
            'linux'=>'Linux',
            'mac'=>'Mac OS X',
            'Win10'=> 'Windows 10'
            ))}}
        </div>
        <br>
        {{Form::label('comment', 'comment')}}<br>
        {{Form::textarea('comment','',array('placeholder'=>'Comments goes here Mothafuckazzz'))}}

        {!! $errors->first('comment',"<div class='alert alert-danger'><strong>:message</strong></div>") !!}

        <br>
        {{Form::submit('submit','',
        array(
        'class'=>'btn btn-large btn-warning'
        ),'submit'
        )}}

        {{Form::close()}}

    </div>
</div>
</body>
</html>
