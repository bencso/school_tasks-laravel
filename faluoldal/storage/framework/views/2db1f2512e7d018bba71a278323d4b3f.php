<?php $__env->startSection('content'); ?>
<div class="col-md-9 fs-5">
    <h2 class="mt-5 text-center fs-1">Vendégkönyv</h2>
    <form method="POST" action="/vendegkonyv">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="nev" class="form-label">Név <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="nev" name="nev">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email cím <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Üzenet <span class="text-danger">*</span></label>
            <textarea class="form-control" id="message" name="message" rows="6"></textarea>
        </div>
        <p class="text-danger fs-6 fw-bold">* Kötelező mezők</p>
        <?php if($errors->any()): ?>
            <p class="text-danger fs-6 fw-bold" style="text-transform: uppercase">
                <?php echo e(implode(
                    ' ** ',
                    $errors->all()
                )); ?>

            </p>
        <?php endif; ?>
        <button type="submit" class="btn btn-outline-primary">Küldés</button>
    </form>
    <hr>
     <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <span class="fw-bold">
           <?php echo e($row->nev); ?> -  <a href="mailto:<?php echo e($row->email); ?>"><?php echo e($row->email); ?></a>
        </span>
     <p class="fs-6"><?php echo e(date_format(date_create($row->date),"Y. m. d.")); ?></p>
        <div class="col-md-8">
            <p class="fs-6"><?php echo $row->message; ?></p>
        </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\faluoldal\resources\views/vendegkonyv.blade.php ENDPATH**/ ?>