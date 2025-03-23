

<?php $__env->startSection('content'); ?>
    <div class="container my-5">
        <h1 class="display-5 fw-bold text-center">Properties</h1>
        <div class="row">
            <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo e(asset('storage/' . $property->photo)); ?>" class="card-img-top" alt="Property Photo">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($property->title); ?></h5>
                            <p class="card-text"><?php echo e($property->description); ?></p>
                            <p class="card-text"><strong>Bedrooms:</strong> <?php echo e($property->bedrooms); ?></p>
                            <p class="card-text"><strong>Bathrooms:</strong> <?php echo e($property->bathrooms); ?></p>
                            <p class="card-text"><strong>Price:</strong> $<?php echo e($property->price); ?></p>
                            <p class="card-text"><strong>Type:</strong> <?php echo e($property->type); ?></p>
                            <p class="card-text"><strong>Location:</strong> <?php echo e($property->location); ?></p>
                            <a href="<?php echo e(url('/properties/' . $property->id)); ?>" class="btn btn-info">View</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\comp3385-project-1\resources\views/properties.blade.php ENDPATH**/ ?>