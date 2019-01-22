<?php get_header(); ?>

<div class="glen-menus-page">

  <!-- Hero Section -->

  <section class="glen-menus-hero">
    <div class="glen-hero-image --menus" style="background-image: url(<?php bloginfo('template_url'); ?>/img/shared/boy-with-fruit.png);"></div>
    <div class="glen-hero-content">
      <div class="glen-hero-basic">
        <h1>Our Menus</h1>
        <p>At Arbour Glen, we know that sound nutritional practices and healthy eating are essential for optimal growth and development of children and is linked to their brain development and self-esteem. Helping children make good food choices during childhood influences lifelong eating habits. Our menus reflect healthy food and drink choices for children to meet the requirements as set out in the “Eating Well with Canada’s Food Guide”. Tasty meals and snacks are prepared on-site, limiting added sugar and salt when possible.</p>
      </div>
    </div>
  </section>

  <!-- Balcony Section -->

  <section class="glen-menus-balcony">
    <div class="glen-balcony-view --menu"></div>
    <div class="glen-balcony">
      <div class="glen-balcony-badge --menu"></div>
      <div class="glen-balcony-ledge --menu"></div>
      <div class="glen-balcony-content --sticker">
        <div class="glen-balcony-sticker --menu">
          <h2>Food & Nutrition</h2>
          <p>We take pride in our menus, serving fish, chicken or lean beef dishes three times a week and vegetarian meals twice a week (no nuts, no fruit juices and no processed meats). We include mostly fresh or frozen fruits and vegetables and try to limit canned items when practical. We serve only fresh milk daily (whole or 2%, never diluted or powdered) and most of our dips and spreads are homemade. See our menus below or look for them posted on the main hallway bulletin board inside the back entrance.</p>
          <a class="glen-btn --solid-rw" title="Download our menu" href="http://glenstaging.flywheelsites.com/wp-content/uploads/2019/01/Menu_Fall-Winter_2018-19.pdf" target="_blank">Download Our Menu</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Menu Section -->

  <section class="glen-menus-menu">
    <div class="glen-menu-container">

      <!-- Menu Title -->
      <h4 class="glen-menu-title">Fall/Winter Menu</h4>

      <!-- Week Controls Container -->
      <div class="glen-menu-weeks">
        <div class="glen-menu-weeks-button" onclick="menuWeekSelect(-1)">
        <i class="fas fa-angle-left"></i>
        </div>
        <h2 class="glen-menu-week-title">Week 1</h2>
        <div class="glen-menu-weeks-button" onclick="menuWeekSelect(1)">
          <i class="fas fa-angle-right"></i>
        </div>
      </div>

      <!-- Day Controls Container -->
      <div class="glen-menu-days">
        <div class="glen-menu-day --active" onclick="menuDaySelect(0)">
          <span>MON</span>
        </div>
        <div class="glen-menu-day" onclick="menuDaySelect(1)">
          <span>TUES</span>
        </div>
        <div class="glen-menu-day" onclick="menuDaySelect(2)">
          <span>WED</span>
        </div>
        <div class="glen-menu-day" onclick="menuDaySelect(3)">
          <span>THURS</span>
        </div>
        <div class="glen-menu-day" onclick="menuDaySelect(4)">
          <span>FRI</span>
        </div>
      </div>

      <!-- Menu Content Container -->
      <div class="glen-menu-content">
      <?php

      $TOD = array("", "MORNING SNACK", "LUNCH", "AFTERNOON SNACK");
      $TODID = array("", "rowMS", "rowL", "rowAS");
      
      $results = $wpdb->get_results("Select * from tblMenu where Week = 1 and DOW = 1;");

      //echo nl2br($results[0]->Name);
      // echo "<br/>";
      // foreach($results as $row)
      // {
      //   echo nl2br("$row->Name");
      // }
      foreach($results as $row)
      {
       echo '<div class="glen-menu-timeslot">';
       echo '  <h3 class="glen-menu-timeslot-title">'.$TOD[$row->TOD].'</h3>';
       echo '  <div class="glen-menu-timeslot-foodlist" id="'.$TODID[$row->TOD].'">';
       $columns = explode (PHP_EOL, $row->Name); 
        foreach($columns as $column) {
          echo '    <span class="glen-menu-fooditem">'.$column.'</span>';
        }
       echo '  </div>';
       echo '</div>';
      }
        // <div class="glen-menu-timeslot">
        //   <h3 class="glen-menu-timeslot-title">LUNCH</h3>
        //   <div class="glen-menu-timeslot-foodlist">
        //     <span class="glen-menu-fooditem">Homemade Minestrone Soup (Beans)</span>
        //     <span class="glen-menu-fooditem">WW Soda Crackers</span>
        //     <span class="glen-menu-fooditem">Pears Pears Pears Pears Pears Pears Pears Pears Pears </span>
        //     <span class="glen-menu-fooditem">Milk</span>
        //   </div>
        // </div>
        // <div class="glen-menu-timeslot">
        //   <h3 class="glen-menu-timeslot-title">Afternoon Snack</h3>
        //   <div class="glen-menu-timeslot-foodlist">
        //     <span class="glen-menu-fooditem">Homemade Minestrone Soup (Beans)</span>
        //     <span class="glen-menu-fooditem">WW Soda Crackers</span>
        //     <span class="glen-menu-fooditem">Pears Pears Pears Pears Pears Pears Pears Pears Pears </span>
        //     <span class="glen-menu-fooditem">Milk</span>
        //   </div>
        // </div>
        ?>
      </div>
    </div>
  </section>

  <!-- Pre-footer Section -->

  <section class="glen-vision-prefooter">
    <div class="glen-prefooter">
      <h3>Our Programs:</h3>
      <div class="glen-prefooter-boxes">
        <a class="glen-prefooter-box --infants" style="background-image: url(<?php bloginfo('template_url'); ?>/img/prefooter/footer-infants.png);" href="/infants-program" title="Our Infants Program">
          <span class="glen-prefooter-box-title">Infants</span>
        </a>
        <a class="glen-prefooter-box --toddlers" style="background-image: url(<?php bloginfo('template_url'); ?>/img/prefooter/footer-toddlers.png);" href="/toddlers-program" title="Our Toddlers Program">
          <span class="glen-prefooter-box-title">Toddlers</span>
        </a>
        <a class="glen-prefooter-box --preschoolers" style="background-image: url(<?php bloginfo('template_url'); ?>/img/prefooter/footer-preschoolers.png);" href="/preschoolers-program" title="Our Preschoolers Program">
          <span class="glen-prefooter-box-title">Preschoolers</span>
        </a>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
