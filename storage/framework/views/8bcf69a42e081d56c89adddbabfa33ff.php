<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Laravel 11</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <?php if (isset($component)) { $__componentOriginal25c194a14642fa0ec21de5843b8ea049 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25c194a14642fa0ec21de5843b8ea049 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar-link','data' => ['href' => '/','active' => request()->is('/')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('/'))]); ?>Home <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $attributes = $__attributesOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $component = $__componentOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__componentOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal25c194a14642fa0ec21de5843b8ea049 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25c194a14642fa0ec21de5843b8ea049 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar-link','data' => ['href' => '/posts','active' => request()->is('posts')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/posts','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('posts'))]); ?>Post <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $attributes = $__attributesOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $component = $__componentOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__componentOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
                <?php if(Auth::check() && Auth::user()->is_admin): ?>
                <?php if (isset($component)) { $__componentOriginal25c194a14642fa0ec21de5843b8ea049 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25c194a14642fa0ec21de5843b8ea049 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar-link','data' => ['href' => '/admin','active' => request()->is('admin')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/admin','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('admin'))]); ?>Admin <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $attributes = $__attributesOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $component = $__componentOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__componentOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
                <?php endif; ?>
                <?php if(auth()->guard()->guest()): ?>
                    <?php if (isset($component)) { $__componentOriginal25c194a14642fa0ec21de5843b8ea049 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25c194a14642fa0ec21de5843b8ea049 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar-link','data' => ['href' => ''.e(route('login')).'','active' => request()->is('login')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('login')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('login'))]); ?>Login <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $attributes = $__attributesOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $component = $__componentOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__componentOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal25c194a14642fa0ec21de5843b8ea049 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25c194a14642fa0ec21de5843b8ea049 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar-link','data' => ['href' => ''.e(route('register')).'','active' => request()->is('register')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('register')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('register'))]); ?>Register <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $attributes = $__attributesOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $component = $__componentOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__componentOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                <span class="font-semibold text-blue-600 dark:text-blue-400"><?php echo e(Auth::user()->name); ?></span>
                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                            <?php if (isset($component)) { $__componentOriginal25c194a14642fa0ec21de5843b8ea049 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal25c194a14642fa0ec21de5843b8ea049 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar-link','data' => ['href' => ''.e(route('logout')).'','active' => false,'onclick' => 'event.preventDefault(); this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('logout')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'onclick' => 'event.preventDefault(); this.closest(\'form\').submit();']); ?>
                                Logout
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $attributes = $__attributesOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__attributesOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal25c194a14642fa0ec21de5843b8ea049)): ?>
<?php $component = $__componentOriginal25c194a14642fa0ec21de5843b8ea049; ?>
<?php unset($__componentOriginal25c194a14642fa0ec21de5843b8ea049); ?>
<?php endif; ?>

                    </form>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\laravelSetup\resources\views/components/navbar.blade.php ENDPATH**/ ?>