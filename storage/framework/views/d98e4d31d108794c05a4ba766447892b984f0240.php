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

    <title>Cari Data Perusahaan | Sistem Informasi Data Alumni Bekerja</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo e(asset('client/img/logo.svg')); ?>" height="50" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="<?php echo e(route('mahasiswa.index')); ?>">Data Alumni</a>
                    <a class="nav-item nav-link" href="<?php echo e(route('perusahaan.index')); ?>">Data Perusahaan</a>
                    <a class="nav-item nav-link btn-login" href="<?php echo e(route('dashboard.index')); ?>">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Header -->
    <section class="header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-xl-7">
                    <h2 class="header-title">Cari Data <strong>Perusahaan</strong></h2>
                    <form action="<?php echo e(route('search-pr')); ?>" method="GET">
                        <?php echo csrf_field(); ?>
                        <div class="input-group search-bar">
                            <input type="text" class="form-control search-input" name="search" placeholder="Cari data perusahaan..">
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-search" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->

    <!-- Content -->
    <section class="content">
        <div class="container">
            <div class="row justify-content-center">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-3 col-9">
                        <div class="content-card">
                            <div class="content-photo pt-3" style="background-image: url('storage/<?php echo e($item->logo); ?>');background-size:cover;">
                            </div>
                            
                            <div class="content-desc text-center">
                                <h5 class="content-name"><?php echo e($item->company_name); ?></h5>
                                <p class="content-school"><?php echo e($item->field); ?></p>
                                <hr>
                                <a href="<?php echo e(route('perusahaan.show',$item->id)); ?>" class="btn btn-profile">lihat perusahaan</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- End Content -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-12">
                    <img src="<?php echo e(asset('client/img/logo-mono.svg')); ?>" height="50px">
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
</body>

</html><?php /**PATH /Users/mjlq2/Documents/Lerian/project-ta/resources/views/layouts/dataPerusahaan.blade.php ENDPATH**/ ?>