<aside class="app-side fixed" id="app-side">
    <!-- BEGIN .side-content -->
    <div class="side-content ">
        <!-- BEGIN .user-profile -->
        <div class="user-profile">
            <img src="<?php echo e(asset("assets/admin/img/user.png")); ?>" class="profile-thumb" alt="<?php echo e(auth()->user()->name); ?>">
            <h6 class="profile-name"><?php echo e(auth()->user()->name); ?></h6>
        </div>
        <!-- END .user-profile -->
        <!-- BEGIN .side-nav -->
        <div class="sidebarNavScroll">
            <nav class="side-nav">
                <!-- BEGIN: side-nav-content -->
                <ul class="unifyMenu" id="unifyMenu">

                    <li class="<?php echo \Illuminate\Support\Arr::toCssClasses(["active selected" => Route::currentRouteName() == "admin.home"]); ?>">
                        <a href="<?php echo e(route("admin.home")); ?>">
                            <span class="has-icon">
                                <i class="icon-home"></i>
                            </span>
                            <span class="nav-title"><?php echo e(__('Home')); ?></span>
                        </a>
                    </li>


                    <li class="<?php echo \Illuminate\Support\Arr::toCssClasses(["active selected" => request()->is("*users*")]); ?>">
                        <a href="<?php echo e(route("admin.users.index")); ?>">
                            <span class="has-icon">
                                <i class="icon-users"></i>
                            </span>
                            <span class="nav-title"><?php echo e(__('Users')); ?></span>
                        </a>
                    </li>



                    <li>
                        <a href="<?php echo e(route("logout")); ?>">
                            <span class="has-icon">
                                <i class="icon-log-out"></i>
                            </span>
                            <span class="nav-title"><?php echo e(__('Logout')); ?></span>
                        </a>
                    </li>
                </ul>
                <!-- END: side-nav-content -->
            </nav>
        </div>
        <!-- END: .side-nav -->
    </div>
    <!-- END: .side-content -->
</aside>
<?php /**PATH C:\Users\alalfy\IdeaProjects\taheed\resources\views/admin/includes/sidebar.blade.php ENDPATH**/ ?>