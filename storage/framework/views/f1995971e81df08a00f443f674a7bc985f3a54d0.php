

<?php $__env->startSection('title', 'Detail Movie'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-2 fw-normal">Detail Movies</h1>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($movie->title); ?> <span class="badge bg-primary"><?php echo e($movie->year); ?></span></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo e($movie->genre); ?></h6>
                    <p class="card-text"><?php echo e($movie->description); ?></p>
                    <a href="#" class="card-link">Kembali</a>
                    <form action="/movie/<?php echo e($movie->id); ?>" method="POST">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    <a href="/movie/edit/<?php echo e($movie->id); ?>" class="card-link">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\raywi\Desktop\campur\My Website\laravel_basic\resources\views/artikel/show.blade.php ENDPATH**/ ?>