<div class="container-fluid">
    <div class="row">
        <div class="col-xl-5">
            <div class="photo-profile text-center mb-4">
                <img src="storage/<?php echo e($company->logo); ?>" height="180px" class="rounded" loading="lazy">
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Status :</label>
                <div class="col-sm-9">
                  <input type="text" readonly class="form-control" value="<?php echo e($company->status); ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <a href="<?php echo e(route('company.edit',$company->id)); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        <form action="<?php echo e(route('company.destroy', $company->id)); ?>" method="POST" style="display: inline">
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
                  <label class="col-sm-4 col-form-label">Nama perusahaan :</label>
                  <div class="col-sm-8">
                    <input type="text" readonly class="form-control" value="<?php echo e($company->company_name); ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Bidang usaha :</label>
                  <div class="col-sm-8">
                    <input type="text" readonly class="form-control" value="<?php echo e($company->field); ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Skala :</label>
                  <div class="col-sm-8">
                    <input type="text" readonly class="form-control" value="<?php echo e($company->scale); ?>">
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Kontak :</label>
                    <div class="col-sm-8">
                      <input type="text" readonly class="form-control" value="<?php echo e($company->contact); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Email :</label>
                    <div class="col-sm-8">
                      <input type="text" readonly class="form-control" value="<?php echo e($company->email); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Alamat :</label>
                    <div class="col-sm-8">
                      <textarea type="text" readonly class="form-control" value="<?php echo e($company->address); ?>"><?php echo e($company->address); ?></textarea>
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
                            <th>Nama Alumni</th>
                            <th>Posisi</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($item->date); ?></td>
                            <td><?php echo e($item->students->full_name); ?></td>
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
                                    <td colspan="6" class="text-center">Belum ada alumni yang bekerja</td>
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
</div><?php /**PATH /Users/mjlq2/Documents/Lerian/project-ta/resources/views/pages/company/show.blade.php ENDPATH**/ ?>