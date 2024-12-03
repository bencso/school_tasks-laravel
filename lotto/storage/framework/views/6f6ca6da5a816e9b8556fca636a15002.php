<?php $__env->startSection('title', 'Mikor volt 5-ös?'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container py-5">
        <h1 class="text-center display-5">
            Random Számtippelő
        </h1>
        <p class="fs-3">
            Nyerőszám tippek:
            <?php echo e(implode(', ', $result)); ?>

        </p>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer', 'A szerencsejáték függőséget okoz!!!'); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\lottophp\resources\views/random.blade.php ENDPATH**/ ?>