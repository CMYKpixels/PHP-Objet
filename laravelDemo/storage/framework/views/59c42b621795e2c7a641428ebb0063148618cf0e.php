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
                <div class="title">Super Sonico</div>
                <div class="textarea">Sonico.blade.template</div>
                <div class="textarea">Quel temps fait il ?</div>


                <?php foreach($superSonico as $key): ?>
                    <?php if ( ! ($key== "il fait soleil")): ?>
                    <?php echo e($key); ?><br>
                    <?php endif; ?>
                 <?php endforeach; ?>

                <?php foreach($superSonico as $key): ?>
                <?php echo e($key); ?>

                <?php endforeach; ?>

            </div>
        </div>
    </body>
</html>