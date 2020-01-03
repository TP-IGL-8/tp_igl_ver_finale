<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script>Window.Laravel={csrfToken: '<?php echo e(csrf_token()); ?>'}</script>
        <link href="<?php echo e(asset('css/app.css')); ?>">
    </head>
    <body>
        <div id="app">
                <h1>Yey!</h1>
                <v-btn primary>Material Button</v-btn>
                <navbar-comp></navbar-comp>
        </div>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\tp_igl\resources\views/app.blade.php ENDPATH**/ ?>