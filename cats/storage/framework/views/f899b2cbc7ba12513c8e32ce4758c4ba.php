<?php $__env->startSection('title', 'Cat pics'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-12 col-md-6 col-sm-4">
            <a href="/cat/<?php echo e($cat['id']); ?>" class="col-12 col-md-6 col-lg-4 p-2"><img src="/img/<?php echo e($cat['id']); ?>.jpg" class="img-fluid" alt="cat" class="border-bottom" title="<?php echo e($cat['title']); ?>"></a>
            <hr>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\cats_php\resources\views/welcome.blade.php ENDPATH**/ ?>