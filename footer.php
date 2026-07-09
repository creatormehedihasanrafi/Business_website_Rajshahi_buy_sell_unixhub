    </main><!-- .site-content -->
    
    <!-- Footer Start -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-widget">
                        <h3>UniXHub</h3>
                        <p>Campus & City Buy–Sell Marketplace</p>
                        <p>Connecting buyers and sellers across Bangladesh</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-widget">
                        <h3>Quick Links</h3>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'container' => false,
                            'menu_class' => 'footer-menu',
                            'fallback_cb' => false
                        ));
                        ?>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-widget">
                        <h3>Contact Us</h3>
                        <p><i class="fas fa-envelope"></i> contact@unixhub.com.bd</p>
                        <p><i class="fas fa-phone"></i> +880 XXXX XXXXXX</p>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> UniXHub. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    
    <?php wp_footer(); ?>
</body>
</html>