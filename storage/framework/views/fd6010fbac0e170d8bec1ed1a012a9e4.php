<?php $__env->startSection('title', 'Solutions — CleanEarth'); ?>

<?php $__env->startSection('content'); ?>


<div class="solutions-hero">
    <span class="section-label">Core Solutions</span>
    <h1>Practical Strategies for <span>Sustainable Waste Management</span></h1>
    <p>Evidence-based, implementable solutions across segregation, disposal, and sanitation — designed for communities of all sizes.</p>
</div>


<div class="solutions-tabs">
    <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <button class="tab-btn <?php echo e($i === 0 ? 'active' : ''); ?>"
                onclick="showTab('<?php echo e($tab['id']); ?>', this)">
            <?php echo e($tab['label']); ?>

        </button>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="tab-content <?php echo e($i === 0 ? 'active' : ''); ?>" id="tab-<?php echo e($tab['id']); ?>">
        <div class="sol-layout">

            
            <div class="sol-info">
                <h2><?php echo e($tab['title']); ?></h2>
                <?php $__currentLoopData = $tab['intro']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $para): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($para); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="steps-list">
                    <?php $__currentLoopData = $tab['steps']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="step">
                            <div class="step-num"><?php echo e($step['num']); ?></div>
                            <div class="step-txt">
                                <strong><?php echo e($step['title']); ?></strong>
                                <span><?php echo e($step['desc']); ?></span>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            
            <div class="sol-visual">
                <h3><?php echo e($tab['facts_title']); ?></h3>
                <?php $__currentLoopData = $tab['facts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="fact-pill">
                        <strong><?php echo e($fact['title']); ?></strong>
                        <?php echo e($fact['desc']); ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
function showTab(id, btn) {
    document.querySelectorAll('.tab-content').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    document.getElementById('tab-' + id).classList.add('active');
    if (btn) btn.classList.add('active');
}
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/pratyaksh/Desktop/untitled folder/cleanearth/resources/views/pages/solutions.blade.php ENDPATH**/ ?>