<?php
/*
Template Name: Refund Policy
*/
get_header();
?>

<div class="policy-page-container">
    <div class="policy-header">
        <h1><i class="fas fa-money-bill-wave"></i> Refund Policy</h1>
        <p class="subtitle">Clear guidelines for returns, refunds, and exchanges on UniXHub</p>
        <p class="text-muted mt-3">Effective Date: <?php echo date('F j, Y'); ?></p>
    </div>

    <div class="refund-banner">
        <h3><i class="fas fa-exclamation-triangle"></i> Important Notice</h3>
        <p>As our products are used and resold items, refunds are limited to specific circumstances only.</p>
        <p class="mt-2">Please read this policy carefully before making a purchase.</p>
    </div>

    <div class="policy-content">
        <div class="refund-section">
            <h4><i class="fas fa-ban"></i> 1. General Policy</h4>
            <p>Once delivery is completed, products are generally <strong>non-refundable and non-exchangeable</strong>.</p>
            <div class="refund-note">
                <i class="fas fa-info-circle"></i> This policy is in place due to the nature of second-hand products.
            </div>
        </div>

        <div class="refund-section">
            <h4><i class="fas fa-check-circle"></i> 2. Acceptable Reasons for Refund</h4>
            <p>Refunds are considered only if:</p>
            <ul class="terms-list">
                <li><strong>Major functional issue</strong> detected at delivery</li>
                <li><strong>Item significantly differs</strong> from description</li>
                <li><strong>Wrong item</strong> delivered</li>
                <li><strong>Damaged item</strong> received</li>
            </ul>
            <p class="mt-3">Then the item may be <strong>returned for a refund or replacement</strong>.</p>
        </div>

        <div class="refund-section">
            <h4><i class="fas fa-clock"></i> 3. Refund Period</h4>
            <div class="timeline-info">
                <div class="timeline-step active">
                    <div class="step-number">24h</div>
                    <div class="step-label">Eligible Period</div>
                </div>
                <p class="mt-3">Complaints made within <strong>24 hours after delivery completion</strong> will be eligible for refunds.</p>
                <div class="alert alert-danger mt-3">
                    <i class="fas fa-exclamation-circle"></i> No refund requests accepted after 24 hours of delivery.
                </div>
            </div>
        </div>

        <div class="refund-section">
            <h4><i class="fas fa-credit-card"></i> 4. Refund Method</h4>
            <div class="payment-methods">
                <div class="payment-method">
                    <i class="fas fa-university fa-2x"></i>
                    <h5>Bank Transfer</h5>
                    <p>Direct to your account</p>
                </div>
                <div class="payment-method">
                    <i class="fas fa-mobile-alt fa-2x"></i>
                    <h5>bKash</h5>
                    <p>Instant refund</p>
                </div>
                <div class="payment-method">
                    <i class="fas fa-exchange-alt fa-2x"></i>
                    <h5>Replacement</h5>
                    <p>Equivalent product</p>
                </div>
            </div>
            <p class="mt-3">Approved refunds may be issued via <strong>bank, bKash, or equivalent replacement</strong>.</p>
        </div>

        <div class="refund-section">
            <h4><i class="fas fa-truck"></i> 5. Delivery Charges</h4>
            <p>Delivery charges are <strong>non-refundable</strong> under any circumstance.</p>
            <div class="alert alert-info">
                <i class="fas fa-info-circle"></i> Even if the product is returned, delivery charges paid will not be refunded.
            </div>
        </div>

        <div class="refund-section">
            <h4><i class="fas fa-user-shield"></i> 6. Customer Negligence</h4>
            <p>We shall not be responsible for damage caused by:</p>
            <div class="responsibility-list">
                <div class="responsibility-item">
                    <i class="fas fa-times-circle text-danger"></i>
                    <span>Misuse of product</span>
                </div>
                <div class="responsibility-item">
                    <i class="fas fa-times-circle text-danger"></i>
                    <span>Mishandling after delivery</span>
                </div>
                <div class="responsibility-item">
                    <i class="fas fa-times-circle text-danger"></i>
                    <span>External electrical issues</span>
                </div>
                <div class="responsibility-item">
                    <i class="fas fa-times-circle text-danger"></i>
                    <span>Accidental damage</span>
                </div>
            </div>
        </div>

        <div class="refund-section">
            <h4><i class="fas fa-clipboard-list"></i> 7. Refund Process</h4>
            <div class="process-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h5>Report Issue</h5>
                        <p>Contact us within 24 hours of delivery</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h5>Provide Evidence</h5>
                        <p>Send photos/videos of the issue</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h5>Review & Approval</h5>
                        <p>Our team reviews within 48 hours</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h5>Refund/Replacement</h5>
                        <p>Process completed within 7 days</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-section text-center mt-5 p-4 bg-light rounded">
            <h3><i class="fas fa-headset"></i> Need Help with Refund?</h3>
            <p>Contact our support team for assistance</p>
            <a href="/contact-us" class="policy-button">
                <i class="fas fa-envelope"></i> Contact Support
            </a>
        </div>
    </div>
</div>

<style>
.process-steps {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.step {
    text-align: center;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 8px;
}

.step-number {
    width: 40px;
    height: 40px;
    background: #0288d1;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
    font-weight: bold;
}

.responsibility-list {
    display: grid;
    gap: 10px;
    margin-top: 15px;
}

.responsibility-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px;
    background: #fff3e0;
    border-radius: 5px;
}

.timeline-step {
    width: 100px;
    height: 100px;
    background: #0288d1;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    margin: 0 auto;
}

.timeline-step .step-number {
    font-size: 24px;
    font-weight: bold;
}

.timeline-step .step-label {
    font-size: 12px;
    margin-top: 5px;
}
</style>

<?php get_footer(); ?>