<link rel="stylesheet" href="<?php echo e(asset('css/auth.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="container">
    <a href="<?php echo e(route('login')); ?>" class="back-button">
        <i class="fa fa-arrow-left"></i>
    </a>

   <!-- Logo -->
    <div class="logo-container">
        <img src="img/pgncom.png" alt="Logo">
    </div>

    <!-- Form -->
    <form method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>
        <!-- Full Name Field -->
        <div class="form-group">
            <div class="input-group">
                <span class="input-icon">
                    <i class="fa fa-user"></i>
                </span>
                <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name"
                    value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus placeholder="Full Name">
                <?php $__errorArgs = ['name'];
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

        <!-- Email Address Field -->
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
                    value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Email Address">
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

        <!-- Password Field -->
        <div class="form-group">
            <div class="input-group">
                <span class="input-icon">
                    <i class="fa fa-lock"></i>
                </span>
                <input id="password-field" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    name="password" required autocomplete="new-password" placeholder="Password">
                <?php $__errorArgs = ['password'];
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

        <!-- Confirm Password Field -->
        <div class="form-group">
            <div class="input-group">
                <span class="input-icon">
                    <i class="fa fa-lock"></i>
                </span>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password" placeholder="Confirm Password">
            </div>
        </div>

        <!-- Submit Button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </div>
    </form>
</div><?php /**PATH C:\laragon\www\Sourcekode\CODE-AMSVMS\resources\views\auth\register.blade.php ENDPATH**/ ?>