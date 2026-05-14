<?php $__env->startSection('title', 'Home — Waste Management Solutions'); ?>

<?php $__env->startSection('content'); ?>


<section class="hero">
    <div class="hero-content">
        <span class="hero-badge">🌿 Environmental Solutions Project</span>

        <h1>
            A Cleaner Earth Starts With
            <em>Smart Waste</em> Management
        </h1>

        <p>
            Discover comprehensive solutions for waste segregation, responsible disposal,
            and improved sanitation systems that create healthier, more sustainable
            communities for generations to come.
        </p>

        <div class="hero-btns">
            <a href="<?php echo e(route('solutions')); ?>" class="btn-primary">Explore Solutions</a>
            <a href="<?php echo e(route('about')); ?>"     class="btn-secondary">Learn More</a>
        </div>
    </div>

    
    <div class="hero-stats">
        <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="stat-box">
                <span class="num"><?php echo e($stat['value']); ?></span>
                <span class="lbl"><?php echo e($stat['label']); ?></span>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>


<section class="section">
    <span class="section-label">What We Address</span>
    <h2 class="section-title">Three Pillars of Waste Management</h2>
    <p class="section-sub">
        Our project focuses on actionable, community-driven solutions across three
        critical areas to tackle the growing waste crisis.
    </p>

    <div class="cards-grid">
        <?php $__currentLoopData = $pillars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pillar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div class="card-icon"><?php echo e($pillar['icon']); ?></div>
                <h3><?php echo e($pillar['title']); ?></h3>
                <p><?php echo e($pillar['desc']); ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>


<section class="section-green">
    <span class="section-label">Why It Matters</span>
    <h2 class="section-title">The Cost of Doing Nothing</h2>
    <p class="section-sub">
        Poor waste management causes water and air pollution, spreads disease, harms
        ecosystems, and contributes significantly to climate change through methane emissions.
    </p>

    <div class="cards-grid">
        <?php $__currentLoopData = $threats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $threat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card dark">
                <div class="card-icon"><?php echo e($threat['icon']); ?></div>
                <h3><?php echo e($threat['title']); ?></h3>
                <p><?php echo e($threat['desc']); ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/pratyaksh/Desktop/untitled folder/cleanearth/resources/views/pages/home.blade.php ENDPATH**/ ?>