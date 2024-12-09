<?php $__env->startSection('content'); ?>
<div class="col-md-9 fs-5">
    <h2 class="mt-5 text-center fs-1">Hírek</h2>
     <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <h2><?php echo e($row->title); ?></h2>
     <p><?php echo e(date_format(date_create($row->date),"Y. m. d.")); ?></p>
     <div class="row">
        <div class="col-md-8">
            <p><?php echo $row->text; ?></p>
        </div>
        <div class="col-md-4">
            <p><img src="/img/<?php echo e($row->img); ?>" alt="<?php echo e($row->img); ?>" class="img-fluid"></p>
        </div>
     </div>
     <hr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\14SZ-webmeres\laravel\resources\views/hirek.blade.php ENDPATH**/ ?>