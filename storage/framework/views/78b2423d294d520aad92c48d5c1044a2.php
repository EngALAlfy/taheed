<?php $__env->startSection("title", "Users"); ?>

<?php $__env->startSection("page_title", "User Details"); ?>

<?php $__env->startSection("content"); ?>
    <div class="row gutters">
        <div class="col-12">
            <div class="card">
                <div class="card-body"> <!-- Center align content -->

                    <div class="form-group">
                        <label for="name"><?php echo e(__('Name')); ?></label>
                        <input type="text" class="form-control" id="name" value="<?php echo e($user->name); ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="email"><?php echo e(__('Email')); ?></label>
                        <input type="email" class="form-control" id="email" value="<?php echo e($user->email); ?>" readonly>
                    </div>


                    <div class="form-group">
                        <label for="phone_number"><?php echo e(__('Phone')); ?></label>
                        <input type="text" class="form-control" id="phone_number" value="<?php echo e($user->phone); ?>" readonly>
                    </div>


                    <div class="form-group">
                        <label for="role"><?php echo e(__('Role')); ?></label>
                        <input type="text" class="form-control" id="role" value="<?php echo e($user->role); ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alalfy\IdeaProjects\taheed\resources\views/admin/users/show.blade.php ENDPATH**/ ?>