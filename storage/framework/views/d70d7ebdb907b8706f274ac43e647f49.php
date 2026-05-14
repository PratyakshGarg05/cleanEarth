<?php $__env->startSection('title', 'About — CleanEarth'); ?>

<?php $__env->startSection('content'); ?>


<section class="section bg-white" style="padding-top:80px">
    <div class="about-grid">
        <div class="about-visual">
            <div class="big-icon">♻️</div>
            <div class="inner">
                <h2>Our Mission</h2>
                <p>To educate, advocate, and implement practical waste management strategies
                   that protect public health and restore ecological balance in our communities.</p>
            </div>
        </div>

        <div class="about-text">
            <span class="section-label">About This Project</span>
            <h2 class="section-title">Understanding the Waste Crisis</h2>
            <p class="body-text">
                Rapid urbanization and population growth have led to an unprecedented waste
                generation crisis. Without structured intervention through segregation,
                controlled disposal, and improved sanitation, communities face serious health,
                economic, and environmental consequences.
            </p>

            <ul class="about-list">
                <?php $__currentLoopData = $pillars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <div class="icon-sm"><?php echo e($item['icon']); ?></div>
                        <div class="txt">
                            <strong><?php echo e($item['title']); ?></strong>
                            <span><?php echo e($item['desc']); ?></span>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</section>


<section class="section bg-light">
    <span class="section-label">The Problem Scope</span>
    <h2 class="section-title">Key Statistics</h2>
    <p class="section-sub">Understanding the scale of the problem helps us design proportional, effective responses.</p>

    <div class="cards-grid">
        <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div class="card-icon"><?php echo e($stat['icon']); ?></div>
                <h3><?php echo e($stat['title']); ?></h3>
                <p><?php echo e($stat['desc']); ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/pratyaksh/Desktop/untitled folder/cleanearth/resources/views/pages/about.blade.php ENDPATH**/ ?>