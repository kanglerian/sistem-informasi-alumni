<?php $__env->startSection('content'); ?>
    <section class="content-company">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4">
                    <div class="company-card mb-4">
                        <div class="text-center">
                            <img src="/storage/<?php echo e($company->logo); ?>" loading="lazy" class="img-fluid">
                        </div>
                        <div class="name-company-card">
                            <h5 class="company-name"><?php echo e($company->company_name); ?></h5>
                            <h6 class="company-field"><?php echo e($company->field); ?></h6>
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <a href="mailto:<?php echo e($company->email); ?>"
                                        class="btn btn-light btn-profile-media btn-sm mb-2"><i class="far fa-envelope"></i>
                                        email</a>
                                </div>
                            </div>
                        </div>
                        <div class="biodata-card">
                            <h6 class="company-headline"><b>Detail Perusahaan</b></h6>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="company-title">Skala</p>
                                </div>
                                <div class="col-7">
                                    <p class="company-content"><?php echo e($company->scale); ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="company-title">Jumlah alumni</p>
                                </div>
                                <div class="col-7">
                                    <p class="company-content"><?php echo e($count); ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="company-title">Alamat</p>
                                </div>
                                <div class="col-7">
                                    <p class="company-content"><?php echo e($company->address); ?></p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="text-center">
                                    <p class="biodata-status"><?php echo e($company->status); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="profile-history-card">
                        <h5 class="mb-4 text-center">History Alumni Bekerja </h5>
                        <div class="table-responsive-sm">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tahun</th>
                                        <th scope="col">Nama Alumni</th>
                                        <th scope="col">Posisi</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <th scope="row"><?php echo $i++; ?></th>
                                            <td><?php echo e($item->date); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('mahasiswa.show', $item->students_id)); ?>">
                                                    <?php echo e($item->students->full_name); ?>

                                                </a>
                                            </td>
                                            <td><?php echo e($item->position); ?></td>
                                            <td>

                                                <?php if($item->status == 'Diterima'): ?>
                                                    <a href="#" title="Detail" data-container="body" data-toggle="popover"
                                                        data-placement="left" data-content="<?php echo e($item->information); ?>">
                                                        <span class="badge badge-success">
                                                        <?php elseif($item->status == 'Pending'): ?>
                                                            <a href="#" title="Detail" data-container="body"
                                                                data-toggle="popover" data-placement="left"
                                                                data-content="<?php echo e($item->information); ?>">
                                                                <span class="badge badge-warning">
                                                                <?php elseif($item->status == 'Gagal'): ?>
                                                                    <a href="#" title="Detail" data-container="body"
                                                                        data-toggle="popover" data-placement="left"
                                                                        data-content="<?php echo e($item->information); ?>">
                                                                        <span class="badge badge-danger">
                                                                        <?php else: ?>
                                                                            <a href="#" title="Detail" data-container="body"
                                                                                data-toggle="popover" data-placement="left"
                                                                                data-content="<?php echo e($item->information); ?>">
                                                                                <span class="badge badge-info">
                                                <?php endif; ?>
                                                <?php echo e($item->status); ?></span></a>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                    <?php endif; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mjlq2/Documents/Lerian/project-ta/resources/views/pages/perusahaan/show.blade.php ENDPATH**/ ?>