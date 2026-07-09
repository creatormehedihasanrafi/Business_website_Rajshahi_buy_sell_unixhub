<?php
/*
Template Name: Sell Your Product
Template Post Type: page
*/

get_header();
?>

<div class="container mt-4 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 class="page-title mb-4">Sell Your Product on UniXHub</h1>
            
            <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i> Thank you! Your product has been submitted for review.
                </div>
            <?php endif; ?>
            
            <div class="sell-form-wrapper">
                <form id="sell-product-form" method="POST" enctype="multipart/form-data">
                    <?php wp_nonce_field('sell_product_action', 'sell_product_nonce'); ?>
                    
                    <!-- Product Information -->
                    <div class="form-section">
                        <h3 class="section-title">
                            <i class="fas fa-box"></i> Product Information
                        </h3>
                        
                        <div class="mb-3">
                            <label for="product_name" class="form-label">Product Name *</label>
                            <input type="text" class="form-control" id="product_name" name="product_name" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="product_description" class="form-label">Description *</label>
                            <textarea class="form-control" id="product_description" name="product_description" rows="4" required></textarea>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="product_category" class="form-label">Category *</label>
                                <select class="form-control" id="product_category" name="product_category" required>
                                    <option value="">Select Category</option>
                                    <option value="electronics">Electronics</option>
                                    <option value="books">Books & Stationery</option>
                                    <option value="clothing">Clothing & Fashion</option>
                                    <option value="furniture">Furniture</option>
                                    <option value="sports">Sports Equipment</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="product_condition" class="form-label">Condition *</label>
                                <select class="form-control" id="product_condition" name="product_condition" required>
                                    <option value="">Select Condition</option>
                                    <option value="new">New</option>
                                    <option value="used">Used - Like New</option>
                                    <option value="used_good">Used - Good</option>
                                    <option value="used_fair">Used - Fair</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pricing -->
                    <div class="form-section">
                        <h3 class="section-title">
                            <i class="fas fa-tag"></i> Pricing
                        </h3>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="original_price" class="form-label">Original Price (if known)</label>
                                <input type="number" class="form-control" id="original_price" name="original_price" min="0">
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="price_suggestion" class="form-label">Your Asking Price *</label>
                                <input type="number" class="form-control" id="price_suggestion" name="price_suggestion" min="1" required>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Location & Contact -->
                    <div class="form-section">
                        <h3 class="section-title">
                            <i class="fas fa-map-marker-alt"></i> Location & Contact
                        </h3>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="product_location" class="form-label">City *</label>
                                <select class="form-control" id="product_location" name="product_location" required>
                                    <option value="">Select City</option>
                                    <option value="dhaka">Dhaka</option>
                                    <option value="chittagong">Chittagong</option>
                                    <option value="rajshahi">Rajshahi</option>
                                    <option value="khulna">Khulna</option>
                                    <option value="sylhet">Sylhet</option>
                                    <option value="barishal">Barishal</option>
                                    <option value="rangpur">Rangpur</option>
                                    <option value="mymensingh">Mymensingh</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="contact_number" class="form-label">Contact Number *</label>
                                <input type="tel" class="form-control" id="contact_number" name="contact_number" pattern="[0-9]{11}" placeholder="01XXXXXXXXX" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="contact_email" class="form-label">Email Address *</label>
                            <input type="email" class="form-control" id="contact_email" name="contact_email" required>
                        </div>
                    </div>
                    
                    <!-- Product Images -->
                    <div class="form-section">
                        <h3 class="section-title">
                            <i class="fas fa-images"></i> Product Images
                        </h3>
                        
                        <div class="mb-3">
                            <label for="product_images" class="form-label">Upload Images (Max 5 images)</label>
                            <input type="file" class="form-control" id="product_images" name="product_images[]" multiple accept="image/*">
                            <small class="text-muted">Clear images help sell faster. First image will be the main display image.</small>
                        </div>
                    </div>
                    
                    <!-- Terms Agreement -->
                    <div class="form-section">
                        <div class="form-check mb-4">
                            <input type="checkbox" class="form-check-input" id="agree_terms" name="agree_terms" required>
                            <label class="form-check-label" for="agree_terms">
                                I agree to the <a href="<?php echo esc_url(home_url('/terms-conditions')); ?>" target="_blank">Terms & Conditions</a> and confirm that this product is legal to sell in Bangladesh.
                            </label>
                        </div>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg px-5">
                            <i class="fas fa-paper-plane"></i> Submit for Review
                        </button>
                    </div>
                </form>
                
                <div id="form-message" class="mt-3"></div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>