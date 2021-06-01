<?php $__env->startSection('content'); ?>

    <!-- Content -->
    <section class="content-alumni">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4">
                    <div class="profile-card mb-4">
                        <div class="name-card">
                            <div class="photo-card" loading="lazy"
                                style="background-image: url('<?php echo e($student->photo); ?>');background-size: cover;background-position: center;">
                            </div>
                            <h5 class="profile-name"><?php echo e($student->full_name); ?></h5>
                            <h6 class="profile-major">D3 <?php echo e($student->major); ?></h6>
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <a href="https://wa.me/<?php echo e($student->telp); ?>}"
                                        class="btn btn-light btn-profile-media btn-sm mb-2"><i class="fab fa-whatsapp"></i>
                                        pesan</a>
                                </div>
                                <div class="col-auto">
                                    <a href="mailto:<?php echo e($student->email); ?>"
                                        class="btn btn-light btn-profile-media btn-sm mb-2"><i class="far fa-envelope"></i>
                                        email</a>
                                </div>
                            </div>
                        </div>
                        <div class="biodata-card">
                            <h6 class="biodata-headline"><b>Biodata</b></h6>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="biodata-title">Tanggal lahir</p>
                                </div>
                                <div class="col-7">
                                    <p class="biodata-content"><?php echo e($student->birthday); ?></p>
                                </div>
                            </div>
                            <hr class="divider">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="biodata-title">Alumni</p>
                                </div>
                                <div class="col-7">
                                    <p class="biodata-content"><?php echo e($student->alumni); ?></p>
                                </div>
                            </div>
                            <hr class="divider">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="biodata-title">Alamat</p>
                                </div>
                                <div class="col-7">
                                    <p class="biodata-content"><?php echo e($student->address); ?></p>
                                </div>
                            </div>
                            <hr class="divider">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="biodata-title">Tahun lulus</p>
                                </div>
                                <div class="col-7">
                                    <p class="biodata-content"><?php echo e($student->year_sign + 3); ?></p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <a href="http://facebook.com/<?php echo e($student->facebook); ?>" target="_blank"
                                        class="btn btn-light mr-1"><i class="fab fa-facebook-f"></i></a>
                                    <a href="http://instagram.com/<?php echo e($student->instagram); ?>" target="_blank"
                                        class="btn btn-light mr-1"><i class="fab fa-instagram"></i></a>
                                    <a href="http://youtube.com/c/<?php echo e($student->youtube); ?>" target="_blank"
                                        class="btn btn-light mr-1"><i class="fab fa-youtube"></i></a>
                                    <a href="https://www.tiktok.com/<?php echo e($student->tiktok); ?>" target="_blank"
                                        class="btn btn-light mr-1"><i class="fab fa-tiktok"></i></a>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="biodata-status"><?php echo e($student->status); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="profile-history-card">
                        <h5 class="mb-4 text-center">History Penempatan Kerja </h5>
                        <div class="table-responsive-sm">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Nama Perusahaan</th>
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
                                                <a href="<?php echo e(route('perusahaan.show', $item->company_id)); ?>">
                                                    <?php echo e($item->company->company_name); ?>

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
    <!-- End Content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mjlq2/Documents/Lerian/project-ta/resources/views/pages/mahasiswa/show.blade.php ENDPATH**/ ?>