<?php
/*
Template Name: Contact Us
*/

get_header();
?>

<div class="container mt-4 mb-5">
    <h1 class="page-title">Contact UniXHub</h1>
    <p class="page-subtitle">Get in touch with our team</p>
    
    <div class="row mt-4">
        <div class="col-lg-8">
            <div class="contact-form-wrapper card p-4">
                <h3 class="mb-4"><i class="fas fa-paper-plane"></i> Send us a Message</h3>
                
                <!-- Contact Form 7 Shortcode -->
                <?php echo do_shortcode('[contact-form-7 id="contact" title="Contact form"]'); ?>
                
                <!-- OR Custom Contact Form -->
                <form id="custom-contact-form" method="POST" class="contact-form">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Your Name *</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject *</label>
                        <select class="form-control" id="subject" name="subject" required>
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="support">Technical Support</option>
                            <option value="partnership">Partnership Opportunity</option>
                            <option value="report">Report an Issue</option>
                            <option value="suggestion">Feature Suggestion</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message *</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="newsletter" name="newsletter">
                            <label class="form-check-label" for="newsletter">
                                Subscribe to our newsletter for updates
                            </label>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                    
                    <div id="contact-form-message" class="mt-3"></div>
                </form>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="contact-info card p-4">
                <h3 class="mb-4"><i class="fas fa-info-circle"></i> Contact Information</h3>
                
                <div class="contact-item d-flex mb-4">
                    <div class="contact-icon">
                        <i class="fas fa-envelope text-primary"></i>
                    </div>
                    <div class="contact-details ms-3">
                        <strong>Email Address</strong>
                        <p class="mb-0">contact@unixhub.com.bd</p>
                        <p class="mb-0">support@unixhub.com.bd</p>
                    </div>
                </div>
                
                <div class="contact-item d-flex mb-4">
                    <div class="contact-icon">
                        <i class="fas fa-phone text-success"></i>
                    </div>
                    <div class="contact-details ms-3">
                        <strong>Phone Numbers</strong>
                        <p class="mb-0">+880 XXXX XXXXXX (Customer Care)</p>
                        <p class="mb-0">+880 XXXX XXXXXX (Technical Support)</p>
                    </div>
                </div>
                
                <div class="contact-item d-flex mb-4">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt text-danger"></i>
                    </div>
                    <div class="contact-details ms-3">
                        <strong>Office Address</strong>
                        <p class="mb-0">Dhaka, Bangladesh</p>
                        <small class="text-muted">(Online platform serving all of Bangladesh)</small>
                    </div>
                </div>
                
                <div class="contact-item d-flex mb-4">
                    <div class="contact-icon">
                        <i class="fas fa-clock text-warning"></i>
                    </div>
                    <div class="contact-details ms-3">
                        <strong>Business Hours</strong>
                        <p class="mb-0">Sunday - Thursday: 9:00 AM - 6:00 PM</p>
                        <p class="mb-0">Friday: 9:00 AM - 1:00 PM</p>
                        <p class="mb-0">Saturday: Closed</p>
                    </div>
                </div>
                
                <div class="contact-item d-flex">
                    <div class="contact-icon">
                        <i class="fas fa-share-alt text-info"></i>
                    </div>
                    <div class="contact-details ms-3">
                        <strong>Connect With Us</strong>
                        <div class="social-links mt-2">
                            <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="faq-cta card mt-4 p-4">
                <h4><i class="fas fa-question-circle"></i> Quick Questions?</h4>
                <p>Check our FAQ section for quick answers to common questions.</p>
                <a href="/faq" class="btn btn-outline-primary btn-block">
                    <i class="fas fa-book"></i> Visit FAQ
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Contact Form JavaScript -->
<script>
jQuery(document).ready(function($) {
    $('#custom-contact-form').on('submit', function(e) {
        e.preventDefault();
        
        var form = $(this);
        var submitBtn = form.find('button[type="submit"]');
        var originalText = submitBtn.html();
        
        // Show loading
        submitBtn.prop('disabled', true);
        submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Sending...');
        
        // Collect form data
        var formData = {
            action: 'unixhub_contact_form',
            name: $('#name').val(),
            email: $('#email').val(),
            subject: $('#subject').val(),
            message: $('#message').val(),
            newsletter: $('#newsletter').is(':checked') ? 1 : 0,
            nonce: '<?php echo wp_create_nonce("contact_form_nonce"); ?>'
        };
        
        // Send AJAX request
        $.post('<?php echo admin_url("admin-ajax.php"); ?>', formData, function(response) {
            if(response.success) {
                $('#contact-form-message').html(
                    '<div class="alert alert-success">' +
                    '<i class="fas fa-check-circle"></i> ' + response.data.message +
                    '</div>'
                );
                form[0].reset();
            } else {
                $('#contact-form-message').html(
                    '<div class="alert alert-danger">' +
                    '<i class="fas fa-exclamation-circle"></i> ' + response.data.message +
                    '</div>'
                );
            }
        }).fail(function() {
            $('#contact-form-message').html(
                '<div class="alert alert-danger">' +
                '<i class="fas fa-exclamation-circle"></i> Network error. Please try again.' +
                '</div>'
            );
        }).always(function() {
            submitBtn.prop('disabled', false);
            submitBtn.html(originalText);
        });
    });
});
</script>

<?php get_footer(); ?>