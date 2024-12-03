<?php $__env->startSection('title', $cat['title']); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div>
        <img src="/img/<?php echo e($cat['id']); ?>.jpg" class="img-fluid" alt="<?php echo e($cat['title']); ?>" title="<?php echo e($cat['title']); ?>">
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\cats_php\resources\views/random.blade.php ENDPATH**/ ?>