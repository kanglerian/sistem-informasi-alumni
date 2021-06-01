<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <?php echo $__env->make('includes.client.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <title>Cari Data Alumni | Sistem Informasi Data Alumni Bekerja</title>
</head>

<body>
    
    
    <?php echo $__env->make('includes.client.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('includes.client.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->yieldContent('content'); ?>

    
    <?php echo $__env->make('includes.client.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</body>

</html><?php /**PATH /Users/mjlq2/Documents/Lerian/project-ta/resources/views/layouts/data.blade.php ENDPATH**/ ?>