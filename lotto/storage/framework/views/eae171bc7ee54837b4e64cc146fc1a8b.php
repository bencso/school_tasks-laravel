<?php $__env->startSection('title', 'Sorsolás'); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('footer', 'A szerencsejáték függőséget okoz!!!'); ?>
<h1 class="text-center display-3">Húzások</h1>
<p class="fs-3">
    Válassz egy évet:
<div class="gap-3">
    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="/ev/<?php echo e($row); ?>" class="btn bg-primary my-1 p-2 text-light col-1"><?php echo e($row); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\lottophp\resources\views/welcome.blade.php ENDPATH**/ ?>