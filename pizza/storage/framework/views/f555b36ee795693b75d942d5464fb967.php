<?php $__env->startSection('title', 'Összes pizzánk'); ?>
<?php $__env->startSection('section'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container py-3">
        <h1 class="text-center display-5">
            Összes pizzánk
        </h1>
        <p class="mt-3">
            <b>Rendezés: </b>
            <a href="/all/1">Név szerint növekvő</a> &nbsp;&nbsp;
            <a href="/all/2">Név szerint csökkenő</a> &nbsp;&nbsp;
            <a href="/all/3">Ár szerint növekvő</a> &nbsp;&nbsp;
            <a href="/all/4">Ár szerint csökkenő</a>
        </p>
        <table class="table table-striped">
            <tr>
                <th>Név</th>
                <th>Feltétek</th>
                <th>24 cm</th>
                <th>32 cm</th>
                <th>45 cm</th>
                <th></th>
            </tr>
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><a href="/adatlap/<?php echo e($row->id); ?>"><?php echo e($row->nev); ?></a></td>
                    <td><?php echo e($row->feltet); ?></td>
                    <td>
                        <?php if($row->akcios == 1): ?>
                            <span class="text-danger">
                                <b>
                                    <?php echo e($row->ar * 0.9); ?> Ft
                                </b>
                            </span>
                        <?php else: ?>
                            <span>
                                <b>
                                    <?php echo e($row->ar); ?> Ft
                                </b>
                            </span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if($row->akcios == 1): ?>
                            <span class="text-danger">
                                <b>
                                    <?php echo e($row->ar * 0.9); ?> Ft
                                </b>
                            </span>
                        <?php else: ?>
                            <span>
                                <b>
                                    <?php echo e($row->ar); ?> Ft
                                </b>
                            </span>
                        <?php endif; ?>
                    </td>
                    </td>
                    <td>
                        <?php if($row->akcios == 1): ?>
                            <span class="text-danger">
                                <b>
                                    <?php echo e($row->ar * 0.9 * 1.25); ?> Ft
                                </b>
                            </span>
                        <?php else: ?>
                            <span>
                                <b>
                                    <?php echo e($row->ar * 1.25); ?> Ft
                                </b>
                            </span>
                        <?php endif; ?>
                    </td>
                    </td>
                    <td>
                        <span>
                            <b>
                                <?php if($row->akcios): ?>
                                    <span class="text-danger"><b>Akciós</b></span>
                                <?php else: ?>
                                    <span></span>
                                <?php endif; ?>
                            </b>
                        </span>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php $__env->stopSection(); ?>
</div>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\pizza\resources\views/all.blade.php ENDPATH**/ ?>