

<?php $__env->startSection('title', 'Top Movie'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-2 fw-normal">Top Movies</h1>
            <a href="/movie/create" class="btn btn-primary">Tambah Movie</a>
            <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('status')); ?>

            </div>
            <?php endif; ?>
            <ul class="list-group list-group-flush">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="">
                        <h5 class="mb-1 fw-light"><?php echo e($loop->iteration); ?> - <?php echo e($d->title); ?> <span class="badge bg-primary"><?php echo e($d->year); ?></span></h5>
                        <small class="text-muted"><?php echo e($d->genre); ?></small>
                    </div>
                    <a href="/movie/<?php echo e($d->id); ?>" class="btn btn-warning">Detail</a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>


            <a href=""></a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\raywi\Desktop\campur\My Website\laravel_basic\resources\views/artikel/index.blade.php ENDPATH**/ ?>