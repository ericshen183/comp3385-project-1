
<?php $__env->startSection('content'); ?>
    <div class="container my-5">
        <h1 class="display-5 fw-bold text-center">Add Property</h1>
        <div class="col-lg-6 mx-auto">
            <form action="<?php echo e(route('property.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="title" class="form-label">Property Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" required></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="bedrooms" class="form-label">Number of bedrooms</label>
                        <input type="text" class="form-control" id="bedrooms" name="bedrooms" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="bathrooms" class="form-label">Number of bathrooms</label>
                        <input type="text" class="form-control" id="bathrooms" name="bathrooms" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="type" class="form-label">Property Type</label>
                        <select class="form-select" id="type" name="type" required>
                            <option value="House">House</option>
                            <option value="Apartment">Apartment</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" required>
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo" name="photo" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Property</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\comp3385-project-1\resources\views/property-create.blade.php ENDPATH**/ ?>