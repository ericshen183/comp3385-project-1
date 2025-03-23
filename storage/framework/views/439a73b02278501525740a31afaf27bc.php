<?php $__env->startSection('content'); ?>
    <div class="px-4 py-5 my-5 text-center bg-body-tertiary rounded-3">
        <img class="img-fluid" src="<?php echo e(asset('images/UWI-Wordmark.webp')); ?>" alt="UWI Wordmark" width="300" />
        <h1 class="display-5 fw-bold text-body-emphasis">Welcome</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">You've successfully loaded up the Laravel starter template for this assignment.</p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\comp3385-project-1\resources\views/welcome.blade.php ENDPATH**/ ?>