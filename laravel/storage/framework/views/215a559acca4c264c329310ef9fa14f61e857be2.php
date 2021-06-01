<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Riwayat Alumni Bekerja</h1>
            <a href="<?php echo e(route('history.create')); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-user-plus text-white-50"></i> Tambah alumni tes kerja</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-8 my-2 my-md-0 mw-100 navbar-search" action="<?php echo e(route('find-hr')); ?>" method="GET">
                            <?php echo csrf_field(); ?>
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" name="search" placeholder="Cari mahasiswa/i..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Perusahaan</th>
                                <th>Posisi</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;?>
                            <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?= $i++;?></td>
                                    <td><?php echo e($item->date); ?></td>
                                    <td>
                                        <a href="#modalAlumni" data-toggle="modal" data-remote="<?php echo e(route('students.show', $item->students->id)); ?>" data-target="#modalAlumni"><?php echo e($item->students->full_name); ?></a>
                                    </td>
                                    <td>
                                        <a href="#modalPerusahaan" data-toggle="modal" data-remote="<?php echo e(route('company.show', $item->company->id)); ?>" data-target="#modalPerusahaan"><?php echo e($item->company->company_name); ?></a>
                                    </td>
                                    <td><?php echo e($item->position); ?></td>
                                    <td>
                                        <?php if($item->status == 'Diterima'): ?>
                                            <a tabindex="0" class="badge badge-success" role="button" data-toggle="popover" data-trigger="focus" title="Keterangan" data-content="<?php echo e($item->information); ?>">
                                        <?php elseif($item->status == 'Gagal'): ?>
                                            <a tabindex="0" class="badge badge-danger" role="button" data-toggle="popover" data-trigger="focus" title="Keterangan" data-content="<?php echo e($item->information); ?>">
                                        <?php elseif($item->status == 'Pending'): ?>
                                            <a tabindex="0" class="badge badge-warning" role="button" data-toggle="popover" data-trigger="focus" title="Keterangan" data-content="<?php echo e($item->information); ?>">
                                        <?php else: ?>
                                            <a tabindex="0" class="badge badge-info" role="button" data-toggle="popover" data-trigger="focus" title="Keterangan" data-content="<?php echo e($item->information); ?>">
                                        <?php endif; ?>
                                            <?php echo e($item->status); ?>

                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('history.edit',$item->id)); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                        <form action="<?php echo e(route('history.destroy',$item->id)); ?>" method="POST" style="display: inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="7" class="text-center">Data tidak ditemukan</td>
                                </tr>
                            <?php endif; ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-script'); ?>
<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>
<script>
    $('.popover-dismiss').popover({
        trigger: 'focus'
    })
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mjlq2/Documents/Lerian/project-ta/resources/views/pages/history/index.blade.php ENDPATH**/ ?>