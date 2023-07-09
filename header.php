<!doctype html>
<html>
    <head>
        <title>Getting Started</title>
        <?php wp_head(); ?>
        </head>
   <body>
   
    <header>
        <div class="top-header">
            <div class="logo">
                <a href="<?php echo site_url(''); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo">
                </a>
            </div>

            <div class="search-field">
                <form>
                    <input class="search" type="search" placeholder="Enter City / Postal Code">
                    <button
                        type="submit"
                        style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/search-icon.svg')">
                        Search
                    </button>
                </form>
            </div>

            <div class="header-cta">
                <div class="phone">
                    <img class="phone-logo" src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" alt="phone">
                    <a class="phone-number" href="tel:+1226-370-0170">+1 226-370-0170</a>
                </div>
    
                <div class="book-online-button" role="button">
                <img class="phone-logo" src="<?php echo get_template_directory_uri(); ?>/img/settings-icon.svg" alt="phone">
                    <p class="buton-text">Book online</p>
                </div>
            </div>
        </div>
        <nav>
            <div class="menu">
                <ul class="menu-list">
                    <li><a class="menu-list-text" href="<?php echo site_url('appliance-service'); ?>">Appliance Service</a></li>
                    <li><a class="menu-list-text" href="<?php echo site_url('brands'); ?>">Brands</a></li>
                    <li><a class="menu-list-text" href="<?php echo site_url('maintance-plans'); ?>">Maintance Plans</a></li>
                    <li><a class="menu-list-text" href="<?php echo site_url('appliance-service'); ?>">Coupons</a></li>
                    <li><a class="menu-list-text" href="<?php echo site_url('appliance-service'); ?>">Reviews</a></li>
                    <li><a class="menu-list-text" href="<?php echo site_url('appliance-service'); ?>">About</a></li>
                    <li><a class="menu-list-text" href="<?php echo site_url('appliance-service'); ?>">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>