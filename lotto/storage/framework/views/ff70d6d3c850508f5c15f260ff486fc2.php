<?php $__env->startSection('title', 'Mikor volt 5-ös?'); ?>
<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <h1 class="text-center display-5">
        Mikor volt ötös?
    </h1>
    <p>
        Az adatok csak 1998-tól ismertek
    </p>
    <table class="table table-striped table-bordered">
        <tr>
            <th>
                #
            </th>
            <th>
                Év
            </th>
            <th>
                Hét
            </th>
            <th>
                Darab
            </th>
            <th>
                HUF
            </th>
        </tr>
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($sv++); ?></td>
            <td><?php echo e($row->ev); ?></td>
            <td><?php echo e($row->het); ?></td>
            <td><?php echo e($row->talalat5_db); ?></td>
            <td><?php echo e(number_format($row->talalat5_huf,0,',',' ')); ?> HUF</td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer', 'A szerencsejáték függőséget okoz!!!'); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\lottophp\resources\views/mikor.blade.php ENDPATH**/ ?>