<div class="p-l-20 p-r-20">
    <?php if(session()->has('success')): ?>
        <script id="notification_script">
            if (Notification.permission === "granted") {
                new Notification("Success", {
                    body: "<?php echo e(session('success')); ?>",
                    icon: "<?php echo e(asset('assets/admin/img/lead.png')); ?>"
                });
            } else {
                Notification.requestPermission();
            }
        </script>
    <?php endif; ?>

        <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if($errors->any()): ?>
        <div class="m-t-10 alert with-close alert-danger alert-dismissible fade show">
            <span class="badge badge-pill badge-danger">Error</span>
            <i class="icon fa fa-ban"></i>
            <ul class="list-unstyled">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    <?php endif; ?>


</div>
<?php /**PATH C:\Users\alalfy\IdeaProjects\taheed\resources\views/admin/includes/status.blade.php ENDPATH**/ ?>