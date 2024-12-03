<?php $__env->startSection('content'); ?>
<h1 class="text-center display-6 py-3"><?php echo e($travel->megnevezes); ?></h1>
<div class="container">
    <div class="row gap-3">
        <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12">
            <img src="/assets/img/<?php echo e($travel->id); ?>.jpg" alt="<?php echo e($travel->megnevezes); ?>" class="img-fluid">
        </div>
        <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12">
            <p><b>Uticél: </b><a href="/uticel/<?php echo e($travel->uticel); ?>"><?php echo e($travel->uticel); ?></a></p>
            <p><b>Program megnevezése: </b><?php echo e($travel->megnevezes); ?></p>
            <p><b>Ellátás: </b><?php echo e($travel->ellatas); ?></p>
            <p><b>Utazás: </b><?php echo e($travel->utazas); ?></p>
            <p><b>Szállás: </b><?php echo e($travel->szallas); ?></p>
            <p><b>Szoba: </b><?php echo e($travel->szoba); ?></p>
            <p><b>Időtartam: </b><?php echo e($travel->idotartam); ?></p>
            <p><b>Ára: </b><?php echo e(number_format($travel->ar, 0, '', ' ')); ?> Ft / fő</p>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\travel\resources\views/adatlap.blade.php ENDPATH**/ ?>