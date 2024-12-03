<?php $__env->startSection('content'); ?>
    <h1>Összes település</h1>
    <div class="d-flex justify-content-center">
        <ul class="pagination pagination-sm">
            <?php $__currentLoopData = $betuk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $betu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="page-item <?php echo e(($parameter==$betu->betu) ? 'active' : ''); ?>">
                <a class="page-link" href="/abc/<?php echo e($betu->betu); ?>"> <?php echo e($betu->betu); ?>

                </a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-responsive">
            <thead class="table-dark text-white">
                <tr>
                    <th>#</th>
                    <th>Név</th>
                    <th>Jogállás</th>
                    <th>Vármegye</th>
                    <th>Járás</th>
                </tr>
            </thead>
            <tbody class="table-striped">
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($results->currentPage()*100-100+$sv++); ?></td>
                        <td><a href="/telepules/<?php echo e($result->helyseg); ?>"><?php echo e($result->helyseg); ?></a></td>
                        <td><?php echo e($result->jogallas); ?></td>
                        <?php if($result->jogallas == 'főváros' || $result->jogallas == 'fővárosi kerület'): ?>
                            <td></td>
                            <td><?php echo e($result->jaras); ?> járás</td>
                        <?php else: ?>
                            <td><?php echo e($result->megye); ?> vármegye</td>
                            <td><?php echo e($result->jaras); ?> járás</td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <div> <?php echo e($results->links('pagination::bootstrap-4')); ?></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\HNK\website\resources\views/abc.blade.php ENDPATH**/ ?>