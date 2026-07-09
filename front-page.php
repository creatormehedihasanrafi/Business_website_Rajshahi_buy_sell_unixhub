<?php
/**
 * Template Name: Home Page - Premium
 * Template Post Type: page
 */

get_header();
?>

<!-- Top Announcement Bar -->
<div class="announcement-bar">
    <div class="container">
        <div class="announcement-content">
            <span class="announcement-badge">NEW</span>
            <span>🎓 Student Special: Extra 10% off on all orders above ৳1000! Use code: <strong>STUDENT10</strong></span>
        </div>
    </div>
</div>

<!-- Main Container -->
<div class="container main-container">
    <div class="row">
        <!-- Left Sidebar - Categories -->
        <div class="col-lg-3 d-none d-lg-block">
            <div class="sidebar-categories">
                <h3 class="sidebar-title"><i class="fas fa-bars"></i> All Categories</h3>
                <ul class="category-list">
                    <?php
                    $main_categories = array(
                        array('name' => 'Furniture & Home', 'icon' => 'chair', 'count' => '125'),
                        array('name' => 'Electronics', 'icon' => 'laptop', 'count' => '89'),
                        array('name' => 'Books & Stationery', 'icon' => 'book', 'count' => '248'),
                        array('name' => 'Fashion & Clothing', 'icon' => 'tshirt', 'count' => '156'),
                        array('name' => 'Sports & Fitness', 'icon' => 'dumbbell', 'count' => '67'),
                        array('name' => 'Kitchen & Dining', 'icon' => 'utensils', 'count' => '93'),
                        array('name' => 'Mobile & Accessories', 'icon' => 'mobile-alt', 'count' => '112'),
                        array('name' => 'Hostel Essentials', 'icon' => 'home', 'count' => '78'),
                        array('name' => 'Study Materials', 'icon' => 'graduation-cap', 'count' => '201'),
                        array('name' => 'Bicycles & Vehicles', 'icon' => 'bicycle', 'count' => '34'),
                        array('name' => 'Entertainment', 'icon' => 'tv', 'count' => '45'),
                        array('name' => 'Health & Beauty', 'icon' => 'heart', 'count' => '56')
                    );
                    
                    foreach ($main_categories as $cat) {
                        echo '<li>';
                        echo '<a href="#">';
                        echo '<i class="fas fa-' . $cat['icon'] . '"></i>';
                        echo '<span class="category-name">' . $cat['name'] . '</span>';
                        echo '<span class="category-count">(' . $cat['count'] . ')</span>';
                        echo '<i class="fas fa-chevron-right"></i>';
                        echo '</a>';
                        echo '</li>';
                    }
                    ?>
                </ul>
            </div>
            
            <!-- Special Offers Sidebar -->
            <div class="sidebar-offers mt-4">
                <h4 class="offer-title"><i class="fas fa-gift"></i> Student Specials</h4>
                <div class="offer-item">
                    <div class="offer-badge">50% OFF</div>
                    <p>Textbooks & References</p>
                    <small>For RU, RUET Students</small>
                </div>
                <div class="offer-item">
                    <div class="offer-badge">Buy 1 Get 1</div>
                    <p>Stationery Items</p>
                    <small>Limited Time Offer</small>
                </div>
                <div class="offer-item">
                    <div class="offer-badge">Free Delivery</div>
                    <p>On orders above ৳2000</p>
                    <small>Within Rajshahi</small>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="col-lg-9">
            <!-- Hero Slider with Banner Ads -->
            <div class="row mb-4">
                <div class="col-lg-9">
                    <div class="hero-slider-container">
                        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
                                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3"></button>
                            </div>
                            
                            <div class="carousel-inner">
                                <!-- Slide 1 -->
                                <div class="carousel-item active">
                                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="d-block w-100" alt="Student Special">
                                    <div class="carousel-caption">
                                        <div class="slide-tag">Limited Time</div>
                                        <h2>Up to 70% OFF</h2>
                                        <p>University Essentials Mega Sale</p>
                                        <a href="#" class="btn btn-danger btn-lg">Shop Now</a>
                                    </div>
                                </div>
                                
                                <!-- Slide 2 -->
                                <div class="carousel-item">
                                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="d-block w-100" alt="Hostel Sale">
                                    <div class="carousel-caption">
                                        <div class="slide-tag">Hot Deal</div>
                                        <h2>Hostel Leaving Season</h2>
                                        <p>Complete Room Packages 60% OFF</p>
                                        <a href="#" class="btn btn-warning btn-lg">View Combos</a>
                                    </div>
                                </div>
                                
                                <!-- Slide 3 -->
                                <div class="carousel-item">
                                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="d-block w-100" alt="Electronics">
                                    <div class="carousel-caption">
                                        <div class="slide-tag">Flash Sale</div>
                                        <h2>Summer Electronics</h2>
                                        <p>Fans, Coolers & AC at Best Prices</p>
                                        <a href="#" class="btn btn-primary btn-lg">Cool Deals</a>
                                    </div>
                                </div>
                                
                                <!-- Slide 4 -->
                                <div class="carousel-item">
                                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="d-block w-100" alt="Books">
                                    <div class="carousel-caption">
                                        <div class="slide-tag">Semester Offer</div>
                                        <h2>Textbooks Sale</h2>
                                        <p>All University Books 50% OFF</p>
                                        <a href="#" class="btn btn-success btn-lg">Browse Books</a>
                                    </div>
                                </div>
                            </div>
                            
                            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="side-banners">
                        <div class="side-banner mb-3">
                            <img src="https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Ad 1">
                            <div class="banner-overlay">
                                <h5>Special Combo</h5>
                                <p>Table + Chair Set</p>
                                <span class="price">৳3,999</span>
                            </div>
                        </div>
                        <div class="side-banner">
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Ad 2">
                            <div class="banner-overlay">
                                <h5>Mobile Deals</h5>
                                <p>Starting from ৳8,999</p>
                                <span class="badge bg-danger">25% OFF</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Flash Sale Timer -->
            <div class="flash-sale-timer mb-4">
                <div class="flash-header">
                    <div class="flash-title">
                        <i class="fas fa-bolt text-danger"></i>
                        <h3>Flash Sale</h3>
                        <span class="badge bg-danger">Ending Soon</span>
                    </div>
                    <a href="#" class="view-all-link">View All <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="countdown-container">
                    <div class="countdown-label">Sale Ends In:</div>
                    <div class="countdown-timer">
                        <div class="time-box">
                            <span class="time-value">02</span>
                            <span class="time-label">HOURS</span>
                        </div>
                        <div class="time-separator">:</div>
                        <div class="time-box">
                            <span class="time-value">45</span>
                            <span class="time-label">MINUTES</span>
                        </div>
                        <div class="time-separator">:</div>
                        <div class="time-box">
                            <span class="time-value">30</span>
                            <span class="time-label">SECONDS</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Flash Sale Products -->
            <div class="flash-products mb-5">
                <div class="row">
                    <?php
                    $flash_products = array(
                        array('name' => 'Casio Calculator fx-991EX', 'price' => '1200', 'original' => '1500', 'discount' => '20', 'image' => 'calculator.jpg', 'tag' => 'BESTSELLER'),
                        array('name' => 'Study Table with Drawer', 'price' => '3500', 'original' => '4500', 'discount' => '22', 'image' => 'table.jpg', 'tag' => 'HOT'),
                        array('name' => 'Ceiling Fan 56"', 'price' => '2800', 'original' => '3500', 'discount' => '20', 'image' => 'fan.jpg', 'tag' => 'LIMITED'),
                        array('name' => 'Hostel Bed Set', 'price' => '6500', 'original' => '8500', 'discount' => '24', 'image' => 'bed.jpg', 'tag' => 'COMBO')
                    );
                    
                    foreach ($flash_products as $product) {
                        $discount_amount = $product['original'] - $product['price'];
                    ?>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="flash-product-card">
                            <div class="product-badge"><?php echo $product['tag']; ?></div>
                            <div class="product-image">
                                <img src="https://images.unsplash.com/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                                <div class="discount-badge"><?php echo $product['discount']; ?>% OFF</div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-title"><?php echo $product['name']; ?></h5>
                                <div class="product-pricing">
                                    <div class="current-price">৳<?php echo number_format($product['price']); ?></div>
                                    <div class="original-price">৳<?php echo number_format($product['original']); ?></div>
                                    <div class="save-amount">Save ৳<?php echo number_format($discount_amount); ?></div>
                                </div>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                                </div>
                                <div class="sold-text">Sold: 45/60</div>
                                <button class="btn btn-danger btn-sm w-100 mt-2">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <!-- Category Banners -->
            <div class="category-banners mb-5">
                <h3 class="section-title mb-4"><i class="fas fa-layer-group"></i> Shop by Category</h3>
                <div class="row">
                    <?php
                    $category_banners = array(
                        array('name' => 'Furniture', 'icon' => 'chair', 'color' => '#4CAF50', 'items' => '125+ Products'),
                        array('name' => 'Electronics', 'icon' => 'laptop', 'color' => '#2196F3', 'items' => '89+ Products'),
                        array('name' => 'Books', 'icon' => 'book', 'color' => '#FF9800', 'items' => '248+ Products'),
                        array('name' => 'Fashion', 'icon' => 'tshirt', 'color' => '#E91E63', 'items' => '156+ Products'),
                        array('name' => 'Sports', 'icon' => 'dumbbell', 'color' => '#9C27B0', 'items' => '67+ Products'),
                        array('name' => 'Kitchen', 'icon' => 'utensils', 'color' => '#FF5722', 'items' => '93+ Products')
                    );
                    
                    foreach ($category_banners as $category) {
                    ?>
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                        <a href="#" class="category-banner-card">
                            <div class="category-icon" style="background-color: <?php echo $category['color']; ?>20;">
                                <i class="fas fa-<?php echo $category['icon']; ?>" style="color: <?php echo $category['color']; ?>;"></i>
                            </div>
                            <h6><?php echo $category['name']; ?></h6>
                            <small><?php echo $category['items']; ?></small>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <!-- Featured Products -->
            <div class="featured-products mb-5">
                <div class="section-header">
                    <h3 class="section-title"><i class="fas fa-star"></i> Featured Products</h3>
                    <div class="section-tabs">
                        <button class="tab-btn active" data-tab="all">All</button>
                        <button class="tab-btn" data-tab="trending">Trending</button>
                        <button class="tab-btn" data-tab="new">New Arrivals</button>
                        <button class="tab-btn" data-tab="best">Best Sellers</button>
                    </div>
                </div>
                
                <div class="tab-content">
                    <div class="row">
                        <?php
                        $featured_products = array(
                            array(
                                'name' => 'Apple MacBook Pro 2020',
                                'category' => 'Electronics',
                                'price' => '65000',
                                'original' => '85000',
                                'discount' => '24',
                                'rating' => '4.5',
                                'reviews' => '24',
                                'location' => 'Rajshahi',
                                'time' => '2 days ago',
                                'image' => 'photo-1517336714731-489689fd1ca8',
                                'tag' => 'Verified'
                            ),
                            array(
                                'name' => 'Wooden Study Table with Drawer',
                                'category' => 'Furniture',
                                'price' => '3500',
                                'original' => '4500',
                                'discount' => '22',
                                'rating' => '4.2',
                                'reviews' => '18',
                                'location' => 'RU Area',
                                'time' => '1 day ago',
                                'image' => 'photo-1555041469-a586c61ea9bc',
                                'tag' => 'Student Choice'
                            ),
                            array(
                                'name' => 'Samsung Galaxy A52 8/128GB',
                                'category' => 'Electronics',
                                'price' => '18500',
                                'original' => '22000',
                                'discount' => '16',
                                'rating' => '4.7',
                                'reviews' => '31',
                                'location' => 'Rajshahi City',
                                'time' => '6 hours ago',
                                'image' => 'photo-1511707171634-5f897ff02aa9',
                                'tag' => 'Limited Stock'
                            ),
                            array(
                                'name' => 'Nike Running Shoes Size 42',
                                'category' => 'Sports',
                                'price' => '2200',
                                'original' => '3000',
                                'discount' => '27',
                                'rating' => '4.3',
                                'reviews' => '15',
                                'location' => 'RU Area',
                                'time' => '4 days ago',
                                'image' => 'photo-1542291026-7eec264c27ff',
                                'tag' => 'Popular'
                            ),
                            array(
                                'name' => 'Hostel Leaving Combo Package',
                                'category' => 'Furniture',
                                'price' => '6500',
                                'original' => '8500',
                                'discount' => '24',
                                'rating' => '4.8',
                                'reviews' => '42',
                                'location' => 'Medical Area',
                                'time' => '2 days ago',
                                'image' => 'photo-1586023492125-27b2c045efd7',
                                'tag' => 'Combo Offer'
                            ),
                            array(
                                'name' => 'CSE 3rd Year Complete Book Set',
                                'category' => 'Books',
                                'price' => '1500',
                                'original' => '2500',
                                'discount' => '40',
                                'rating' => '4.6',
                                'reviews' => '28',
                                'location' => 'RU Campus',
                                'time' => '1 week ago',
                                'image' => 'photo-1544716278-ca5e3f4abd8c',
                                'tag' => 'Hot Deal'
                            )
                        );
                        
                        foreach ($featured_products as $product) {
                        ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="product-card">
                                <div class="product-tag"><?php echo $product['tag']; ?></div>
                                <div class="product-image">
                                    <img src="https://images.unsplash.com/<?php echo $product['image']; ?>?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="<?php echo $product['name']; ?>">
                                    <div class="wishlist-btn">
                                        <i class="far fa-heart"></i>
                                    </div>
                                    <div class="discount-circle"><?php echo $product['discount']; ?>% OFF</div>
                                </div>
                                <div class="product-info">
                                    <div class="product-category"><?php echo $product['category']; ?></div>
                                    <h5 class="product-title"><?php echo $product['name']; ?></h5>
                                    
                                    <div class="product-rating">
                                        <div class="stars">
                                            <?php
                                            $full_stars = floor($product['rating']);
                                            $half_star = ($product['rating'] - $full_stars) >= 0.5;
                                            for($i = 1; $i <= 5; $i++) {
                                                if($i <= $full_stars) {
                                                    echo '<i class="fas fa-star"></i>';
                                                } elseif($half_star && $i == $full_stars + 1) {
                                                    echo '<i class="fas fa-star-half-alt"></i>';
                                                } else {
                                                    echo '<i class="far fa-star"></i>';
                                                }
                                            }
                                            ?>
                                        </div>
                                        <span class="rating-value"><?php echo $product['rating']; ?></span>
                                        <span class="reviews">(<?php echo $product['reviews']; ?>)</span>
                                    </div>
                                    
                                    <div class="product-pricing">
                                        <div class="price-current">৳<?php echo number_format($product['price']); ?></div>
                                        <div class="price-original">৳<?php echo number_format($product['original']); ?></div>
                                    </div>
                                    
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i> <?php echo $product['location']; ?></span>
                                        <span><i class="fas fa-clock"></i> <?php echo $product['time']; ?></span>
                                    </div>
                                    
                                    <div class="product-actions">
                                        <button class="btn btn-outline-primary btn-sm">
                                            <i class="fas fa-shopping-cart"></i> Add to Cart
                                        </button>
                                        <button class="btn btn-primary btn-sm">
                                            Buy Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!-- Banner Ad -->
            <div class="promo-banner mb-5">
                <div class="promo-content">
                    <h2>Student Exclusive: Free Delivery!</h2>
                    <p>On all orders above ৳1000 within Rajshahi University Area</p>
                    <button class="btn btn-light">Learn More</button>
                </div>
            </div>

            <!-- University Specific Deals -->
            <div class="university-deals mb-5">
                <h3 class="section-title mb-4"><i class="fas fa-university"></i> University Specific Deals</h3>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="uni-card ru-card">
                            <div class="uni-header">
                                <div class="uni-logo">RU</div>
                                <h5>University of Rajshahi</h5>
                            </div>
                            <ul class="uni-deals">
                                <li><i class="fas fa-book"></i> Semester Books 50% OFF</li>
                                <li><i class="fas fa-chair"></i> Hostel Furniture Packages</li>
                                <li><i class="fas fa-laptop"></i> Electronics Specials</li>
                            </ul>
                            <button class="btn btn-outline-light">Browse RU Deals</button>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <div class="uni-card ruet-card">
                            <div class="uni-header">
                                <div class="uni-logo">RUET</div>
                                <h5>RUET Students</h5>
                            </div>
                            <ul class="uni-deals">
                                <li><i class="fas fa-calculator"></i> Engineering Calculators</li>
                                <li><i class="fas fa-tools"></i> Lab Equipment</li>
                                <li><i class="fas fa-book"></i> Reference Books</li>
                            </ul>
                            <button class="btn btn-outline-light">Browse RUET Deals</button>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <div class="uni-card rmc-card">
                            <div class="uni-header">
                                <div class="uni-logo">RMC</div>
                                <h5>Medical College</h5>
                            </div>
                            <ul class="uni-deals">
                                <li><i class="fas fa-stethoscope"></i> Medical Equipment</li>
                                <li><i class="fas fa-book-medical"></i> Medical Books</li>
                                <li><i class="fas fa-home"></i> Hostel Essentials</li>
                            </ul>
                            <button class="btn btn-outline-light">Browse RMC Deals</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recently Viewed -->
            <div class="recently-viewed mb-5">
                <h3 class="section-title mb-4"><i class="fas fa-history"></i> Recently Viewed</h3>
                <div class="row">
                    <?php
                    $recent_products = array(
                        array('name' => 'Wall Clock', 'price' => '450', 'image' => 'photo-1494173853739-c21f58b16055'),
                        array('name' => 'Backpack', 'price' => '850', 'image' => 'photo-1553062407-98eeb64c6a62'),
                        array('name' => 'Water Bottle', 'price' => '350', 'image' => 'photo-1523362628745-0c100150b504'),
                        array('name' => 'Desk Lamp', 'price' => '650', 'image' => 'photo-1507473885765-e6ed057f782c'),
                        array('name' => 'Notebook Set', 'price' => '280', 'image' => 'photo-1544716278-ca5e3f4abd8c'),
                        array('name' => 'Phone Stand', 'price' => '220', 'image' => 'photo-1546054452-4f5c0e59b9b2')
                    );
                    
                    foreach ($recent_products as $product) {
                    ?>
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                        <div class="recent-product-card">
                            <img src="https://images.unsplash.com/<?php echo $product['image']; ?>?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="<?php echo $product['name']; ?>">
                            <h6><?php echo $product['name']; ?></h6>
                            <div class="price">৳<?php echo $product['price']; ?></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Banner -->
<div class="container-fluid footer-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4>Start Selling on UniXHub!</h4>
                <p>List your products and reach thousands of students in Rajshahi</p>
            </div>
            <div class="col-md-4 text-end">
                <button class="btn btn-warning btn-lg">Become a Seller</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Interactive Elements -->
<script>
// Countdown Timer
function updateCountdown() {
    const hours = document.querySelector('.time-box:nth-child(1) .time-value');
    const minutes = document.querySelector('.time-box:nth-child(3) .time-value');
    const seconds = document.querySelector('.time-box:nth-child(5) .time-value');
    
    let totalSeconds = 2 * 3600 + 45 * 60 + 30; // 2 hours, 45 minutes, 30 seconds
    
    const timer = setInterval(() => {
        totalSeconds--;
        
        const hrs = Math.floor(totalSeconds / 3600);
        const mins = Math.floor((totalSeconds % 3600) / 60);
        const secs = totalSeconds % 60;
        
        hours.textContent = hrs.toString().padStart(2, '0');
        minutes.textContent = mins.toString().padStart(2, '0');
        seconds.textContent = secs.toString().padStart(2, '0');
        
        if (totalSeconds <= 0) {
            clearInterval(timer);
        }
    }, 1000);
}

// Tab Switching
document.querySelectorAll('.tab-btn').forEach(button => {
    button.addEventListener('click', function() {
        // Remove active class from all buttons
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.classList.remove('active');
        });
        
        // Add active class to clicked button
        this.classList.add('active');
        
        // Here you would typically load different products based on tab
        const tab = this.getAttribute('data-tab');
        console.log('Switched to tab:', tab);
    });
});

// Initialize when page loads
document.addEventListener('DOMContentLoaded', function() {
    updateCountdown();
    
    // Add to Wishlist functionality
    document.querySelectorAll('.wishlist-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const icon = this.querySelector('i');
            if (icon.classList.contains('far')) {
                icon.classList.remove('far');
                icon.classList.add('fas');
                icon.style.color = '#ff4757';
            } else {
                icon.classList.remove('fas');
                icon.classList.add('far');
                icon.style.color = '';
            }
        });
    });
});
</script>

<?php get_footer(); ?>