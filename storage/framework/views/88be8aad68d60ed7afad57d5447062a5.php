<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
</head>
    <body>
    <div>
        <a href="<?php echo e($links["url1"]); ?>"><?php echo e($links["url1"]); ?></a>
    </div>
    <div>
          <a href="<?php echo e($links["url2"]); ?>"><?php echo e($links["url2"]); ?></a>
    </div>
    <?php if(!(empty($fio) || empty($phone)) ): ?>
    <div>
        <?php echo e(mb_substr($fio,0,160,'UTF-8')); ?>

    </div>
    <div>
        <?php echo e(preg_replace("/[^0-9]/", "", $phone)); ?>

    </div>
    <?php endif; ?>
</body>
</html><?php /**PATH D:\labs\xampp\htdocs\web1\resources\views/home.blade.php ENDPATH**/ ?>