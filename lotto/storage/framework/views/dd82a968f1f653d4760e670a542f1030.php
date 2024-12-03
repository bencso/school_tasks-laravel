<?php $__env->startSection('title', 'Heti'); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('footer', 'A szerencsejáték függőséget okoz!!!'); ?>
<h1 class="text-center display-3"><?php echo e($result[0]->ev); ?> - <?php echo e($result[0]->het); ?>. hét</h1>
<div class="row">
    <div class="col-6">
        <p class="fs-3">
            Az ötös Lottó nyerőszámai:
        <div class="gap-3 fs-3">
            <?php echo e($result[0]->szam1); ?>,
            <?php echo e($result[0]->szam2); ?>,
            <?php echo e($result[0]->szam3); ?>,
            <?php echo e($result[0]->szam4); ?>,
            <?php echo e($result[0]->szam5); ?>

        </div>
    </div>
    <div class="col-6">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">DARAB</th>
                    <th scope="col">HUF</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Öt találatos</td>
                    <td><?php echo e($result[0]->talalat5_db); ?></td>
                    <td><?php echo e(number_format($result[0]->talalat5_huf, 0, ',', ' ')); ?> HUF</td>
                </tr>
                <tr>
                    <td>Négy találatos</td>
                    <td><?php echo e($result[0]->talalat4_db); ?></td>
                    <td><?php echo e(number_format($result[0]->talalat4_huf, 0, ',', ' ')); ?> HUF</td>
                </tr>
                <tr>
                    <td>Három találatos</td>
                    <td><?php echo e($result[0]->talalat3_db); ?></td>
                    <td><?php echo e(number_format($result[0]->talalat3_huf, 0, ',', ' ')); ?> HUF</td>
                </tr>
                <tr>
                    <td>Két találatos</td>
                    <td><?php echo e($result[0]->talalat2_db); ?></td>
                    <td><?php echo e(number_format($result[0]->talalat2_huf, 0, ',', ' ')); ?> HUF</td>
                </tr>
            </tbody>
        </table>
    </div>
    <p>
        <a class="btn btn-primary" href="/nyeremeny/<?php echo e($result[0]->id); ?>">Nyeremény módosítása</a>
        <a class="btn btn-primary" href="/nyeremeny/<?php echo e($result[0]->id); ?>/szamok">Számok módosítása</a>
    </p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\lottophp\resources\views/adatlap.blade.php ENDPATH**/ ?>