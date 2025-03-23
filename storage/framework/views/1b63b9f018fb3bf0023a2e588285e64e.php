

<?php $__env->startSection('content'); ?>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1 class="display-5 fw-bold text-center"><?php echo e($property->title); ?></h1>
                        <img src="<?php echo e(asset('storage/' . $property->photo)); ?>" alt="Property Photo" class="card-img-top mb-3">
                        <p class="card-text"><strong>Description:</strong> <?php echo e($property->description); ?></p>
                        <p class="card-text"><strong>Bedrooms:</strong> <?php echo e($property->bedrooms); ?></p>
                        <p class="card-text"><strong>Bathrooms:</strong> <?php echo e($property->bathrooms); ?></p>
                        <p class="card-text"><strong>Price:</strong> $<?php echo e($property->price); ?></p>
                        <p class="card-text"><strong>Type:</strong> <?php echo e($property->type); ?></p>
                        <p class="card-text"><strong>Location:</strong> <?php echo e($property->location); ?></p>
                        <a href="mailto:realtor@example.com?subject=Inquiry about <?php echo e($property->title); ?>" class="btn btn-primary">Email Realtor</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\comp3385-project-1\resources\views/property-show.blade.php ENDPATH**/ ?>