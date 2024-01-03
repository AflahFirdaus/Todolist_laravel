<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan</title>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="https://pro.fontawsome.com/releases/v5.10.0/css/all.css">
    <script type="text/javascript" src="<?php echo e(asset('assets')); ?>/js/jquery-3.2.1.main.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets')); ?>//js/bootstrap.js"></script>
    <script src="https://akax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.main.js"></script>

</head>
<body>
    <div class="container" style="background:#ccc">
    <div class="alret alret-info text-center">
        <h4 style="margin-bottom: 0px"><b>Selamat Datang</b> di Perpustakaan</h4>
    </div>
        <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('konten', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</body>
</html><?php /**PATH C:\tesLaravel\test\resources\views/index.blade.php ENDPATH**/ ?>