<?php get_header(); ?>
    <title>Arbour Glen Day Nursery in London Ontario</title>
    <meta name="description" content="Welcome to Arbour Glen Day Nursery! Love, caring, learning and fun – it doesn't take long to feel the difference you and your child will enjoy at Arbour Glen.">
	</head>
	<body>

  <?php include 'navigation.php' ?>

<div class="glen-home-page">
  <div class="glen-home-hero-image" style="background-image: url(<?php bloginfo('template_url'); ?>/img/shared/boy-with-truck.png);"></div>
  <div class="glen-home-hero-content-box">
    <h1 class="u-white">Arbour Glen<br>Day Nursery</h1>
    <div class="glen-squiggle --yellow"></div>
    <a class= "glen-btn --outlined-wg" title="Join our waiting list" href="https://london.onehsn.com/">join our waiting list</a>
    <?php 
      $query = "select FlagStringValue from tblSiteConfig where ID = 4";
      $results = $wpdb->get_results($query);
      $filePath = get_bloginfo('template_url', 'display') . $results[0]->FlagStringValue;
    ?>
    <a class= "glen-btn --outlined-wg glen-btn-opportunities" title="Job Opportunities" href="<?php echo $filePath; ?>" target="_blank">Job Opportunities</a><br>
    
    <a  class= "glen-btn --solid-wg --juicy" href="tel:5194393701" title="Give us a call!">call us: 519.439.3701</a>
    <div class="glenbox-green --house"></div>
  </div>
<!-- PHP MAGIC </div> -->

<?php get_footer(); ?>
