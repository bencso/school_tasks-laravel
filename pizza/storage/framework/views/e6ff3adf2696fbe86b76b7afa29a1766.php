<?php $__env->startSection('title', $result->nev); ?>
<?php $__env->startSection('content'); ?>
    <div class="container py-3">
        <h1 class="text-center display-5">
            <?php echo e($result->nev); ?>

        </h1>
        <div class="row">
            <div>
                <p><?php echo e($result->feltet); ?></p>
                <p>
                    <b> <?php echo e($result->akcios ? 'Ez a pizza most a készlet erejéig akciós! - minusz 10%' : 'Ez a pizza nem akciós,lehet, hogy jövő héten az lesz!'); ?>

                    </b>
                </p>
                <ul>
                    <li>
                        24 cm:
                        <?php if($result->akcios): ?>
                            <s><?php echo e($result->ar); ?> Ft helyett</s> <span class="text-danger"
                                style="font-weight: bold"><?php echo e($result->ar * 0.9); ?> Ft</span>
                        <?php else: ?>
                            <?php echo e($result->ar); ?> Ft
                        <?php endif; ?>
                    </li>
                    <li>
                        32 cm:
                        <?php if($result->akcios): ?>
                            <s><?php echo e($result->ar); ?> Ft helyett</s> <span class="text-danger"
                                style="font-weight: bold"><?php echo e($result->ar * 0.9 * 1.25); ?> Ft</span>
                        <?php else: ?>
                            <?php echo e($result->ar); ?> Ft
                        <?php endif; ?>
                    </li>
                    <li>
                        48 cm: <?php if($result->akcios): ?>
                            <s><?php echo e($result->ar); ?> Ft helyett</s> <span class="text-danger"
                                style="font-weight: bold"><?php echo e($result->ar * 0.9 * 1.5); ?> Ft</span>
                        <?php else: ?>
                            <?php echo e($result->ar); ?> Ft
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\_13AB1\Bábolnai Bence\pizza\resources\views/adatlap.blade.php ENDPATH**/ ?>