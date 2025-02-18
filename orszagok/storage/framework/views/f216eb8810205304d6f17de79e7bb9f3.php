<?php $__env->startSection('content'); ?>
    <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-4 text-center justify-items-center items-center justify-content-center">
        <?php $__currentLoopData = $kontinensek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kontinens): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a class="btn btn-outline-dark mb-2" style="&:hover {background-color: #f8f9fa;}" <a
                style="text-decoration: none; color: black;"
                href="/kontinensek/<?php echo e($kontinens->kontinens_id); ?>"><?php echo e($kontinens->nev); ?></a>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <h2 class="text-center display-6 py-4"><?php echo e($aktkontinens->nev); ?></h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-3">
                <img src="/assets/img/<?php echo e($aktkontinens->kontinens_id); ?>.jpg" alt="<?php echo e($aktkontinens->nev); ?> térkép"
                    class="img-fluid">
            </div>
            <?php if(isset($aktkontinens)): ?>
                <div class="col-md-6 table-responsive">
                    <table class="table table-striped table-bordered border-dark" style="table-layout: auto;">
                        <tr>
                            <th>Területe</th>
                            <td><?php echo e(number_format($aktkontinens->terulet, 0, ',', ' ')); ?> km²</td>
                        </tr>
                        <tr>
                            <th>Legmagasabb pontja</th>
                            <td><?php echo e(number_format($aktkontinens->max, 0, ',', ' ')); ?> m - <?php echo e($aktkontinens->max_nev); ?>

                        </tr>
                        <tr>
                            <th>Legmélyebb pontja</th>
                            <td><?php echo e(number_format($aktkontinens->min, 0, ',', ' ')); ?> m - <?php echo e($aktkontinens->min_nev); ?>

                        </tr>
                        <tr>
                            <th>Leghosszabb folyója</th>
                            <td><?php echo e(number_format($aktkontinens->folyo, 0, ',', ' ')); ?> km - <?php echo e($aktkontinens->folyo_nev); ?>

                            </td>
                        </tr>
                        <?php
                            if ($orszagok_szama > 0) {
                                echo '<tr><th>Országok száma</th><td>' . $orszagok_szama . ' db</td></tr>';
                            }
                        ?>
                    </table>
                </div>
        </div>
        <?php endif; ?>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\Orszagok\orszagok\resources\views/kontinensek.blade.php ENDPATH**/ ?>