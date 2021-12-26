<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>semen_site</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
    <link rel="stylesheet" href="<?php echo e(asset('fonts/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/Bootstrap-DataTables.css')); ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/Login-Form-blue-Gradient-1.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/Login-Form-blue-Gradient.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/Sidebar-Cool-SB-Admin-Inspirate.css')); ?>">
</head>

<body>
    <section>
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark py-lg-4" id="mainNav">
        <div class="container"><a class="navbar-brand text-uppercase d-lg-none text-expanded" href="#">VVMALINE</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarResponsive"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="/">главная</a></li>
                    <li class="nav-item"><a class="nav-link" href="about">О нас</a></li>
                    <li class="nav-item"><a class="nav-link" href="trainers">ТРЕНЕРы</a></li>
                    <li class="nav-item"><a class="nav-link" href="login">Войти</a></li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="lgp-hd">
            <h2><strong>тренерская, Vvmaline!</strong></h2>
            <h5><strong>Войдите, чтобы увидеть свое расписание!</strong></h5>
        </div>
        <div class="container login-cont">
            <div class="row">
                <div class="col-10 col-sm-6 col-md-4 col-lg-4 offset-1 offset-sm-3 offset-md-4 offset-lg-4 login-col"><i class="icon ion-lock-combination"></i>
                    <form class="login-form" action="<?php echo e(route('check_auth')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                        <div class="form-group mb-3"><input class="form-control form-control-lg lg-frc" name="email" type="text" required="" placeholder="Логин"></div>
                        <div class="form-group mb-3"><input class="form-control form-control-lg lg-frc" type="password" name="password" required="" placeholder="Пароль"></div>
                        <div class="form-group mb-3"><button class="btn btn-light btn-lg login-btn" type="submit"><strong>Войти</strong></button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo e(asset('js/Bootstrap-DataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('js/current-day.js')); ?>"></script>
</body>

</html>
<?php /**PATH /home/alina/test/example-app/resources/views/login.blade.php ENDPATH**/ ?>