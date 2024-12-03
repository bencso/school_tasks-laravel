<?php $__env->startSection('title', 'Pizzák módosítása'); ?>
<?php $__env->startSection('section'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container py-3">
        <h1 class="text-center display-5">
            Pizzák módosítása
        </h1>
       <div class="d-flex justify-content-center">
        <table class="table table-bordered table-striped w-50 text-center">
            <tr>
                <th>Név</th>
                <th>Módosítás</th>
                <th>Törlés</th>
            </tr>
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($row->nev); ?></td>
                    <td><a class="text-decoration-none" href="/mod/<?php echo e($row->id); ?>">Módosítás</a></td>
                    <td><a class="text-danger fw-bold text-decoration-none" href="/del/<?php echo e($row->id); ?>">Törlés</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
       </div>
    <?php $__env->stopSection(); ?>
</div>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\pizza\resources\views/modify.blade.php ENDPATH**/ ?>