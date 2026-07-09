jQuery(document).ready(function($) {
    // Sell product form submission
    $('#sell-product-form').on('submit', function(e) {
        e.preventDefault();
        
        var form = $(this);
        var submitBtn = form.find('button[type="submit"]');
        var originalText = submitBtn.html();
        
        // Show loading state
        submitBtn.prop('disabled', true);
        submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Submitting...');
        
        // Clear previous messages
        $('#form-message').removeClass('alert-success alert-danger').html('');
        
        // Create FormData object
        var formData = new FormData(this);
        
        // Send AJAX request
        $.ajax({
            url: unixhub_ajax.ajax_url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Show success message
                    $('#form-message').addClass('alert alert-success').html(
                        '<i class="fas fa-check-circle"></i> ' + response.data.message
                    );
                    
                    // Reset form
                    form[0].reset();
                    
                    // Redirect after 3 seconds
                    setTimeout(function() {
                        window.location.href = response.data.redirect;
                    }, 3000);
                } else {
                    // Show error message
                    $('#form-message').addClass('alert alert-danger').html(
                        '<i class="fas fa-exclamation-circle"></i> ' + response.data.message
                    );
                }
            },
            error: function() {
                $('#form-message').addClass('alert alert-danger').html(
                    '<i class="fas fa-exclamation-circle"></i> Network error. Please try again.'
                );
            },
            complete: function() {
                // Reset button state
                submitBtn.prop('disabled', false);
                submitBtn.html(originalText);
            }
        });
    });
    
    // Image preview for file upload
    $('#product_images').on('change', function() {
        var files = $(this)[0].files;
        var previewContainer = $('#image-preview');
        
        if (!previewContainer.length) {
            $(this).after('<div id="image-preview" class="mt-3 row"></div>');
            previewContainer = $('#image-preview');
        }
        
        previewContainer.empty();
        
        for (var i = 0; i < files.length && i < 5; i++) {
            var file = files[i];
            var reader = new FileReader();
            
            reader.onload = (function(file) {
                return function(e) {
                    var preview = $('<div class="col-3 mb-3">' +
                        '<div class="image-preview-item">' +
                        '<img src="' + e.target.result + '" class="img-fluid rounded">' +
                        '</div></div>');
                    previewContainer.append(preview);
                };
            })(file);
            
            reader.readAsDataURL(file);
        }
    });
});
function unixhub_enqueue_scripts() {
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true);
}
add_action('wp_enqueue_scripts', 'unixhub_enqueue_scripts');