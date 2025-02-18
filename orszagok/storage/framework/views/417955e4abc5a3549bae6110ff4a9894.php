<?php $__env->startSection('content'); ?>
    <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-4 text-center justify-items-center items-center justify-content-center">
        <?php $__currentLoopData = $kontinensek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kontinens): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a class="btn btn-outline-dark mb-2" style="&:hover {background-color: #f8f9fa;}" <a
                style="text-decoration: none; color: black;"
                href="/orszagok/<?php echo e($kontinens->kontinens_id); ?>"><?php echo e($kontinens->nev); ?></a>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <h2 class="text-center display-6 py-4"><?php echo e($aktkontinens->nev); ?> országai</h2>
    <div class="container">
        <div class="row table-responsive">
            <?php if(isset($aktkontinens)): ?>
                <table class="table table-striped table-bordered border-dark"
                    style="table-layout: auto; vertical-align: middle;">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>#</th>
                            <th>Zászló</th>
                            <th>Név</th>
                            <th>Főváros</th>
                            <th>Népesség</th>
                            <th>Terület</th>
                            <th>Népsűrűség</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $aktkontinens->orszagok; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orszag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center"><?php echo e($loop->iteration); ?></td>
                                <td class="text-center"><img src="<?php echo e($orszag->varosFlag($orszag->nev)); ?>"
                                        alt="<?php echo e($orszag->nev); ?>" class="img-thumbnail bg-transparent border-0"
                                        width="50"></td>
                                <td><?php echo e($orszag->nev); ?></td>
                                <td><?php echo e($orszag->fovaros); ?></td>
                                <td><?php echo e(number_format($orszag->nepesseg, 0, ',', ' ')); ?> fő</td>
                                <td><?php echo e(number_format($orszag->terulet, 0, ',', ' ')); ?> km²</td>
                                <td><?php echo e(number_format($orszag->nepsuruseg, 0, ',', ' ')); ?> fő/km²</td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\Orszagok\orszagok\resources\views/orszagok.blade.php ENDPATH**/ ?>