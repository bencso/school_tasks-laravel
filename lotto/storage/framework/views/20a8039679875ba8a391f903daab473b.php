<?php $__env->startSection('title', 'Húzás módosítás'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="text-center display-3">Húzás módosítása</h1>
    <div class="d-flex justify-content-center">
        <div class="card w-75">
            <div class="card-body">
                <form action="/nyeremeny/<?php echo e($result[0]->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($result[0]->id); ?>">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            Hiba van az oldalon!
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="talalat2_db">2. találatosok száma és nyereménye</label>
                        <div class="d-flex gap-3">
                            <div class="flex-grow-1">
                                <input type="number" class="form-control <?php $__errorArgs = ['talalat2_db'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="talalat2_db" name="talalat2_db"
                                    value="<?php echo e(old('talalat2_db', $result[0]->talalat2_db)); ?>" placeholder="Találatok száma">
                            </div>
                            <div class="ml-2 d-flex align-items-center gap-2" style="flex-basis: 66.66%;">
                                <input type="number" class="form-control <?php $__errorArgs = ['talalat2_huf'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="talalat2_huf" name="talalat2_huf"
                                    value="<?php echo e(old('talalat2_huf', $result[0]->talalat2_huf)); ?>"
                                    placeholder="Nyeremény összege">
                                <span class="text-muted
                                    <?php if($errors->has('talalat2_huf')): ?> text-danger
                                    <?php elseif(!old('talalat2_huf') && !$errors->has('talalat2_huf')): ?>
                                        text-success <?php endif; ?>">Ft</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="talalat3_db">3. találatosok száma és nyereménye</label>
                        <div class="d-flex gap-3">
                            <div class="flex-grow-1">
                                <input type="number" class="form-control <?php $__errorArgs = ['talalat3_db'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="talalat3_db" name="talalat3_db"
                                    value="<?php echo e(old('talalat3_db', $result[0]->talalat3_db)); ?>" placeholder="Találatok száma">

                            </div>
                            <div class="ml-2 d-flex align-items-center gap-2" style="flex-basis: 66.66%;">
                                <input type="number" class="form-control <?php $__errorArgs = ['talalat3_huf'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="talalat3_huf" name="talalat3_huf"
                                    value="<?php echo e(old('talalat3_huf', $result[0]->talalat3_huf)); ?>"
                                    placeholder="Nyeremény összege">
                                <span class="text-muted
                                    <?php if($errors->has('talalat3_huf')): ?> text-danger
                                    <?php elseif(!old('talalat3_huf') && !$errors->has('talalat3_huf')): ?>
                                        text-success <?php endif; ?>">Ft</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="talalat4_db">4. találatosok száma és nyereménye</label>
                        <div class="d-flex gap-3">
                            <div class="flex-grow-1">
                                <input type="number" class="form-control <?php $__errorArgs = ['talalat4_db'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="talalat4_db" name="talalat4_db"
                                    value="<?php echo e(old('talalat4_db', $result[0]->talalat4_db)); ?>" placeholder="Találatok száma">
                            </div>
                            <div class="ml-2 d-flex align-items-center gap-2" style="flex-basis: 66.66%;">
                                <input type="number" class="form-control <?php $__errorArgs = ['talalat4_huf'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="talalat4_huf" name="talalat4_huf"
                                    value="<?php echo e(old('talalat4_huf', $result[0]->talalat4_huf)); ?>"
                                    placeholder="Nyeremény összege">
                                <span class="text-muted
                                    <?php if($errors->has('talalat4_huf')): ?> text-danger
                                    <?php elseif(!old('talalat4_huf') && !$errors->has('talalat4_huf')): ?>
                                        text-success <?php endif; ?>">Ft</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="talalat5_db">5. találatosok száma és nyereménye</label>
                        <div class="d-flex gap-3">
                            <div class="flex-grow-1">
                                <input type="number" class="form-control <?php $__errorArgs = ['talalat5_db'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="talalat5_db" name="talalat5_db"
                                    value="<?php echo e(old('talalat5_db', $result[0]->talalat5_db)); ?>" placeholder="Találatok száma">

                            </div>
                            <div class="ml-2 d-flex align-items-center gap-2" style="flex-basis: 66.66%;">
                                <input type="number" class="form-control <?php $__errorArgs = ['talalat5_huf'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="talalat5_huf" name="talalat5_huf"
                                    value="<?php echo e(old('talalat5_huf', $result[0]->talalat5_huf)); ?>"
                                    placeholder="Nyeremény összege">
                                <span class="text-muted
                                    <?php if($errors->has('talalat5_huf')): ?> text-danger
                                    <?php elseif(!old('talalat5_huf') && !$errors->has('talalat5_huf')): ?>
                                        text-success <?php endif; ?>">Ft</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3 w-100">
                        <button type="submit" class="btn btn-primary w-100">Módosítás</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\lottophp\resources\views/nyeremeny.blade.php ENDPATH**/ ?>