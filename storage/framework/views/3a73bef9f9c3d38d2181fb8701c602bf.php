<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-end z-10">
    <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(url('/dashboard')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Dashboard</a>
    <?php else: ?>
        <a href="<?php echo e(route('login')); ?>" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Log in</a>

        <!--[if BLOCK]><![endif]--><?php if(Route::has('register')): ?>
            <a href="<?php echo e(route('register')); ?>" class="ms-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Register</a>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH F:\ZK\laragon\www\himalayaspatti\resources\views\livewire/welcome/navigation.blade.php ENDPATH**/ ?>