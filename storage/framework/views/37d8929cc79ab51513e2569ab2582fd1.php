<link rel="stylesheet" href="<?php echo e(asset('css/auth.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="container">
    <a href="<?php echo e(route('login')); ?>" class="back-button">
        <i class="fa fa-arrow-left"></i>
    </a>
    <div class="logo-container">
        <img src="<?php echo e(asset('img/pgncom.png')); ?>" alt="Logo" class="logo">
    </div>

    <?php if(session('status')): ?>
        <div class="alert">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('password.email')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <div class="input-group">
                <span class="input-icon">
                    <i class="fa fa-envelope"></i>
                </span>
                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                    value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Email Address">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <?php echo e(__('Send Password Reset Link')); ?>

            </button>
        </div>
    </form>
</div>
<?php /**PATH C:\laragon\www\Sourcekode\CODE-AMSVMS\resources\views\auth\passwords\email.blade.php ENDPATH**/ ?>