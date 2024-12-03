<?php $__env->startSection('content'); ?>
<h1 class="text-center display-6 py-3"><?php echo e($p); ?></h1>
<div class="container">
    <div class="row">
        <div class="col">
            <?php $__currentLoopData = $travels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $travel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <hr>
                <div class="row gap-3">
                    <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12">
                        <img src="/assets/img/<?php echo e($travel->id); ?>.jpg" alt="<?php echo e($travel->megnevezes); ?>" class="img-fluid">
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12">
                        <p><b>Program megnevezése: </b><a href="/adatlap/<?php echo e($travel->id); ?>"><?php echo e($travel->megnevezes); ?></a></p>
                        <p><b>Időtartam:</b> <?php echo e($travel->idotartam); ?></p>
                        <p><b>Ára:</b> <?php echo e(number_format($travel->ar, 0, '', ' ')); ?> Ft / fő</p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\travel\resources\views/uticel.blade.php ENDPATH**/ ?>