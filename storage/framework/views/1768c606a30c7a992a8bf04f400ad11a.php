<?php $__env->startSection("title" , __("Home")); ?>

<?php $__env->startSection("page_title" , __("Home")); ?>

<?php $__env->startSection("page_subtitle" , __("تحليل الموقع")); ?>

<?php $__env->startSection("content"); ?>
    <?php echo $__env->make('admin.includes.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <div class="row gutters">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="info-stats4">
                <div class="icon-type pull-left">
                    <i class="icon-motorcycle"></i>
                </div>
                <div class="sale-num">
                    <h4><?php echo e($motors_count); ?></h4>
                    <p>عدد الدراجات</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="info-stats4">
                <div class="icon-type pull-left">
                    <i class="icon-coin-dollar"></i>
                </div>
                <div class="sale-num">
                    <h4><?php echo e($motors_count); ?></h4>
                    <p>قيمة ايجار الدراجات</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="info-stats4">
                <div class="icon-type pull-left">
                    <i class="icon-user"></i>
                </div>
                <div class="sale-num">
                    <h4><?php echo e($users_count); ?></h4>
                    <p>عدد المستخدمين</p>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alalfy\IdeaProjects\taheed\resources\views/admin/home/index.blade.php ENDPATH**/ ?>