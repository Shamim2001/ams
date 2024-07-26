<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo e(setting('app_name') ?? config('app.name')); ?><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('/')); ?>assets/backend/images/favicon.ico">
    <!-- DataTables -->
    <link href="<?php echo e(asset('/')); ?>assets/backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('/')); ?>assets/backend/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="<?php echo e(asset('/')); ?>assets/backend/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="<?php echo e(asset('/')); ?>assets/backend/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo e(asset('/')); ?>assets/backend/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->


    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/libs/text-editor/quill.snow.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/libs/text-editor/katex.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/libs/text-editor/quill.bubble.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/libs/text-editor/monokai-sublime.min.css')); ?>">
    <link href="<?php echo e(asset('/')); ?>assets/backend/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('/')); ?>assets/backend/css/style.min.css" rel="stylesheet"/>
    <?php echo $__env->yieldContent('style'); ?>
</head>

<body data-sidebar="dark" data-layout-mode="dark">
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="layout-wrapper">
    <?php echo $__env->make('backend.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="vertical-menu">
        <div data-simplebar class="h-100">
            <?php echo $__env->make('backend.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div class="main-content">
        <div class="page-content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>


<!-- JAVASCRIPT -->
<script src="<?php echo e(asset('/')); ?>assets/backend/libs/jquery/jquery.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/libs/metismenu/metisMenu.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/libs/node-waves/waves.min.js"></script>

<!-- Required datatable js -->
<script src="<?php echo e(asset('/')); ?>assets/backend/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?php echo e(asset('/')); ?>assets/backend/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/libs/jszip/jszip.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="<?php echo e(asset('/')); ?>assets/backend/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<!-- Datatable init js -->
<script src="<?php echo e(asset('/')); ?>assets/backend/js/pages/datatables.init.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script src="<?php echo e(asset('/')); ?>assets/backend/js/app.js"></script>
<script src="<?php echo e(asset('/')); ?>assets/backend/js/index.js"></script>




<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
<?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\thechemicals\resources\views/backend/layout/app.blade.php ENDPATH**/ ?>