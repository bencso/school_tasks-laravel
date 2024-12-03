<?php $__env->startSection('title', 'Heti'); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('footer', 'A szerencsejáték függőséget okoz!!!'); ?>
<h1 class="text-center display-3"><?php echo e(request()->route('ev')); ?> - <?php echo e(request()->route('het')); ?>. hét</h1>
<p class="fs-3">
    Válassz hetet, hogy megnézd a húzás adatait:
<div class="gap-3">
    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($row); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\lottophp\resources\views/heti.blade.php ENDPATH**/ ?>