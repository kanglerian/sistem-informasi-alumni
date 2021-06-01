<div class="container-fluid">
    <div class="row">
        <div class="col-xl-5">
            <div class="photo-profile text-center mb-4">
                <img src="<?php echo e($student->photo); ?>" height="180px" class="rounded" loading="lazy">
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Alumni :</label>
                <div class="col-sm-9">
                  <input type="text" readonly class="form-control" value="<?php echo e($student->alumni); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Jurusan :</label>
                <div class="col-sm-9">
                  <input type="text" readonly class="form-control" value="<?php echo e($student->major); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Status :</label>
                <div class="col-sm-9">
                  <input type="text" readonly class="form-control" value="<?php echo e($student->status); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-auto col-form-label">Tahun masuk / Tahun lulus :</label>
                <div class="col-6">
                  <input type="text" readonly class="form-control" value="<?php echo e($student->year_sign); ?> / <?php echo e($student->year_sign + 2); ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <a href="http://facebook.com/<?php echo e($student->facebook); ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fab fa-facebook-f"></i></a>
                        <a href="http://instagram.com/<?php echo e($student->instagram); ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fab fa-instagram"></i></a>
                        <a href="http://youtube.com/c/<?php echo e($student->youtube); ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.tiktok.com/<?php echo e($student->tiktok); ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fab fa-tiktok"></i></a>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo e(route('students.edit',$student->id)); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST" style="display: inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-7">
            <form>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">NIM :</label>
                  <div class="col-sm-9">
                    <input type="text" readonly class="form-control" value="<?php echo e($student->nim); ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nama lengkap :</label>
                  <div class="col-sm-9">
                    <input type="text" readonly class="form-control" value="<?php echo e($student->full_name); ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Tanggal lahir :</label>
                  <div class="col-sm-9">
                    <input type="text" readonly class="form-control" value="<?php echo e($student->birthday); ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Jenis kelamin :</label>
                  <div class="col-sm-9">
                    <input type="text" readonly class="form-control" value="<?php echo e($student->gender); ?>">
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal lahir :</label>
                    <div class="col-sm-9">
                      <input type="text" readonly class="form-control" value="<?php echo e($student->birthday); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Telpon :</label>
                    <div class="col-sm-9">
                      <input type="text" readonly class="form-control" value="<?php echo e($student->telp); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Email :</label>
                    <div class="col-sm-9">
                      <input type="text" readonly class="form-control" value="<?php echo e($student->email); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Alamat :</label>
                    <div class="col-sm-9">
                      <textarea type="text" readonly class="form-control" value="<?php echo e($student->address); ?>"><?php echo e($student->address); ?></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xl-12">
            <div class="card-header my-3">
                <h6 class="m-0 font-weight-bold text-secondary">Data Penempatan Kerja</h6>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama Perusahaan</th>
                            <th>Posisi</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($item->date); ?></td>
                            <td><?php echo e($item->company->company_name); ?>

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
                                    <td colspan="6" class="text-center"><?php echo e($student->full_name); ?> belum bekerja</td>
                                </tr>
                            <?php endif; ?>                          
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
    </div>
</div><?php /**PATH /Users/mjlq2/Documents/Lerian/project-ta/resources/views/pages/students/show.blade.php ENDPATH**/ ?>