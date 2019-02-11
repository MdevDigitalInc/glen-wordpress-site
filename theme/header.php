<?php




if($_POST["action"] == "menu_load_action") {

	global $wpdb; // this is how you get access to the database

  $query = "select * from tblMenu where Week = ".$_POST['week']." and DOW = ".$_POST['dow'];
  echo json_encode($wpdb->get_results($query));

	die();
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php



function my_enqueue() {

wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/js/my-ajax-script.js', array('jquery') );

wp_localize_script( 'ajax-script', 'my_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue' );

// add_action( 'wp_ajax_menu_load_action', 'menu_load_action' );
// function menu_load_action() {
// 	global $wpdb; // this is how you get access to the database

//   header('Content-Type: application/json');

//   $query = "select * from tblMenu where Week = ".$_POST['week']." and DOW = ".$_POST['dow'];
//   echo json_encode("Hellos");//$wpdb->get_results($query));

//   wp_die();
// }
?>
	<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Farsan|Open+Sans:400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!-- [ SCRIPTS ] -->
    <script type="text/javascript">
    var menuDay = 1;
    var menuWeek = 1;
    <?php
    global $wpdb;
    $results = $wpdb->get_results("Select max(Week) as maxWeek from tblMenu");
    //print_r(array_values($results));
    echo "var maxWeeks = ".$results[0]->maxWeek.";";
    ?>
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

      function toggleAccordianChildren(index, parent_node) {

        var parent = document.getElementsByClassName("glen-accordian-link");
        var target = document.getElementsByClassName("glen-accordian-hidden");

        if (target[parent_node].classList.contains("--collapse")) {
          target[parent_node].classList.remove("--collapse");
        } else {
          target[parent_node].classList.add("--collapse");
        }

        if (parent[index].classList.contains("--active")) {
          parent[index].classList.remove("--active");
        } else if (!parent[index].classList.contains("--active"))
        {
          parent[index].classList.add("--active");
        }
      }

      function menuDaySelect(index) {
        var target = document.getElementsByClassName("glen-menu-day");

        menuDay = index+1;
        var nextMenu = menuLoad(menuWeek, menuDay);

        for ( i=0 ; i<5 ; i++ ) {
          if (i == index ) {
            target[index].classList.add("--active");
          } else {
            target[i].classList.remove("--active");
          }
        }
      }

      function menuWeekSelect(index) {
        menuWeek += index;

        if(menuWeek > maxWeeks) {
          menuWeek = 1;
        }

        if(menuWeek < 1) {
          menuWeek = maxWeeks;
        }

        var nextMenu = menuLoad(menuWeek, menuDay);

        var target = document.getElementsByClassName("glen-menu-week-title");
        target[0].innerHTML = "Week " + menuWeek;
      }

    </script>
    <!-- [ FACEBOOK OG ] -->
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta property="fb:app_id" content="415535068989678" />
    <meta property="og:type" content="website" />
    <meta property="og:url"  content="http://arbourglen.ca/" />
    <meta property="og:title" content="Daycare and Nursery in London Ontario | Arbour Glen" />
    <meta property="og:description" content="Welcome to Arbour Glen! Love, caring, learning and fun – it doesn't take long to feel the difference you and your child will enjoy at Arbour Glen." />
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/facebook.jpg" />
    <!-- Twitter Card  -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Daycare and Nursery in London Ontario | Arbour Glen"/>
    <meta name="twitter:description" content="Welcome to Arbour Glen! Love, caring, learning and fun – it doesn't take long to feel the difference you and your child will enjoy at Arbour Glen."/>
    <meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/img/twitter.png"/>
    <meta name="Keywords" content="Day Care, Child Care, Infants, Toddlers, Preschoolers">
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
      href="<?php bloginfo('template_url'); ?>/img/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16"
      href="<?php bloginfo('template_url'); ?>/img/favicon.png">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">
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

