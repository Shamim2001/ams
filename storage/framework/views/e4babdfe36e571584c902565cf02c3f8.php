<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" key="t-menu">Menu</li>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check("Dashboard.View")): ?>
            <li>
                <a href="<?php echo e(route('dashboard')); ?>" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-dashboards">Dashboards</span>
                </a>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('User.List')): ?>
            <li>
                <a href="<?php echo e(route('user.index')); ?>" class="waves-effect">
                    <i class="bx bx-layout"></i>
                    <span key="t-layouts">User</span>
                </a>
            </li>
        <?php endif; ?>








        <li>
            <a href="<?php echo e(route('admin.slider.index')); ?>" class="waves-effect">
                <i class="mdi mdi-apps"></i>
                <span key="t-layouts">Slider</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('admin.service.index')); ?>" class="waves-effect">
                <i class="mdi mdi-room-service"></i>
                <span key="t-layouts">Service</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('admin.customer.index')); ?>" class="waves-effect">
                <i class="mdi mdi-room-service"></i>
                <span key="t-layouts">Customer</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('admin.supplier.index')); ?>" class="waves-effect">
                <i class="mdi mdi-room-service"></i>
                <span key="t-layouts">Supplier (We Represent)</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('admin.link-resource.index')); ?>" class="waves-effect">
                <i class="mdi mdi-room-service"></i>
                <span key="t-layouts">Link & Resource</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('admin.team-member.index')); ?>" class="waves-effect">
                <i class="mdi mdi-account-group"></i>
                <span key="t-layouts">Team Member</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('admin.company.index')); ?>" class="waves-effect">
                <i class="mdi mdi-alpha-c-circle"></i>
                <span key="t-layouts">Company</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('admin.product.index')); ?>" class="waves-effect">
                <i class="mdi mdi-alpha-p-circle"></i>
                <span key="t-layouts">Product</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('admin.type.index')); ?>" class="waves-effect">
                <i class="mdi mdi-alpha-p-circle"></i>
                <span key="t-layouts">Type</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('admin.person.index')); ?>" class="waves-effect">
                <i class="mdi mdi-alpha-p-circle"></i>
                <span key="t-layouts">Person</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('admin.investigation.index')); ?>" class="waves-effect">
                <i class="mdi mdi-alpha-p-circle"></i>
                <span key="t-layouts">Investigation From</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('admin.patient.index')); ?>" class="waves-effect">
                <i class="mdi mdi-alpha-p-circle"></i>
                <span key="t-layouts">Patient</span>
            </a>
        </li>
        <!--<li>-->
        <!--    <a href="<?php echo e(route('admin.quiz.index')); ?>" class="waves-effect">-->
        <!--        <i class="mdi mdi-checkbox-multiple-blank"></i>-->
        <!--        <span key="t-layouts">Quiz</span>-->
        <!--    </a>-->
        <!--</li>-->
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class='bx bx-cog'></i>
                <span key="t-dashboards">Setting</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="<?php echo e(route('admin.setting.pages')); ?>" key="t-default">Pages</a></li>
                <li><a href="<?php echo e(route('admin.country.index')); ?>" key="t-default">Country</a></li>
            </ul>
        </li>
    </ul>
</div>
<?php /**PATH C:\laragon\www\ams\resources\views/backend/includes/sidebar.blade.php ENDPATH**/ ?>