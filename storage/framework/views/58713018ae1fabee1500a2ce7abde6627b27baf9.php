<?php $__env->startSection('content'); ?>
    
<!-- Content -->
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-xl-3 col-9">
                <div class="content-card">
                    <div class="content-photo" loading="lazy"
                    style="background-image: url('<?php echo e($item->photo); ?>');background-size: cover;"></div>
                    <div class="content-desc text-center">
                        <p class="content-major"><span class="badge badge-major">D3 <?php echo e($item->major); ?></span></p>
                        <h5 class="content-name"><?php echo e($item->full_name); ?></h5>
                        <p class="content-school"><?php echo e($item->alumni); ?></p>
                        <p class="content-status"><span class="badge badge-warning"><?php echo e($item->status); ?></span></p>
                        <hr>
                        <a href="<?php echo e(route('mahasiswa.show',$item->id)); ?>" class="btn btn-profile">lihat profile</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>Data tidak ada</p>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End Content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mjlq2/Documents/Lerian/project-ta/resources/views/pages/mahasiswa/index.blade.php ENDPATH**/ ?>