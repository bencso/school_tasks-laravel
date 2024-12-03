<?php $__env->startSection('title', 'Új pizza hozzáadása'); ?>
<?php $__env->startSection('section'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container py-3">
        <h1 class="text-center display-5">
            Új pizza
        </h1>
        <div class="card w-50 mx-auto mt-4  text-white bg-dark">
            <div class="card-body">
                <form action="/add" method="post">
                    <?php echo csrf_field(); ?>
                  <div>
                    <label for="nev" class="form-label">Név:</label>
                    <input type="text" class="form-control" name="nev" id="nev" value="<?php echo e(old('nev')); ?>">
                    <?php $__errorArgs = ['nev'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                  <div class="mt-2">
                    <label for="feltet" class="form-label">Feltétek:</label>
                    <input type="text" class="form-control" name="feltet" id="feltet" value="<?php echo e(old('feltet')); ?>">
                    <?php $__errorArgs = ['feltet'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                  <div class="mt-2">
                    <label for="ar" class="form-label">Ár:</label>
                    <input type="number" class="form-control" name="ar" id="ar" min=1000 max=5000 value="<?php echo e(old('ar')); ?>">
                    <?php $__errorArgs = ['ar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                  <div class="mt-2">
                    <label for="akcios" class="form-label">Akciós:</label>
                    <input type="checkbox" name="akcios" id="akcios" class="form-check-input">
                    <?php $__errorArgs = ['akcios'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                  <button type="submit" class="btn btn-warning w-100">Rögzítés</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\pizza\resources\views/add.blade.php ENDPATH**/ ?>