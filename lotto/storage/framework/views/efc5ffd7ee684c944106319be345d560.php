<?php $__env->startSection('title', 'Számok módosítás'); ?>
<?php $__env->startSection('footer', 'A szerencsejáték függőséget okoz!!!'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="text-center display-3">Számok módosítása</h1>
    <div class="d-flex justify-content-center">
        <div class="card w-75">
            <div class="card-body">
                <form action="/nyeremeny/<?php echo e($result[0]->id); ?>/szamok" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($result[0]->id); ?>">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            Hiba van az oldalon!
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <div class="d-flex gap-3 justify-content-center">
                            <div class="form-group">
                                <label for="szam1">
                                    1. szám
                                </label>
                                <select class="form-control <?php $__errorArgs = ['szam1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="szam1"
                                    name="szam1">
                                    <option value="0" disabled>Válassz számot</option>
                                    <?php for($i = 1; $i <= 90; $i++): ?>
                                        <option value="<?php echo e($i); ?>"
                                            <?php echo e(old('szam1', $result[0]->szam1) == $i ? 'selected' : ''); ?>>
                                            <?php echo e($i); ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="szam2">
                                    2. szám
                                </label>
                                <select class="form-control <?php $__errorArgs = ['szam2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="szam2"
                                    name="szam2">
                                    <option value="0" disabled>Válassz számot</option>
                                    <?php for($i = 1; $i <= 90; $i++): ?>
                                        <option value="<?php echo e($i); ?>"
                                            <?php echo e(old('szam2', $result[0]->szam2) == $i ? 'selected' : ''); ?>>
                                            <?php echo e($i); ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="szam3">
                                    3. szám
                                </label>
                                <select class="form-control <?php $__errorArgs = ['szam3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="szam3"
                                    name="szam3">
                                    <option value="0" disabled>Válassz számot</option>
                                    <?php for($i = 1; $i <= 90; $i++): ?>
                                        <option value="<?php echo e($i); ?>"
                                            <?php echo e(old('szam3', $result[0]->szam3) == $i ? 'selected' : ''); ?>>
                                            <?php echo e($i); ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="szam4">
                                    4. szám
                                </label>
                                <select class="form-control <?php $__errorArgs = ['szam4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="szam4"
                                    name="szam4">
                                    <option value="0" disabled>Válassz számot</option>
                                    <?php for($i = 1; $i <= 90; $i++): ?>
                                        <option value="<?php echo e($i); ?>"
                                            <?php echo e(old('szam4', $result[0]->szam4) == $i ? 'selected' : ''); ?>>
                                            <?php echo e($i); ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="form-group">

                                <label for="szam5">
                                    5. szám
                                </label>
                                <select class="form-control <?php $__errorArgs = ['szam5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="szam5"
                                    name="szam5">
                                    <option value="0" disabled>Válassz számot</option>
                                    <?php for($i = 1; $i <= 90; $i++): ?>
                                        <option value="<?php echo e($i); ?>"
                                            <?php echo e(old('szam5', $result[0]->szam5) == $i ? 'selected' : ''); ?>>
                                            <?php echo e($i); ?></option>
                                    <?php endfor; ?>
                                </select>
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babolnai.bence\Desktop\lottophp\resources\views/nyeremenySzam.blade.php ENDPATH**/ ?>