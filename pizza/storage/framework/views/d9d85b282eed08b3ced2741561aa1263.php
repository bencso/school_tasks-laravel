<?php $__env->startSection('title', 'Akciós pizzák'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container py-3">
        <h1 class="text-center display-5">
            Sample title
        </h1>
        <div class="row">
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <h2>
                        <a href="/adatlap/<?php echo e($row->id); ?>"><?php echo e($row->nev); ?></a>
                    </h2>
                    <p><?php echo e($row->feltet); ?></p>
                    <p><b>Akciós ár (24cm): </b><br><s><?php echo e($row->ar); ?> Ft</s> helyett <span
                            class="text-danger"><b><?php echo e($row->ar * 0.9); ?></b></span>
                    </p>
                    <p class="text-end"><a href="/all">További méretek</a></p>
                    <hr>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\_13AB1\Bábolnai Bence\pizza\resources\views/welcome.blade.php ENDPATH**/ ?>