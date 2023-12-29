<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact page</title>
</head>
<body>
    <?php $__currentLoopData = $our_contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div><?php echo e($value); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<form action="/my_page">
    <p>Ваше ФИО: <input name="fio"></p>
    <p>Ваш номер телефона: <input name="number_phone"></p>
    <input type="submit" value="Отправить">
</form>
</body>
</html>
<?php /**PATH D:\labs\xampp\htdocs\web1\resources\views/contact.blade.php ENDPATH**/ ?>