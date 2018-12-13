<?php get_header(); ?>

<div class="glen-team-page">

  <!-- Hero Section -->

  <section class="glen-team-hero">
    <div class="glen-hero-image --team" style="background-image: url(<?php bloginfo('template_url'); ?>/img/shared/boy-infant-toys.png);"></div>
    <div class="glen-hero-content">
      <div class="glen-hero-basic">
        <h1>Our Team</h1>
        <p>The heart of Arbour Glen is our exceptional team of Educators and Support Staff. Our Registered Early Childhood Educators (RECEs) make Arbour Glen the special place it is. We call it ‘The Arbour Glen difference’ and we look forward to you experiencing this when you visit.</p>
        <div class="glen-iconstrip">
          <div class="glen-iconstrip-bar"></div>
          <img class="glen-iconstrip-image" src="<?php bloginfo('template_url'); ?>/img/icons/icon-rocket.svg" alt="Image of a purple rocket" />
          <div class="glen-iconstrip-bar"></div>
        </div>
        <p>Your child’s caregivers are knowledgeable, caring, and reflective Educators who provide rich experiences and exciting environments to foster learning and development. Hugs are always plentiful, and your child will feel secure knowing that their caregivers are there to celebrate their accomplishments, help them through challenges and comfort them when needed.</p>
      </div>
    </div>
  </section>

  <!-- Balcony Section -->

  <section class="glen-team-balcony">
    <div class="glen-balcony-view --team"></div>
    <div class="glen-balcony">
      <div class="glen-balcony-badge --team"></div>
      <div class="glen-balcony-ledge --team"></div>
      <div class="glen-balcony-content --sticker">
        <div class="glen-balcony-sticker --team">
          <h2>Foundations of Learning</h2>
          <p>Our Educators are trained professionals who hold First Aid/CPR and Food Handlers certificates.  All are life-long learners who participate in ongoing professional development. They understand each child’s potential based on the four foundations of learning:</p>
          <div class="glen-quadblocks">
            <div class="glen-quadblock">
              <h6>BELONGING</h6>
              <div class="glen-quadblock-bar --green"></div>
              <p>Forming relationships with others to establish a sense of <span class="u-green">belonging</span>.</p>
              <div class="glenbox-green-hollow"></div>
            </div>
            <div class="glen-quadblock">
              <h6>WELL-BEING</h6>
              <div class="glen-quadblock-bar --blue"></div>
              <p>Developing their physical and mental/emotional health to support their <span class="u-blue">well-being</span>.</p>
              <div class="glenbox-blue-hollow"></div>
            </div>  
            <div class="glen-quadblock">
              <h6>ENGAGEMENT</h6>
              <div class="glen-quadblock-bar --purple"></div>
              <p>Exploring the world around them through play, discovery and <span class="u-purple">engagment</span> of their body, mind and senses.</p>
              <div class="glenbox-purple-hollow"></div>
            </div>
            <div class="glen-quadblock">
              <h6>EXPRESSION</h6>
              <div class="glen-quadblock-bar --red"></div>
              <p>Communicating through their words, movements and various materials, to enhance <span class="u-red">expression</span> in all forms.</p>
              <div class="glenbox-red-hollow"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MGMT Roster Section -->

  <section class="glen-mgmt-roster">
    <div class="glen-roster">
      <div class="glen-roster-head">
        <h2>Our Management Team</h2>
        <p>Our management team is here for you any time of day. Call them or drop by the administrative offices located on our third floor, but you may often find them in our classrooms as well.</p>
      </div>
      <div class="glen-roster-cards">
          <?php 
          $results = $wpdb->get_results("Select * from tblEmployees where TeamID = 1;");
          foreach ( $results as $emp )
          {
            echo "<div class='glen-roster-card'>";
            echo "<div class='glen-roster-card-image --$emp->Avatar'></div>";
            echo "<span class='--edu-name u-$emp->Avatar'>$emp->Name</span>";
            echo "<p class='--edu-title'>$emp->Title</p>";
            echo "<p class='--edu-bio'>$emp->History</p>";
            echo "<p class='--edu-quote'>\"".$emp->Quote."”</p>";
            echo "</div>";
          }
          ?>
      </div>
    </div>
  </section>

  <!-- Support Roster Section -->

  <section class="glen-support-roster">
    <div class="glen-roster">
      <div class="glen-roster-head">
        <h2>Our Support Team</h2>
        <p>It takes a dedicated group of people to make our team a success including our Supply Staff, our ECE Apprentices, our Dietary Planner and our Custodian.</p>
      </div>
      <div class="glen-roster-cards">
        <?php 
        $results = $wpdb->get_results("Select * from tblEmployees where TeamID = 2;");
        foreach ( $results as $emp )
        {
          echo "<div class='glen-roster-card'>";
          echo "<div class='glen-roster-card-image --$emp->Avatar'></div>";
          echo "<span class='--edu-name u-$emp->Avatar'>$emp->Name</span>";
          echo "<p class='--edu-title'>$emp->Title</p>";
          echo "<p class='--edu-bio'>$emp->History</p>";
          echo "<p class='--edu-quote'>\"".$emp->Quote."”</p>";
          echo "</div>";
        }
        ?>
      </div>
    </div>
  </section>

  <!-- Pre-footer Section -->

  <section class="glen-team-prefooter">
    <div class="glen-team-prefooter-left">
      <h3>Programs &amp; Educators:</h3>
      <div class="glen-prefooter-boxes --team">
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
    <div class="glen-team-prefooter-right">
      <div class="glen-team-prefooter-right-content">
        <h4>Our Current Board of Directors</h4>
        <div class="glen-squiggle --yellow"></div>
        <p>Our organization is overseen by an Executive Director and governed by a Board of Directors. To read more about our directors and for a list of our current Board Members visit:</p>
        <a class="glen-btn --solid-wg" href="/our-vision" title="todo">our vision</a>
        <div class="glenbox-green"></div>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
