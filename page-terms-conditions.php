<?php
/*
Template Name: Terms & Conditions
*/
get_header();
?>

<div class="policy-page-container">
    <div class="policy-header">
        <h1><i class="fas fa-file-contract"></i> Terms & Conditions</h1>
        <p class="subtitle">By accessing or using our website, ordering products, or placing an order, you agree to the following terms.</p>
        <p class="text-muted mt-3">Last Updated: <?php echo date('F j, Y'); ?></p>
    </div>

    <div class="policy-content">
        <div class="terms-toc">
            <h3><i class="fas fa-list-alt"></i> Table of Contents</h3>
            <ul class="toc-list">
                <li><a href="#website-usage">1. Website Usage</a></li>
                <li><a href="#product-type">2. Product Type</a></li>
                <li><a href="#pricing">3. Pricing</a></li>
                <li><a href="#payment">4. Payment</a></li>
                <li><a href="#order-confirmation">5. Order Confirmation</a></li>
                <li><a href="#customer-responsibility">6. Customer Responsibility</a></li>
                <li><a href="#electronics">7. Electrical & Electronic Items</a></li>
                <li><a href="#delivery">8. Delivery Timeline</a></li>
                <li><a href="#cancellation">9. Order Cancellation</a></li>
                <li><a href="#updates">10. Policy Updates</a></li>
            </ul>
        </div>

        <div class="terms-section" id="website-usage">
            <h2>1. Website Usage</h2>
            <div class="terms-list">
                <p>The website is intended for <strong>limited personal use only</strong>.</p>
                <p>Any fraudulent or illegal listing is strictly prohibited. Violators may face account suspension and legal action.</p>
            </div>
        </div>

        <div class="terms-section" id="product-type">
            <h2>2. Product Type</h2>
            <div class="terms-list">
                <p>We specialize in <strong>used and semi-used products</strong>.</p>
                <p>Sellers must provide detailed and accurate descriptions including:</p>
                <ul>
                    <li>Product condition</li>
                    <li>Usage history</li>
                    <li>Any defects or issues</li>
                    <li>Accessories included</li>
                </ul>
            </div>
        </div>

        <div class="terms-section" id="pricing">
            <h2>3. Pricing</h2>
            <div class="terms-list">
                <p>We attempt to display all product prices and information as accurately as possible.</p>
                <div class="alert alert-warning mt-3">
                    <i class="fas fa-exclamation-triangle"></i> Minor updates or human errors may occur. We reserve the right to correct any errors.
                </div>
            </div>
        </div>

        <div class="terms-section" id="payment">
            <h2>4. Payment</h2>
            <div class="terms-list">
                <p>Price and payment methods are defined within the website listing.</p>
                <p>Payment options available:</p>
                <ul>
                    <li>Cash on Delivery (COD)</li>
                    <li>bKash</li>
                    <li>Bank Transfer</li>
                </ul>
                <p>In certain cases, negotiated terms or bulk deals will be communicated separately.</p>
            </div>
        </div>

        <div class="terms-section" id="order-confirmation">
            <h2>5. Order Confirmation</h2>
            <div class="terms-list">
                <p>Orders are confirmed only after payment before delivery.</p>
                <div class="alert alert-info">
                    <i class="fas fa-info-circle"></i> Before confirmation, items are not reserved. First come, first served basis applies.
                </div>
            </div>
        </div>

        <div class="terms-section" id="customer-responsibility">
            <h2>6. Customer Responsibility</h2>
            <div class="terms-list">
                <p>Customers must verify:</p>
                <ul>
                    <li>Product condition at delivery</li>
                    <li>Delivery information accuracy</li>
                    <li>Payment details</li>
                </ul>
                <div class="alert alert-danger mt-3">
                    <i class="fas fa-ban"></i> No claims accepted after final delivery completion.
                </div>
            </div>
        </div>

        <div class="terms-section" id="electronics">
            <h2>7. Electrical & Electronic Items</h2>
            <div class="terms-list">
                <p>Customers are <strong>strongly advised</strong> to:</p>
                <ul>
                    <li>Inspect the item at the time of delivery or pickup</li>
                    <li>Test functionality before accepting delivery</li>
                    <li>Report any issues immediately</li>
                </ul>
                <p>Functional issues must be reported immediately upon delivery.</p>
            </div>
        </div>

        <div class="terms-section" id="delivery">
            <h2>8. Delivery Timeline</h2>
            <div class="delivery-info">
                <div class="delivery-card">
                    <h4><i class="fas fa-shipping-fast"></i> Regular Delivery</h4>
                    <p><strong>1–3 working days</strong> after order confirmation</p>
                </div>
                <div class="alert alert-warning mt-3">
                    <i class="fas fa-exclamation-circle"></i> Exceptions may occur due to external conditions including weather, holidays, or logistics issues.
                </div>
            </div>
        </div>

        <div class="terms-section" id="cancellation">
            <h2>9. Order Cancellation</h2>
            <div class="terms-list">
                <ul>
                    <li>Orders may be cancelled before dispatch without penalty</li>
                    <li>After dispatch, cancellation may incur delivery charges</li>
                    <li>Refunds for cancelled orders processed within 5-7 business days</li>
                </ul>
            </div>
        </div>

        <div class="terms-section" id="updates">
            <h2>10. Policy Updates</h2>
            <div class="terms-list">
                <p>We maintain the right to modify these terms at any time without prior notice.</p>
                <p>Users are responsible for regularly reviewing the terms and conditions.</p>
                <div class="alert alert-success mt-3">
                    <i class="fas fa-bell"></i> Continued use of the service after changes constitutes acceptance of modified terms.
                </div>
            </div>
        </div>

        <div class="contact-section text-center mt-5 p-4 bg-light rounded">
            <h3><i class="fas fa-question-circle"></i> Questions About Our Terms?</h3>
            <p>Contact our legal team for clarification</p>
            <a href="/contact-us" class="policy-button">
                <i class="fas fa-envelope"></i> Contact Us
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>