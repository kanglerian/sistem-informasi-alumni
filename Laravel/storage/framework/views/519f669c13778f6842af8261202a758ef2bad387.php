<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('client/css/apps.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500&display=swap" rel="stylesheet">

    <title>Lerian Febriana | Sistem Informasi Data Alumni Bekerja</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./img/logo.svg" height="50" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="<?php echo e(route('mahasiswa.index')); ?>">Data Alumni</a>
                    <a class="nav-item nav-link active" href="<?php echo e(route('perusahaan.index')); ?>">Data Perusahaan</a>
                    <a class="nav-item nav-link btn-login" href="<?php echo e(route('dashboard.index')); ?>">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Header -->
    <section class="company-data">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-12">
                    <form action="<?php echo e(route('search-pr')); ?>" method="GET">
                        <div class="form-group row">
                            <a href="<?php echo e(route('perusahaan.index')); ?>" class="col-sm-2 col-12 col-form-label"><i
                                class="fas fa-chevron-left"></i></a>
                                <div class="col-sm-8 col-10">
                                    <input type="text" class="form-control" name="search" placeholder="Cari data perusahaan">
                                </div>
                                <button class="btn btn-warning" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->

    <!-- Content -->
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
                                    <a href="mailto:<?php echo e($company->email); ?>" class="btn btn-light btn-profile-media btn-sm mb-2"><i class="far fa-envelope"></i>
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
                                    <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><?php echo e($item->date); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('mahasiswa.show',$item->students_id)); ?>">
                                                <?php echo e($item->students->full_name); ?>

                                            </a>
                                        </td>
                                        <td><?php echo e($item->position); ?></td>
                                        <td>
                                           
                                                <?php if($item->status == 'Diterima'): ?>
                                                    <a href="#" title="Detail" data-container="body"
                                                    data-toggle="popover" data-placement="left"
                                                    data-content="<?php echo e($item->information); ?>">
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

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-12">
                    <img src="./img/logo-mono.svg" height="50px">
                    <p class="footer-address">Jalan Ir. H. Juanda KM. 2 No. 106, Panglayungan, Kec. Cipedes,
                        Tasikmalaya, Jawa Barat 46151</p>
                </div>
                <div class="col-xl-6 col-12 social-media">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <p class="footer-copyright">Development by Lerian Febriana</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script>
        $(document).ready(function () {
            $('[data-toggle="popover"]').popover({
                trigger: 'focus'
            });
        });
    </script>
</body>

</html><?php /**PATH /Users/mjlq2/Documents/Lerian/project-ta/resources/views/layouts/detailPerusahaan.blade.php ENDPATH**/ ?>