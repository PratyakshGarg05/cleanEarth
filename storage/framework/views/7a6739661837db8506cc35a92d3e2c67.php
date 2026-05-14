<?php $__env->startSection('title', 'Awareness — CleanEarth'); ?>

<?php $__env->startSection('content'); ?>


<div class="awareness-banner">
    <span class="section-label">Public Awareness</span>
    <h2 class="section-title">What You Can Do</h2>
    <p class="section-sub">
        Individual action aggregated across communities creates systemic change.
        Here's how every person can contribute to better waste management and sanitation.
    </p>
</div>


<section class="section bg-white">
    <span class="section-label">Step by Step</span>
    <h2 class="section-title">A Roadmap to a Cleaner Community</h2>

    <div class="timeline">
        <?php $__currentLoopData = $timeline; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="tl-item <?php echo e($item['side'] === 'right' ? 'right' : ''); ?>">
                <?php if($item['side'] === 'left'): ?>
                    <div class="tl-content">
                        <h4><?php echo e($item['title']); ?></h4>
                        <p><?php echo e($item['desc']); ?></p>
                    </div>
                    <div class="tl-dot"><?php echo e($item['icon']); ?></div>
                    <div class="tl-empty"></div>
                <?php else: ?>
                    <div class="tl-empty"></div>
                    <div class="tl-dot"><?php echo e($item['icon']); ?></div>
                    <div class="tl-content">
                        <h4><?php echo e($item['title']); ?></h4>
                        <p><?php echo e($item['desc']); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>


<div class="tips-grid">
    <?php $__currentLoopData = $tips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="tip-card">
            <span class="tip-icon"><?php echo e($tip['icon']); ?></span>
            <h4><?php echo e($tip['title']); ?></h4>
            <p><?php echo e($tip['desc']); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/pratyaksh/Desktop/untitled folder/cleanearth/resources/views/pages/awareness.blade.php ENDPATH**/ ?>