<?php $__env->startSection('title', 'Contact — CleanEarth'); ?>

<?php $__env->startSection('content'); ?>

    <div class="contact-wrapper">

        
        <div class="contact-info">
            <span class="section-label">Get In Touch</span>
            <h2>Contact Our Project Team</h2>
            <p>Have questions about our research, want to collaborate, or looking for resources
                on waste management? Reach out — we'd love to hear from you.</p>

            <div class="contact-cards">
                <div class="contact-card">
                    <div class="ic">📧</div>
                    <div>
                        <strong>Email Us</strong>
                        <span>gargpratyaksh100@gmail.com</span>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="ic">📍</div>
                    <div>
                        <strong>Location</strong>
                        <span>The Sovereign Estate Ivy Lane, Upper Dehradun</span>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="ic">📞</div>
                    <div>
                        <strong>Phone</strong>
                        <span>+91 90587 47951</span>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="ic">🕐</div>
                    <div>
                        <strong>Office Hours</strong>
                        <span>Monday – Friday, 9:00 AM – 5:00 PM</span>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="contact-form">
            <h3>Send a Message</h3>

            
            <?php if(session('success')): ?>
                <div class="success-msg" style="display:block">
                    ✅ <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            
            <?php if($errors->any()): ?>
                <div class="error-msg">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>⚠️ <?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            
            <form action="<?php echo e(route('contact.submit')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="form-row">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" value="<?php echo e(old('first_name')); ?>"
                            placeholder="e.g. Rahul" class="<?php echo e($errors->has('first_name') ? 'input-error' : ''); ?>" />
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" value="<?php echo e(old('last_name')); ?>"
                            placeholder="e.g. Sharma" class="<?php echo e($errors->has('last_name') ? 'input-error' : ''); ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="your@email.com"
                        class="<?php echo e($errors->has('email') ? 'input-error' : ''); ?>" />
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select id="subject" name="subject" class="<?php echo e($errors->has('subject') ? 'input-error' : ''); ?>">
                        <option value="">— Select a topic —</option>
                        <?php $__currentLoopData = ['General Inquiry', 'Research Collaboration', 'Educational Resources', 'Community Partnership', 'Other']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($opt); ?>" <?php echo e(old('subject') === $opt ? 'selected' : ''); ?>>
                                <?php echo e($opt); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" placeholder="Tell us how we can help..."
                        class="<?php echo e($errors->has('message') ? 'input-error' : ''); ?>"><?php echo e(old('message')); ?></textarea>
                </div>

                <button type="submit" class="submit-btn">Send Message →</button>
            </form>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/pratyaksh/Desktop/untitled folder/cleanearth/resources/views/pages/contact.blade.php ENDPATH**/ ?>