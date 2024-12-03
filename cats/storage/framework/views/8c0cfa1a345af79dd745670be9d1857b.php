<?php $__env->startSection('title', $cat['title']); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12 col-md-6">
        <img src="/img/<?php echo e($cat['id']); ?>.jpg" class="img-fluid" alt="<?php echo e($cat['title']); ?>">
    </div>
    <div class="col-12 col-md-6">
       <table class="table table-bordered">
              <tr>
                <th>Stock image page</th>
                <td><a href="https://<?php echo e($cat['site']); ?>" target="_blank"><?php echo e($cat['site']); ?></a></td>
              </tr>
              <tr>
                <th>Direct link to the pic</th>
                <td><a href="https://<?php echo e($cat['direct_link']); ?>"><?php echo e($cat['direct_link']); ?></a></td>
              </tr>
              <tr>
                <th>Author</th>
                <td><?php echo e($cat['author']); ?></td>
              </tr>
              <tr>
                <th>Author's page</th>
                <td><a href="https://<?php echo e($cat['author_link']); ?>"><?php echo e($cat['author_link']); ?></a></td>
              </tr>
       </table>
    </div>
    <div class="d-flex text-center w-100 justify-content-center pt-3">
          <?php echo $cat['id'] > 1 ? '<a href="/cat/' . ($cat['id'] - 1) . '">Previous</a> <p class="px-2">||</p>' : ''; ?>

         <?php echo $cat['id'] < $total  ? '<a href="/cat/' . ($cat['id'] + 1) . '">Next</a>' : ''; ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\cats_php\resources\views/show.blade.php ENDPATH**/ ?>