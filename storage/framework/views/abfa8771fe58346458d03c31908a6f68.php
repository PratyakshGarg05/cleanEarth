<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title>CleanEarth — <?php echo $__env->yieldContent('title', 'Waste Management Solutions'); ?></title>

    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />

    
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" />

    
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>

    
    <nav class="navbar">
        <a class="nav-logo" href="<?php echo e(route('home')); ?>">
            Clean<span>Earth</span>
        </a>

        <div class="nav-links">
            <a href="<?php echo e(route('home')); ?>"
               class="<?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">
                Home
            </a>
            <a href="<?php echo e(route('about')); ?>"
               class="<?php echo e(request()->routeIs('about') ? 'active' : ''); ?>">
                About
            </a>
            <a href="<?php echo e(route('solutions')); ?>"
               class="<?php echo e(request()->routeIs('solutions') ? 'active' : ''); ?>">
                Solutions
            </a>
            <a href="<?php echo e(route('awareness')); ?>"
               class="<?php echo e(request()->routeIs('awareness') ? 'active' : ''); ?>">
                Awareness
            </a>
            <a href="<?php echo e(route('contact')); ?>"
               class="nav-cta <?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>">
                Contact Us
            </a>
        </div>
    </nav>

    
    <main class="page-wrapper">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    
    <footer class="site-footer">
        <div class="footer-grid">

            <div class="footer-brand">
                <a class="footer-logo" href="<?php echo e(route('home')); ?>">
                    Clean<span>Earth</span>
                </a>
                <p>A student research project on waste segregation, responsible disposal,
                   and improved sanitation systems — building a blueprint for sustainable
                   community health.</p>
            </div>

            <div class="footer-col">
                <h5>Pages</h5>
                <ul>
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li><a href="<?php echo e(route('about')); ?>">About</a></li>
                    <li><a href="<?php echo e(route('solutions')); ?>">Solutions</a></li>
                    <li><a href="<?php echo e(route('awareness')); ?>">Awareness</a></li>
                    <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h5>Solutions</h5>
                <ul>
                    <li><a href="<?php echo e(route('solutions')); ?>#segregation">Waste Segregation</a></li>
                    <li><a href="<?php echo e(route('solutions')); ?>#disposal">Disposal Methods</a></li>
                    <li><a href="<?php echo e(route('solutions')); ?>#sanitation">Sanitation Systems</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h5>Resources</h5>
                <ul>
                    <li><a href="https://sdgs.un.org/goals/goal6" target="_blank">UN SDG Goal 6</a></li>
                    <li><a href="https://www.who.int/health-topics/sanitation" target="_blank">WHO Guidelines</a></li>
                    <li><a href="https://www.unep.org" target="_blank">UNEP Reports</a></li>
                    <li><a href="<?php echo e(route('contact')); ?>">Contact Us</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <span class="copy">
                &copy; <?php echo e(date('Y')); ?> CleanEarth Project — Environmental Studies Class Project
            </span>
            <div class="badges">
                <span class="badge">🌿 Eco Conscious</span>
                <span class="badge">♻️ Sustainable</span>
                <span class="badge">🎓 Academic Research</span>
            </div>
        </div>
    </footer>

    
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

    
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH /Users/pratyaksh/Desktop/untitled folder/cleanearth/resources/views/layouts/app.blade.php ENDPATH**/ ?>