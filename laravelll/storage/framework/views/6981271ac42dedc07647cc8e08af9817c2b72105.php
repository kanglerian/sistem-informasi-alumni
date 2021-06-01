<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Alumni Tes Kerja</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-file-import text-white-50"></i> Import data (.xlsx)</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Alumni</h6>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('history.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal :</label>
                        <div class="col-sm-10">
                            <input type="date" name="date" value="<?php echo e(old('date')); ?>" class="form-control" placeholder="Isi no telp.." required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama lengkap :</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="students_id" required>
                                <option selected>Pilih Alumni</option>
                                <?php $__empty_1 = true; $__currentLoopData = $alumni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->full_name); ?> (<?php echo e($item->nim); ?>)</option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <option>Data tidak ditemukan</option>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama perusahaan :</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="company_id" required>
                                <option selected>Pilih Perusahaan</option>
                                <?php $__empty_1 = true; $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->company_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <option>Data tidak ditemukan</option>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Posisi :</label>
                        <div class="col-sm-10">
                            <input type="text" name="position" value="<?php echo e(old('position')); ?>" class="form-control" placeholder="Isi posisi dilamar.." required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status :</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="status" required>
                                <option selected>Pilih</option>
                                <option value="Kirim berkas lamaran">Kirim berkas lamaran</option>
                                <option value="Tes kerja">Tes kerja</option>
                                <option value="Wawancara">Wawancara</option>
                                <option value="Diterima">Diterima</option>
                                <option value="Pending">Pending</option>
                                <option value="Gagal">Gagal</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Keterangan :</label>
                        <div class="col-sm-10">
                            <input type="text" name="information" value="<?php echo e(old('information')); ?>" class="form-control" placeholder="Isi keterangan..">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mjlq2/Documents/Lerian/project-ta/resources/views/pages/history/create.blade.php ENDPATH**/ ?>