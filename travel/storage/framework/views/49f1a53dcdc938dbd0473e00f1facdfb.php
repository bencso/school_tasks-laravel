<?php $__env->startSection('content'); ?>
<h1 class="text-center display-6 py-3">Utazásaink</h1>
<table class="table table-striped table-bordered">
        <tr>
            <th>Uticél</th>
            <th>Utazás neve</th>
            <th>Időtartam</th>
            <th>Ár</th>
        </tr>
        <?php $__currentLoopData = $travels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $travel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($travel->uticel); ?></td>
                <td><a href="/adatlap/<?php echo e($travel->id); ?>"><?php echo e($travel->megnevezes); ?></a></td>
                <td><?php echo e($travel->idotartam); ?></td>
                <td><?php echo e(number_format($travel->ar, 0, '', ' ')); ?> Ft</td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\travel\resources\views/welcome.blade.php ENDPATH**/ ?>