<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Farsan|Open+Sans:400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!-- [ SCRIPTS ] -->
    <script type="text/javascript">
      function toggleMobileNav() {
        var y = document.getElementsByClassName("glen-mobile-navigation");

        if (y[0].classList.contains("--hidden")) {
          y[0].classList.remove("--hidden");
          document.body.classList.add("u-freeze-scroll");
        } else {
          y[0].classList.add("--hidden");
          document.body.classList.remove("u-freeze-scroll");
        }
      }

      function closeMobileNav() {
        var x = document.getElementsByClassName("glen-mobile-navigation");
        x[0].classList.add("--hidden");
        document.body.classList.remove("u-freeze-scroll");
      }
    </script>
    <!-- [ FACEBOOK OG ] -->
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta property="fb:app_id" content="APP_ID_HERE" />
    <meta property="og:type" content="website" />
    <meta property="og:url"  content="http://SITE_URL_HERE" />
    <meta property="og:title" content="SITE_TITLE_HERE" />
    <meta property="og:image" content="http://moreiradevelopment.io/social/moreira-development-twitcard.png" />
    <!-- Twitter Card  -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@SAMPLE"><meta name="twitter:creator" content="@SAMPLE"><meta name="twitter:title" content="[ MOREIRA DEVELOPMENT PROJECT ] CLIENT | PROJECT "/>
    <meta name="twitter:description" content="Base Project Install"/>
    <meta name="twitter:image" content="http://moreiradevelopment.io/social/moreira-development-twitcard.png"/>
    <!-- Viewport Settings -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <!-- Chrome Browser Bar Color -->
    <meta name="theme-color" content="#fff">
    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="57x57"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-icon-180x180.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="icon" type="image/png" sizes="32x32"
      href="<?php bloginfo('template_url'); ?>/dist/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
      href="<?php bloginfo('template_url'); ?>/dist/icons/favicon-16x16.png">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/dist/icons/favicon.ico">
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-320x460.png">
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-640x920.png">
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-640x1096.png">
    <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-750x1294.png">
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 3)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-1182x2208.png">
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 3)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-1242x2148.png">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-748x1024.png">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-768x1004.png">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-1496x2048.png">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)"
      href="<?php bloginfo('template_url'); ?>/dist/icons/apple-touch-startup-image-1536x2008.png">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
		<?php wp_head(); ?>
	</head>
	<body>

  <nav class="glen-main-navigation">

    <!-- Rainbow Bar Section of Main Nav -->

    <div class="glen-rainbow-bar">
      <div class="glen-rainbow-bar-segment --yellow"></div>
      <div class="glen-rainbow-bar-segment --green"></div>
      <div class="glen-rainbow-bar-segment --blue"></div>
      <div class="glen-rainbow-bar-segment --purple"></div>
      <div class="glen-rainbow-bar-segment --red"></div>
      <div class="glen-rainbow-bar-segment --orange"></div>
      <div class="glen-rainbow-bar-segment --yellow"></div>
      <div class="glen-rainbow-bar-segment --green"></div>
      <div class="glen-rainbow-bar-segment --blue"></div>
      <div class="glen-rainbow-bar-segment --purple"></div>
      <div class="glen-rainbow-bar-segment --red"></div>
      <div class="glen-rainbow-bar-segment --orange"></div>
    </div>

    <div class="glen-main-navigation-content">
      <div class="glen-main-navigation-logo">
        <a href="/" title="Arbour Glen Home"></a>
      </div>
      <div class="glen-main-navigation-links">
        <div class="glen-main-navigation-link --dropdown --med">
          <span class="glen-main-navigation-link-label">about us&nbsp;<i class="fas fa-angle-down"></i></span>
          <div class="glen-arrow-down"></div>
          <div class="glen-main-navigation-dropdown">
            <div class="glen-main-navigation-dropdown-links">
              <a href="/welcome" title="Welcome!">Welcome</a>
              <a href="/our-vision" title="Learn more!">Our Vision</a>
              <a href="/our-team" title="Meet our team!">Our Team</a>
            </div>
          </div>
        </div>
        <div class="glen-main-navigation-link --dropdown --largo">
          <span class="glen-main-navigation-link-label">our programs&nbsp;<i class="fas fa-angle-down"></i></span>
          <div class="glen-arrow-down"></div>
          <div class="glen-main-navigation-dropdown">
            <div class="glen-main-navigation-dropdown-links">
              <a href="/infants-program" title="Learn more about our infants program">Infants</a>
              <a href="/toddlers-program" title="Learn more about our toddlers program">Toddlers</a>
              <a href="/preschoolers-program" title="Learn more about our preschoolers program">Preschoolers</a>
            </div>
          </div>
        </div>
        <div class="glen-main-navigation-link --med">
          <a class="glen-main-navigation-link-label" href="/our-menus" title="Read our menus!">our menus</a>
        </div>
        <div class="glen-main-navigation-link --smol">
          <a class="glen-main-navigation-link-label" href="/faq" title="Frequently Asked Questions">faq</a>
        </div>
        <div class="glen-main-navigation-link --largossa">
          <a class="glen-main-navigation-link-label" href="/" title="Download our Handbook">parent handbook</a>
        </div>
        <div class="glen-main-navigation-link">
          <a class="glen-main-navigation-link-label" href="/contact" title="Visit our Contact page">get in touch</a>
        </div>
      </div>
      <div class="glen-main-navigation-socials">
        <a class="fab fa-facebook" href="/" title="Visit our Facebook page"></a>
        <a class="fab fa-instagram" href="/" title="Visit our Instagram"></a>
      </div>
      <div class="glen-main-navigation-hamburger" onclick="toggleMobileNav()">
        <i class="fas fa-bars"></i>
      </div>
    </div>
    <div class="glen-crocodilo"></div>
    
    <!-- The following PHP is commented out on purpose, AW -->

    <?php
      // $args = array ( 'theme_location' => 'primary_navigation')
    ?>

    <?php
      // wp_nav_menu($args);
    ?>

    <!-- End of commented out PHP, AW -->
  </nav>

  <div class="glen-mobile-navigation --hiddenx">
    <!-- Mobile Nav Head -->
    <div class="glen-mobile-navigation-head">
      <div class="glen-rainbow-bar">
        <div class="glen-rainbow-bar-segment --yellow"></div>
        <div class="glen-rainbow-bar-segment --green"></div>
        <div class="glen-rainbow-bar-segment --blue"></div>
        <div class="glen-rainbow-bar-segment --purple"></div>
        <div class="glen-rainbow-bar-segment --red"></div>
        <div class="glen-rainbow-bar-segment --orange"></div>
        <div class="glen-rainbow-bar-segment --yellow"></div>
        <div class="glen-rainbow-bar-segment --green"></div>
        <div class="glen-rainbow-bar-segment --blue"></div>
        <div class="glen-rainbow-bar-segment --purple"></div>
        <div class="glen-rainbow-bar-segment --red"></div>
        <div class="glen-rainbow-bar-segment --orange"></div>
      </div>
      <div class="glen-mobile-navigation-head-content">
        <div class="glen-mobile-navigation-logo">
          <a href="/" title="Arbour Glen Day Nursery"></a>
        </div>
        <div class="glen-mobile-navigation-button" onclick="closeMobileNav()">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="glen-crocodilo"></div>
    </div>
    <!-- Mobile Nav Content -->
    <div class="glen-mobile-navigation-content">
      <div class="glen-mobile-accordian">
        <!-- Accordian Item #1 -->
        <div class="glen-mobile-accordian-item">
          <div class="glen-accordian-link">
            <span class="glen-accordian-link-label">PARENT LINK LABEL A</span>
          </div>
          <div class="glen-accordian-hidden">
            <div class="glen-accordian-link">
              <a class="glen-accordian-link-label" href="/" title="todo">CHILD LINK LABEL A1</a>
            </div>
            <div class="glen-accordian-link">
              <a class="glen-accordian-link-label" href="/" title="todo">CHILD LINK LABEL A2</a>
            </div>
            <div class="glen-accordian-link">
              <a class="glen-accordian-link-label" href="/" title="todo">CHILD LINK LABEL A3</a>
            </div>
          </div>  
        </div>
        <!-- Accordian Item #2 -->
        <div class="glen-mobile-accordian-item">
          <div class="glen-accordian-link">
            <span class="glen-accordian-link-label">PARENT LINK LABEL B</span>
          </div>
          <div class="glen-accordian-hidden">
            <div class="glen-accordian-link">
              <a class="glen-accordian-link-label" href="/" title="todo">CHILD LINK LABEL B1</a>
            </div>
            <div class="glen-accordian-link">
              <a class="glen-accordian-link-label" href="/" title="todo">CHILD LINK LABEL B2</a>
            </div>
          </div>  
        </div>
        <!-- Accordian Item #3 -->
        <div class="glen-mobile-accordian-item">
          <div class="glen-accordian-link">
            <a class="glen-accordian-link-label" href="/" title="todo">PARENT LINK LABEL C</a>
          </div>
        </div>
        <!-- Accordian Item #4 -->
        <div class="glen-mobile-accordian-item">
          <div class="glen-accordian-link">
            <a class="glen-accordian-link-label" href="/" title="todo">PARENT LINK LABEL D</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Nav Footer -->
    <div class="glen-mobile-navigation-footer">
      <div class="glen-rainbow-bar">
        <div class="glen-rainbow-bar-segment --yellow"></div>
        <div class="glen-rainbow-bar-segment --green"></div>
        <div class="glen-rainbow-bar-segment --blue"></div>
        <div class="glen-rainbow-bar-segment --purple"></div>
        <div class="glen-rainbow-bar-segment --red"></div>
        <div class="glen-rainbow-bar-segment --orange"></div>
        <div class="glen-rainbow-bar-segment --yellow"></div>
        <div class="glen-rainbow-bar-segment --green"></div>
        <div class="glen-rainbow-bar-segment --blue"></div>
        <div class="glen-rainbow-bar-segment --purple"></div>
        <div class="glen-rainbow-bar-segment --red"></div>
        <div class="glen-rainbow-bar-segment --orange"></div>
      </div>
      <div class="glen-mobile-navigation-footer-content">
        <span class="glen-mobile-navigation-address">1017 adelaide street north,<br>london, on, n5y 2m8</span>
        <span class="glen-mobile-navigation-phone">519.439.3701</span>
        <div class="glen-mobile-navigation-socials">
          <a class="fab fa-facebook" href="/" title="Visit our Facebook page"></a>
          <a class="fab fa-instagram" href="/" title="Visit our Instagram"></a>
        </div>
      </div>
    </div>
  </div>
