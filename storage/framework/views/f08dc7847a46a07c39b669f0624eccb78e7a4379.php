<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="../../assets/css/normalize.css">

        
    </head>
    <body>
        <main id="main">

            <?php $__currentLoopData = $bills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <?php echo e($bill->id); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </main>
    </body>
</html>
