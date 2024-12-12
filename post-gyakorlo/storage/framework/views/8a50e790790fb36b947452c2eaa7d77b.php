<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('content'); ?>
    <section>
        <h1>Tanuló hozzáadása</h1>
        <div class="row">
            <div class="col-md">
                <div class="border">
                    <form action="/" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="py-2">
                            <label for="nev" class="form-label">Név</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['nev'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('nev')); ?>" id="nev" name="nev" required>

                        </div>
                </div>
            </div>
            <div class="col-md">
                <table class="table table-bordered table-striped table-responsive">
                    <tr>
                        <th>Név</th>
                        <th>Kor</th>
                        <th>Lakhely</th>
                        <th>Ágazat</th>
                    </tr>
                    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($student->nev); ?>

                            </td>
                            <td>
                                <?php echo e($student->kor . ' éves'); ?>

                            </td>
                            <td>
                                <?php echo e($student->lakhely); ?>

                            </td>
                            <td>
                                <?php if($student->nem == 'n'): ?>
                                    nő
                                <?php else: ?>
                                    férfi
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php echo e($student->agazat); ?>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\hathajo\resources\views/welcome.blade.php ENDPATH**/ ?>