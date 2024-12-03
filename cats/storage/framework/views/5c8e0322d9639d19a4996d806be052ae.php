<?php $__env->startSection('title', 'Authors'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Author</th>
                <th>Author's page</th>
            </tr>
            <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($author['author']); ?></td>
                <td><a href="https://<?php echo e($author['author_link']); ?>" target="_blank"><?php echo e($author['author_link']); ?></a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\cats_php\resources\views/authors.blade.php ENDPATH**/ ?>